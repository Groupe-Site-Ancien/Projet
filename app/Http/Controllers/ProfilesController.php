<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
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
    ]);
        $user->profile->update($data);

        /* Version protégée (authentifié) mais ne fonctionne pas
        auth()->user()->profile->update($data);
        */

        return redirect("/profiles/{$user->id}");
    }
}
