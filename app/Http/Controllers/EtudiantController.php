<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index')->with('etudiants', $etudiants);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $etudiants = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'commune'=>'required',
            'telephone'=>'required',
            'email'=>'required',

        ]);

        $data = new Etudiant();
        $data ->nom = $etudiants['nom'];
        $data ->prenom = $etudiants['prenom'];
        $data ->commune = $etudiants['commune'];
        $data ->telephone = $etudiants['telephone'];
        $data ->email = $etudiants['email'];
        $data->save();

        return redirect('/')->with('message', $data);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.show')->with('etudiant', $etudiants);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiants = Etudiant::find($id);
        return view('etudiant.edit')->with('etudiant', $etudiants);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiants = Etudiant::find($id);
        $input= $request->all();
        $etudiants = update($input);
        return redirect('etudiant')->with('message', 'succes: etudiant modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Etudiant::destroy($id);
        return redirect('etudiant')->with('message', 'succes: etudiant supprimer');
    }
}
