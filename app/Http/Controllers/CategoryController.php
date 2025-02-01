<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function ShowCategory()
    {
        $categories = Category::all();
        return view('dash-category',compact('categories'));
    }

    public function AddCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return $this->ShowCategory();
    }
}
