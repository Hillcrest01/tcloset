<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('index');
    }

    public function shop(){
        return view('shop');
    }
    public function cart(){
        return view('cart.cart');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function wishlist(){
        return view('wishlist.wishlist');
    }
    public function checkout(){
        return view('cart.checkout');
    }
    public function order_confirmation(){
        return view('cart.order-confirmation');
    }
    public function product_details($id){
        
    }
}
