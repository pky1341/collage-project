<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function input(){
        return view('form');
    }
    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}
