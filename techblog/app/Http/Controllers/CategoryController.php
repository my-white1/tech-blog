<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::all();

        return view('admin.home.index' , compact('categories'));
    }

    public function show(){
        return view('admin.category.index');
    }

    public function store(Request $request)
    {
        
        $data = request()->all();

        Category::create($data);
        return redirect()->route('admin');
    }

    public function destroy(Category $category){
        $category->delete();

        return redirect()->route('admin');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit' , compact('category'));
    }

    public function update(Request $request , Category $category){
        // $request->validate([
        //     'name' => 'required',
        // ]);

        $category->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin');
    }


}
