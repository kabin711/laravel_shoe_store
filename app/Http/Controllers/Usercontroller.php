<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return view('dashboard');
       
    }

    public function product(){
        $data=Product:: all();
        return view ('product',compact('data'));
    }

    public function cart(){
        $cart= Cart::where('userid',auth()->user()->id)->get();

        return view('cart',compact('cart'));
  
    
   
}

    public function userorder(){
        return view ('userorder');
    }
}
