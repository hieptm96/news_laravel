<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::all();
    	return view('admin.category.index', compact('categories'));
    }

    public function create(){
        $categories = Category::all();
    	return view('admin.category.create', compact('categories'));
    }

    public function store(CategoryRequest $request){
        $category = new Category;
        $category->name = $request->name;
        $category->slug = create_slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('admin.categories.index')->with('notification_success',"Add category successfully!");
    }

    public function edit($id){
        $categories = Category::all();
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category','categories'));
    }

    public function update(CategoryRequest $request, $id){
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = create_slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect()->route('admin.categories.index')->with('notification_success', 'Update category successfully!');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with('notification_success', "Delete category successfully!");
    }
}
