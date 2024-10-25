<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
{
    return Category::all();
}

public function store(Request $request)
{
    $request->validate(['name' => 'required|string|max:255']);
    Category::create($request->all());
}

public function update(Request $request, Category $category)
{
    $request->validate(['name' => 'required|string|max:255']);
    $category->update($request->all());
}

public function destroy(Category $category)
{
    $category->delete();
}

}
