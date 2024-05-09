<?php

namespace App\Http\Controllers;

use App\Models\Categorie; // Correction de l'espace de noms pour le modèle Categorie
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create()
    {
        return view('admin.categorie');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'origine' => 'required|unique:categorie|max:255', 
        ]);

        $categorie = Categorie::create($data);

        return redirect()->back()->with('success', 'Catégorie créée avec succès.');
    }


    public function listecategorie()
    {
        $categories = Categorie::all();
        return view('admin.listecategorie')->with("categories",$categories);
    }
}



