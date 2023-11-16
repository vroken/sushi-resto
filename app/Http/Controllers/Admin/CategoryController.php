<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Alert::warning('Title', 'Lorem Lorem Lorem');
        $categories = Category::latest()->paginate(10);

        $title = 'Delete Categories!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|unique:categories',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        if($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('public/category-images');
        }

        Category::create($validateDate);

        return to_route('admin.categories.index')->with('message', 'new category has been created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.update', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $image = $category->image;

        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/post-images');
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return to_route('admin.categories.index')->with('message', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image) {
            Storage::delete($category->image);
        }

        Category::destroy($category->id);


        return to_route('admin.categories.index')->with('message', 'Category deleted successfully.')->alert()->info('InfoAlert','Lorem ipsum dolor sit amet.');
        ;

        // Storage::delete($category->image);
        // $category->menus()->detach();
        // $category->delete();

        // return to_route('admin.categories.index')->with('message', 'Category deleted successfully.');
    }
}
