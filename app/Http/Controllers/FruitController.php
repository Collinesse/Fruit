<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Fruit;
use App\Models\User;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    
        public function saves(Request $request)
        {
            $data = $request->validate([
                'nom' => 'required|string',
                'categorie_id' => 'required|string',
                'date_expiration' => 'required|date',
                'prix' => 'required',
                'image' => 'nullable|image',
    
            ]);
    
         //   $data = $request->all();
    
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $path = $file->store('public/images');
                $data['image'] = $path;
            }
    
            $fruit = Fruit::create($data);
    
            return redirect()->back()->with('success', 'Le fruit a été enregistrée avec succès.');
    
        }
        
                public function ajout()
        {
            $categories = Categorie::all();
            return view('admin.ajout', compact('categories'));
        }

        public function listes()
        {
            $fruits = Fruit::all();
            return view('admin.liste')->with('fruits', $fruits);
    
        }
    
        
    
    //     public function destroy($id)
    // {
    //     $montre =Cars::findOrFail($id);
    //     $montre->delete();
    
    //     return redirect()->back()->with('success', 'L\'enregistrement a été supprimé avec succès.');
    // }
    
        // public function form($id)
        // {
        //     $car = Cars::findOrFail($id);
        //     return view('admin.form')->with('car', $car);
        // }
    
        // public function edits($id)
        // {
        //     $car = Cars::findOrFail($id);
    
        //     return view('agent.form')->with('car', $car);
        // }
        // public function update(Request $request, $id)
        // {
        //     $cars = Cars::findOrFail($id);
    
        //     $data = $request->validate([
        //         'marque' => 'required|string',
        //         'modele' => 'required|string',
        //         'annee' => 'required|date',
        //         'cylindre' => 'required|string',
        //         'carburant' => 'required|string',
        //         'transmission' => 'required|string',
        //         'kilometrage' => 'required',
        //         'marticule' => 'required|string',
        //         'prix' => 'required',
        //         'image' => 'nullable|image',
        //         // Ajoutez ici les autres champs que vous souhaitez mettre à jour
        //     ]);
    
        //     $cars->update($data);
    
        //     return redirect()->back()->with('success', 'L\'enregistrement a été mis à jour avec succès.');
        // }
    
    
        // public function derniersEnregistrements()
        // {
        //     $derniersMontres = Cars::orderBy('created_at', 'desc')
        //         ->limit(8)
        //         ->get();
    
        //     return view('index', compact('derniersMontres'));
        // }
    
        public function personnel()
        {
            $user = User::all();
            return view('admin.personnel')->with('users', $user);
    
        }
}




    // public function store(Request $request)
    // {
    //     $data=$request->validate([
    //         'nom'=>'required|string',
    //         'origine'=>'required|string',
    //         'date_expiration'=> 'required|string',
    //         'prix'=>'required',
    //         'image'=>'nullable|image',
    //     ]);

    //     $fruit=Fruit::create($data);

    //     return redirect()->back()->with('success', 'Boisson créée avec succès.');
    // }
    
