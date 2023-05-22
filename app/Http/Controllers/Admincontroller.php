<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view('admin.usermanagement');
       
    }
    public function addproduct(){
        return view ('admin.addproduct');
    }
}
