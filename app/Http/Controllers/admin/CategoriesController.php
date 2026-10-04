<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('admin.category.viewCategory', get_defined_vars());
    }

    public function create()
    {
        return view('admin.category.addCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string',
        ], [
            'category_name' => 'Category name is required',
        ]);

        $category = new Category();
        $category->category_name = $request['category_name'];
        $category->save();
        return redirect()->back()->with('success', 'Category Added');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.editCategory', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'category_name' => 'required|string',
        ], [
            'category_name' => 'Category name is required',
        ]);

        $category->category_name = $request['category_name'];
        $category->update();
        return redirect()->back()->with('success', 'Category updated');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category) {
            $category->delete();
            return redirect()->route('admin.category.viewCategory')->with('success', 'Category Removed Successfully');
        } else {
            return redirect()->route('admin.category.viewCategory')->with('success', 'Category Not Removed');
        }
    }

    public function view(){
        $category = Category::get();
        return view('admin.category.categoryHeaderView',get_defined_vars());
    }
}
