<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Validation\ValidationException;

class StoreController extends Controller
{
    public function storeInfo()
    {

    }

    public function createStore()
    {
        try {
            request()->validate([
                'name' => 'required|string|max:30',
                'address' => 'required|string|max:50',
                'phone' => 'required|string',
                'image' => 'image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $store = new Store();
        $store->user_id = request()->header('id');
        $store->name = request()->name;
        $store->address = request()->address;
        $store->phone = request()->phone;

        $image = request()->file('image');
        $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/stores'), $imageName);
        $store->image = $imageName;

        $store->save();

        return Response::success();

    }

    public function editStore()
    {
        try {
            request()->validate([
                'id' => 'required|exists:stores,id',
                'name' => 'required|string|max:30',
                'address' => 'required|string|max:50',
                'phone' => 'required|string',
                'image' => 'image',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $store = Store::where('id', request()->id)->where('user_id', request()->header('id'))->first();

        $store->user_id = request()->header('id');
        $store->name = request()->name;
        $store->address = request()->address;
        $store->phone = request()->phone;

        if (request()->file('image')) {
            $image = request()->file('image');
            $imageName = request()->name . rand(1, 999) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/stores'), $imageName);
            $store->image = $imageName;
        }

        if ($store->isDirty()) {
            $store->save();
        }

        return Response::success();
    }

    public function deleteStore()
    {
        $store = Store::find(request()->storeId);
        if ($store) {
            $store->delete();
            return Response::success();
        } else {
            return Response::error('Store not found');
        }

    }

}
