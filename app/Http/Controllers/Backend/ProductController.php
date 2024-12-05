<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    public function productInfo()
    {

    }

    public function createProduct()
    {
        try {
            request()->validate([
                'category_id' => 'required|exists:categories,id',
                'supplier_id' => 'required|exists:suppliers,id',
                'name' => 'required|string|max:30',
                'quantity' => 'required|numeric',
                'unit' => 'required|string',
                'buying_price' => 'required|numeric',
                'selling_price' => 'required|numeric',
                'expiry_date' => 'required|date|after:tomorrow',
                'threshold_qty' => 'required|numeric',
                'image' => 'required|image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $product = new Product();
        $product->user_id = request()->header('id');
        $product->category_id = request()->category_id;
        $product->supplier_id = request()->supplier_id;
        $product->name = request()->name;
        $product->quantity = request()->quantity;
        $product->unit = request()->unit;
        $product->buying_price = request()->buying_price;
        $product->selling_price = request()->selling_price;
        $product->expiry_date = request()->expiry_date;
        $product->threshold_qty = request()->threshold_qty;

        $image = request()->file('image');
        $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/products'), $imageName);
        $product->image = $imageName;

        $product->save();

        return Response::success();

    }

    public function editProduct()
    {
        try {
            request()->validate([
                'id' => 'required|exists:products,id',
                'category_id' => 'required|exists:categories,id',
                'supplier_id' => 'required|exists:suppliers,id',
                'name' => 'required|string|max:30',
                'quantity' => 'required|numeric',
                'unit' => 'required|string',
                'buying_price' => 'required|numeric',
                'selling_price' => 'required|numeric',
                'expiry_date' => 'required|date|after:tomorrow',
                'threshold_qty' => 'required|numeric',
                'image' => 'image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $product = Product::where('id', request()->id)
            ->where('user_id', request()->header('id'))
            ->first();

        $product->category_id = request()->category_id;
        $product->supplier_id = request()->supplier_id;
        $product->name = request()->name;
        $product->quantity = request()->quantity;
        $product->unit = request()->unit;
        $product->buying_price = request()->buying_price;
        $product->selling_price = request()->selling_price;
        $product->expiry_date = request()->expiry_date;
        $product->threshold_qty = request()->threshold_qty;

        if (request()->file('image')) {
            $image = request()->file('image');
            $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $product->image = $imageName;
        }

        if ($product->isDirty()) {
            $product->save();
        }

        return Response::success();

    }

    public function deleteProduct()
    {
        $product = Product::find(request()->productId);
        if ($product) {
            $product->delete();
            return Response::success();
        } else {
            return Response::error('Product not found');
        }
    }
}
