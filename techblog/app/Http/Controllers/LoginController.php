<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('frontend.login.index');
    }

    public function store(Request $request){
        return 'login store';
    }
}
