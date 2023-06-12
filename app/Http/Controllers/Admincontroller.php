<?php


namespace App\Http\Controllers;
use App\Models\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Admincontroller extends Controller
{
    public function index(){
        return view('admin.dashboard');
       
    }
    public function addproduct(){
       
            return view ('admin.addproduct');

        
    }

    public function productstore(Request $request){
        $data = $request->all();
        Product::create($data);
        return view ('admin.addproduct');

    }
 
    public function userdetails(){
        $user = User::all();
       
        return view ('admin.usermanagement',compact('user'));
    }
}
