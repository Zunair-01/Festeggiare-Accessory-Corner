<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::with('category')->get();
        return view('admin.product.viewProduct', compact('product'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.product.addProduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name'        => 'required|string',
            'category'            => 'required|integer|exists:product_categories,id',
            'product_price'       => 'required|numeric ',
            'product_image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'product_description' => 'required|string',
        ], [
            'product_name'        => 'Product name is required',
            'category'            => 'Product category is required',
            'product_price'       => 'Product price is required',
            'product_image'       => 'Product image is required',
            'product_description' => 'Product description is required',
        ]);

        if ($request->hasFile('product_image')) {
            $productPicture = $request->file('product_image');
            $originalName = time() . '.' . $productPicture->getClientOriginalExtension();
            $productPicturePath = $productPicture->move('product_image', $originalName);
        }

        $product  = new Product();
        $product->product_name = $request['product_name'];
        $product->category = $request['category'];
        $product->product_price = $request['product_price'];
        $product->product_image = $productPicturePath;
        $product->product_description = $request['product_description'];
        $product->save();
        return redirect()->back()->with('success', 'Product Added');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::get();
        return view('admin.product.editProduct', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'product_name'        => 'required|string',
            'category'            => 'required|integer|exists:product_categories,id',
            'product_price'       => 'required|numeric ',
            'product_image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'product_description' => 'required|string',
        ], [
            'product_name'        => 'Product name is required',
            'category'            => 'Product category is required',
            'product_price'       => 'Product price is required',
            'product_image'       => 'Product image is required',
            'product_description' => 'Product description is required',
        ]);

        if ($request->hasFile('product_image')) {
            $productPicture = $request->file('product_image');
            $originalName = time() . '.' . $productPicture->getClientOriginalExtension();
            $productPicturePath = $productPicture->move('product_image', $originalName);
        }

        $product->product_name = $request['product_name'];
        $product->category = $request['category'];
        $product->product_price = $request['product_price'];
        $product->product_image = $productPicturePath;
        $product->product_description = $request['product_description'];
        $product->update();
        return redirect()->back()->with('success', 'Product Updated Seccessfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Product Remove Successfully');
        } else {
            return redirect()->route('product.index')->with('success', 'Product Not Remove');
        }
    }
}
