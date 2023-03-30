<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ligne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LigneFormRequest;

class LigneController extends Controller
{
    public function index()
    {
      return view('admin.ligne.index');
    }
    public function create()
    {
      return view('admin.ligne.create');
    }
    public function store( LigneFormRequest $request)
    {
        $donneesValides = $request->validated();

        $ligne = new Ligne; 
        $ligne->depart = $donneesValides['depart'];
        $ligne->destination = $donneesValides['destination'];
        $ligne->heure = $donneesValides['heure'];
        $ligne->prix = $donneesValides['prix'];

        $ligne->save();

        return redirect('admin/ligne')->with('message', 'Ligne ajoute avec success!');
    }

     public function edit(Ligne $ligne)
    {
      return view('admin.ligne.edit', compact('ligne'));
    }

    public function update(LigneFormRequest $request, $ligne)
    {
        $donneesValides = $request->validated();


        $ligne = Ligne::findOrFail($ligne);

        $ligne->depart = $donneesValides['depart'];
        $ligne->destination = $donneesValides['destination'];
        $ligne->heure = $donneesValides['heure'];
        $ligne->prix = $donneesValides['prix'];

        $ligne->update();

        return redirect('admin/ligne')->with('message', 'Ligne modifie avec success!');
    }
}
