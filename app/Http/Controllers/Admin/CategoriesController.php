<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function _contruct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories ]);
    }
    public function store(Request $request)
    {
        //dd(\App\Models\Category::all() );
       // Category::create([
       //     'name' => $request->category
      //  ]);
      $newCategory = new Category();

      $newCategory->name = $request->name;
      $newCategory->save();

      return redirect()->back();
    }

    public function update(Request $request, $categoryId)

    {
      dd($categoryId);
      $category = Category::find($categoryId);

      $category->name = $request->name;

      $category->save();

      return redirect()->back();
    }

    public function delete(Request $request, $categoryId)
    {
        
      $category = Category::find($categoryId);
      $category->delete();
      return redirect()->back();
    }
}
