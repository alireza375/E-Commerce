<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
     public function AllCategory()
    {
        $categories = Category::latest()->get();
        return view('backend.category.category_index', compact('categories'));
    }

    public function AddCategory()
    {
        return view('backend.category.add_category');
    }

    public function StoreCategory(Request $request)
    {
        $cateName = $request->name;
        if (Category::where('name', $cateName)->exists()) {
            return redirect()->back()->with('error', 'Category name already exists.');
        }
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->route('all.category')
            ->with('success', 'Category created successfully');
    }

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|boolean',
    ]);

    $category = Category::findOrFail($id);

    $category->update([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
    ]);

    return redirect()->route('all.category')
        ->with('success', 'Category updated successfully');
}


    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('all.category')
            ->with('success', 'Category deleted successfully');
    }

}
