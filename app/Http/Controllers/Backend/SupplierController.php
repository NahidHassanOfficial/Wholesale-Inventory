<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Validation\ValidationException;

class SupplierController extends Controller
{
    public function supplierInfo()
    {

    }

    public function createSupplier()
    {

        try {
            request()->validate([
                'name' => 'required|string|max:30',
                'address' => 'required|string|max:50',
                'phone' => 'required|string',
                'takes_return' => 'required|boolean',
                'image' => 'required|image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $supplier = new Supplier();
        $supplier->user_id = request()->header('id');
        $supplier->name = request()->name;
        $supplier->address = request()->address;
        $supplier->phone = request()->phone;
        $supplier->takes_return = request()->takes_return;

        $image = request()->file('image');
        $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/suppliers'), $imageName);
        $supplier->image = $imageName;

        $supplier->save();

        return Response::success();

    }

    public function editSupplier()
    {
        try {
            request()->validate([
                'id' => 'required|exists:suppliers,id',
                'name' => 'required|string|max:30',
                'address' => 'required|string|max:50',
                'phone' => 'required|string',
                'takes_return' => 'required|boolean',
                'image' => 'image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $supplier = Supplier::where('id', request()->id)->where('user_id', request()->header('id'))->first();

        $supplier->user_id = request()->header('id');
        $supplier->name = request()->name;
        $supplier->address = request()->address;
        $supplier->phone = request()->phone;
        $supplier->takes_return = request()->takes_return;

        if (request()->file('image')) {
            $image = request()->file('image');
            $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/suppliers'), $imageName);
            $supplier->image = $imageName;
        }

        if ($supplier->isDirty()) {
            $supplier->save();
        }

        return Response::success();

    }

    public function deleteSupplier()
    {
        $supplier = Supplier::find(request()->supplierId);
        if ($supplier) {
            $supplier->delete();
            return Response::success();
        } else {
            return Response::error('Supplier not found');
        }

    }
}
