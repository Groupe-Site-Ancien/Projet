<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    /*
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index', ['user' => $user]);
    }
    */

    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function details(User $user)
    {
        return view('profiles.details', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'promotion'=>'required',
            'sexe'=>'required',
            'regime_inscription'=>'required',
            'age_entree_cci'=>'required',
            'annee_dernier_diplome'=>'required',
            'type_bac'=>'required',
            'region_prec'=>'required',
    ]);
        $user->profile->update($data);

        return redirect("/profiles/{$user->id}");
    }
}
