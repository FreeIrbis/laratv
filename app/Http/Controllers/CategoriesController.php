<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function destroy($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return back()->with(['message'=>"Категория ".$categories->name." удалена"]);
    }

    public function edit($id)
    {
        $category=Categories::find($id);
        return view('admin.categories.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $category=Categories::find($id);
        $category->update($request->all());
        $category->save();
        return back()->with('message','Категория обновлена');
    }

    public function create()
    {
        $categories=Categories::all();
        return view('admin.categories.create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        Categories::create($request->all());
        return back()->with('message','Категория добавлена');
    }
}

