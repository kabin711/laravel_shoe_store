<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartcontroller extends Controller
{
    public function cart(){

       
       $cart= DB::table('carts')
        ->join('products', 'carts.productid', '=', 'products.id')
        ->select('carts.id','products.name','products.price','products.image','products.description', 'carts.quantity')
        ->where('carts.userid', auth()->user()->id)
        ->get();
        // return dd($cart);
        return view('cart',compact('cart'));
    }
    public function addcart(Request $request){
        $cart = Cart::where('userid',auth()->user()->id)->where('productid',$request->productid)->count();
        if($cart > 0)
        {
           dd('already in cart');
        }
        else
        {
        //     $data = $request->all();
        // Cart::create($data);
        
        $cart =new cart();
        $cart->userid = $request->userid;
        $cart->productid = $request->productid;
        $cart->price = $request->price;
        $cart->quantity = $request->quantity;
        $cart->save();

        }
        
        return redirect(route('cart'));

    }
    public function delete($cartid){
        $id= Cart::find($cartid);
        $id->delete($id->id);
        return redirect(route('cart'));

    }
}
