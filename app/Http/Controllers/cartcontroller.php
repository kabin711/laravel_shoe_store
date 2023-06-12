<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function cart(){
        $cart = cart::all();
    }
}
