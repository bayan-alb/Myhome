<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
        
    }

    public function store(Request $request){

        $category = new Category;
        $category->name  = $request->name ;
        $category->save();
        return redirect()->route('index-categories');
    }

    public function index(){
        $categories = Category::all();

        return view('admin.categories.index' , compact('categories'));

    }

    public function edit($id){

        $category = Category::find($id);

        return view('admin.categories.edit' , compact('category'));
         

    }

   
}
