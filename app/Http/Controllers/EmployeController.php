<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employé;

class EmployeController extends Controller
{
    public function liste_employé()
    {
      $employés = Employé::all();
        return view('employé.liste', compact('employés'));
    }

    public function ajouter_employé()
    {
        return view('employé.ajouter');
    }

    public function ajouter_employé_traitement(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required',
            'email' => 'required',
            'numéro' => 'required',

        ]);

        $employé = new Employé();
        $employé ->nom = $request->nom;
        $employé->prenom = $request->prenom;
        $employé->fonction = $request->fonction;
        $employé->email = $request->email;
        $employé->numéro = $request->numéro;
        $employé->save();

        return redirect('/ajouter')->with('message','Ajouté avec succès');
    }

    public function modifier_employé($id)
    {
        $employés = Employé::find($id);
        return view('employé.modifier', compact('employés'));
    }

    public function modifier_employé_traitement(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'fonction' => 'required',
            'email' => 'required',
            'numéro' => 'required',

        ]);
        $employé = Employé::find($request->id);
        $employé ->nom = $request->nom;
        $employé->prenom = $request->prenom;
        $employé->fonction = $request->fonction;
        $employé->email = $request->email;
        $employé->numéro = $request->numéro;
        $employé->update();

        return redirect('/employé')->with('message','Modifié avec succès');


    }

    public function supprimer_employé($id)
    {
        $employé = Employé::find($id);
        $employé->delete();
        return redirect('/employé')->with('message','Supprimé avec succès');
    }
}
