<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Category $category){

        $category = Category::all();

        return view('admin.post.index' , compact('category'));
    }

    public function store(Request $request){
        dd(request()->all());
    }
}
