<?php

namespace App\Http\Controllers;

use App\Enquete;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnqueteController extends Controller
{
    protected $enquete;

    // permet de pouvoir acceder seulement si on est authentifie
    public function __construct()
    {
        $this->middleware('auth');
    }

    // permet de creer une enquete
    public function create()
    {
        return view('enquete.create');
    }

    // sauvegarde les donnees de l'enquete dans la base
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = auth()->user();

        $this->validate($request, [
            'situation' => 'required',
            'delai_emploi' => 'required',
            'canal_emploi'=>'required',
            'type_employeur'=>'required',
            'nom_employeur'=>'required',
            'temps_travail'=>'required',
            'type_contrat'=>'required',
            'domaine_emploi' => 'required',
            'intitule_emploi' =>'required',
            'region_emploi' => 'required',
            'tranche_salaire' => 'required',
            'salaire_net' => '',
            'satisfaction_emploi' => 'required',
        ]);

        $enquete = new Enquete([
            'user_id' => $user_id,
            'situation'=> $request->get('situation'),
            'delai_emploi'=> $request->get('delai_emploi'),
            'canal_emploi'=> $request->get('canal_emploi'),
            'type_employeur'=> $request->get('type_employeur'),
            'nom_employeur'=> $request->get('nom_employeur'),
            'temps_travail'=> $request->get('temps_travail'),
            'type_contrat'=> $request->get('type_contrat'),
            'domaine_emploi'=> $request->get('domaine_emploi'),
            'intitule_emploi'=> $request->get('intitule_emploi'),
            'region_emploi' => $request->get('region_emploi'),
            'tranche_salaire'=>$request->get('tranche_salaire'),
            'salaire_net'=> $request->get('salaire_net'),
            'satisfaction_emploi'=> $request->get('satisfaction_emploi')]);

        $enquete->save();

        return redirect()->route("profiles.show",['user' => $user_id]);

    }

}
