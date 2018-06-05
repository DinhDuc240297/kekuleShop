<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
    	return view('layout.home');
    }

    public function getIndexAdmin(){
    	return view('admin.homeadmin');
    }

    public function getProduct(){
    	return view ('layout.product');
    }

    public function getShoppingCart(){
    	return view ('layout.shopping-cart');
    }
}
