<?php

namespace App\Http\Controllers;

use illuminate\Http\Controllers;



class ProductsController extends Controller
{
    public function babykid() {
        return view('produk.babykid');
    }
    public function beautyhealthy() {
        return view('produk.beautyhealthy');
    }
    public function foodbeverage() {
        return view('produk.foodbeverage');
    }
    public function homecare() {
        return view('produk.homecare');
    }

   
}