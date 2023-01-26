<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home(){
        return view('main');

    }
    public function categories(){
        return view('categories');


    }
    public function login(){
        return view('login'); 
    }
    public function admin(){
        return view('admin'); 
    }
    
}
