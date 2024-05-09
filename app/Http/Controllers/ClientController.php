<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('clientpage.index');
    }
    public function shop(){
        return view('clientpage.shop');
    }
    public function about(){
        return view('clientpage.about');
    }
    public function news(){
        return view('clientpage.news');
    }
    public function contact(){
        return view('clientpage.contact');
    }
    
}
