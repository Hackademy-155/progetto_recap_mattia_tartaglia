<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicConctroller extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contact(){
        return view('contact');
    }

    
        
}
