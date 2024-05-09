<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.main');
    }

    public function ajout(){
        return view('admin.ajout');
    }
    public function liste(){
        return view('admin.liste');
    }

    public function listevente(){
        return view('admin.listevente');
    }
    
    public function categorie(){
        return view('admin.categorie');
    }

    public function listecategorie(){
        return view('admin.listecategorie');
    }
    public function personnel(){
        return view('admin.personnel');
    }
    public function reservation(){
        return view('admin.reservation');
    }

}
