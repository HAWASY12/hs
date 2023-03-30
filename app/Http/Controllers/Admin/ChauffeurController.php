<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ChauffeurFormRequest;

class ChauffeurController extends Controller
{
    public function index()
    {
      return view('admin.chauffeur.index');
    }
    public function create()
    {
      return view('admin.chauffeur.create');
    }
    public function store( ChauffeurFormRequest $request)
    {
        $donneesValides = $request->validated();

        $chauffeur = new Chauffeur; 
        $chauffeur->prenom = $donneesValides['prenom'];
        $chauffeur->nom = $donneesValides['nom'];
        $chauffeur->tel = $donneesValides['tel'];
        $chauffeur->adresse = $donneesValides['adresse'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/chauffeur/', $filename);
            $chauffeur->image = $filename;
        }

        $chauffeur->save();

        return redirect('admin/chauffeur')->with('message', 'Chauffeur ajoute avec success!');
    }

     public function edit(Chauffeur $chauffeur)
    {
      return view('admin.chauffeur.edit', compact('chauffeur'));
    }

    public function update(ChauffeurFormRequest $request, $chauffeur)
    {
        $donneesValides = $request->validated();


        $chauffeur = Chauffeur::findOrFail($chauffeur);

        $chauffeur = new Chauffeur; 
        $chauffeur->prenom = $donneesValides['prenom'];
        $chauffeur->nom = $donneesValides['nom'];
        $chauffeur->tel = $donneesValides['tel'];
        $chauffeur->adresse = $donneesValides['adresse'];
        if($request->hasFile('image')){
            $path = 'uploads/chauffeur/'.$chauffeur->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/chauffeur/', $filename);
            $chauffeur->image = $filename;
        }
        $chauffeur->update();

        return redirect('admin/chauffeur')->with('message', 'Chauffeur modifie avec success!');
    }
}
 