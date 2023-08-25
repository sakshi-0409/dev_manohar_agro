<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function contact_us(){
        return view('pages.contact_us');
    }
    public function cart(){
        return view('pages.cart');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function shop_detail(){
        return view('pages.shop_detail');
    }
    public function my_account(){
        return view('pages.my_account');
    }
    public function wishlist(){
        return view('pages.wishlist');
    }
}
