<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        return view('admin.dashboard');
       
    }
    public function addproduct(){
        return view ('admin.addproduct');
    }
 
    public function userdetails(){
        return view ('admin.usermanagement');
    }
}
