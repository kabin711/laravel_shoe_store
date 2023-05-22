<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return view('dashboard');
       
    }

    public function product(){
        return view ('product');
    }

    public function cart(){
        return view ('cart');
    }

    public function userorder(){
        return view ('userorder');
    }
}
