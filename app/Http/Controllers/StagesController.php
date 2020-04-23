<?php

namespace App\Http\Controllers;

use App\Stage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StagesController extends Controller
{
    protected $stage;

    // permet de pouvoir acceder seulement si on est authentifie
    public function __construct()
    {
        $this->middleware('auth');
    }

    // fonction qui retourne la liste de tous les stages
    public function index()
    {
        $stages = Stage::all()->toArray();
        return view('stages.index',compact('stages'));
    }

    // fonction qui retourne un objet stage
    public function show($id)
    {
        $stage = Stage::find($id);
        return view('stages.show', compact('stage'));
    }

    public function edit(User $user)
    {
        //$this->authorize('update', $user->profile->stage);
        return view('stages.edit', compact('user'));
    }

    // permet de creer un stage
    public function create()
    {
        return view('stages.create');
    }

    // sauvegarde le stage dans la base de donnees
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;

        $this->validate($request, [
            'intitule_stage' => 'required',
            'domaine_stage' => 'required',
            'entreprise_stage'=>'required',
            'region_stage'=>'required',
            'ville_stage'=>'required',
            'missions_stage'=>'required',
            'profil_stage'=>'required',
            'rem_stage',
            'url_stage',
        ]);

        $stage = new Stage([
            'user_id' => $user_id,
            'intitule_stage'=> $request->get('intitule_stage'),
            'domaine_stage'=> $request->get('domaine_stage'),
            'entreprise_stage'=> $request->get('entreprise_stage'),
            'region_stage'=> $request->get('region_stage'),
            'ville_stage'=> $request->get('ville_stage'),
            'missions_stage'=> $request->get('missions_stage'),
            'profil_stage'=> $request->get('profil_stage'),
            'rem_stage'=> $request->get('rem_stage'),
            'url_stage'=> $request->get('url_stage')]);

        $stage->save();

        return redirect()->route('stages.index');

    }

}
