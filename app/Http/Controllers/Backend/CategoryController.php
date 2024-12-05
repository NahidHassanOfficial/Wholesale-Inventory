<?php

namespace App\Http\Controllers\Backend;

use App\Helper\Response;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function categoryInfo()
    {

    }

    public function createCategory()
    {
        try {
            request()->validate([
                'name' => 'required|unique:categories,name',
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        $category = new Category();
        $category->user_id = request()->header('id');
        $category->name = request()->name;
        $category->save();

        return Response::success();

    }

    public function editCategory()
    {
        try {
            request()->validate([
                'id' => 'required|exists:categories,id',
                'name' => 'required|unique:categories,name,' . request('id'),
            ]);

        } catch (ValidationException $e) {
            return Response::validationError($e->errors());
        }

        Category::where('id', request()->id)
            ->where('user_id', request()->header('id'))
            ->update(['name' => request()->name]);

        return Response::success();

    }

    public function deleteCategory()
    {
        $category = Category::find(request()->categoryId);
        if ($category) {
            $category->delete();
            return Response::success();
        } else {
            return Response::error('Category not found');
        }
    }
}
