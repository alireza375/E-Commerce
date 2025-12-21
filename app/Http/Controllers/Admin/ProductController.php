<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function AllProduct(){
        $products = Product::latest()->get();
        return view('backend.product.all_product',compact('products'));
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        return view('backend.product.add_product',compact('categories'));
    }

    public function StoreProduct(Request $request)
    {
        // Validate request
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'category_id' => 'required|exists:categories,id',
        //     'unit' => 'required|string|in:kg,g,pcs',
        //     'selling_price' => 'required|numeric',
        //     'buying_price' => 'required|numeric',
        //     'stock' => 'required|integer',
        //     'status' => 'required|boolean',
        //     'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        // ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|numeric|min:0',
            'unit' => 'required|string',
            'buying_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ];

        // Handle image upload
      if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = date('YmdHi') . $file->getClientOriginalName();
    $file->move(public_path('upload/product_images'), $filename); // Correct path
    $data['image'] = $filename;
}


        // Insert into database
        Product::create($data);

        // Notification
        $notification = [
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.product')->with($notification);
    }

    public function EditProduct($id){
        $product = Product::findOrFail($id);
        $categories = Category::latest()->get();
        return view('backend.product.edit_product',compact('product','categories'));
    }


    public function UpdateProduct(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'unit' => 'required|string|in:kg,g,pcs',
            'selling_price' => 'required|numeric',
            'buying_price' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $product = Product::findOrFail($id);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ];

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/product_images'), $filename);
            $data['image'] = $filename;
        }

        // Update database
        $product->update($data);

        // Notification
        $notification = [
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.product')->with($notification);
    }

    public function DeleteProduct($id){
        $product = Product::findOrFail($id);
        $product->delete();

        $notification = [
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.product')->with($notification);
    }


}
