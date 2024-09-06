<?php

namespace App\Http\Controllers;

use illuminate\Http\Controllers;



class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
}