<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\InvoiceItem;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public function createOrder()
    {
        try {
            request()->validate([
                'storeId' => 'required|exists:stores,id',
                'orderItems' => 'required|array',
                'discount' => 'decimal:0,100',
            ]);
        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }
        $userId = request()->header('id');
        $storeId = request()->storeId;
        $orderItems = request()->orderItems;
        $discount = request()->discount;
        $totalAmount = 0;

        $store = Store::findOrFail($storeId);

        foreach ($orderItems as &$item) {
            $product = Product::where('id', $item['id'])
                ->where('quantity', '>=', $item['quantity'])->first();

            if ($product) {
                $item['name'] = $product->name;
                $item['price'] = $product->selling_price;
                $item['totalAmount'] = $item['price'] * $item['quantity'];
                $totalAmount += $item['totalAmount'];
            } else {
                return Response::error('Some product is not available in stock');
            }
        }
        unset($item);

        DB::beginTransaction();
        try {
            $invoice = Invoice::create([
                'user_id' => $userId,
                'store_id' => $storeId,
                'total' => $totalAmount,
                'discount' => $discount,
                'payable' => $totalAmount,
                'status' => 'pending',
                'store_name' => $store->name,
                'store_address' => $store->address,
                'store_phone' => $store->phone,
            ]);

            foreach ($orderItems as $item) {
                InvoiceItem::create([
                    'user_id' => $userId,
                    'invoice_id' => $invoice->id,
                    'product_id' => $item['id'],
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'amount' => $item['totalAmount'],
                ]);

                //update the stocks
                Product::where("id", $item['id'])
                    ->where('quantity', '>=', $item['quantity'])
                    ->decrement('quantity', $item['quantity']);

            }
            DB::commit();
            return Response::success();

        } catch (\Exception $e) {
            DB::rollBack();
            return Response::Out('failed');
        }
    }
}
