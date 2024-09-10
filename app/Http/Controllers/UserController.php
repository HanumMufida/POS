<?php

namespace App\Http\Controllers;

use illuminate\Http\Controllers;



class UserController extends Controller
{
    
    public function user($id,$nama){
        return view('user')
        ->with('id',$id)
        ->with('nama', $nama)
        ->with('nim', '2241760042');
    }
   
}