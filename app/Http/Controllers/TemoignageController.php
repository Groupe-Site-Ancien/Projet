<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemoignageController extends Controller
{
    public function show(User $user)
    {
        return view('temoignage.show', compact('user'));
    }

    public function edit(User $user)
    {
        //$this->authorize('update', $user);
        return view('temoignage.edit', compact('user'));
    }

    public function update(User $user)
    {
        //$this->authorize('update', $user);
        $data = request()->validate([
            'temoignage' => 'required',
        ]);
        $user->profile->update($data);

        // redirection vers la page témoignage pour visualiser l'update du temoignage
        return redirect("/temoignage/{$user->id}");
    }
}
