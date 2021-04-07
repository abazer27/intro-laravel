<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function wellcome_post(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        return view('wellcome', compact('fname','lname'));
    }
    public function wellcome(){
        return view('wellcome');
    }
}
