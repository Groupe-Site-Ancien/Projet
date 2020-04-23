<!-- style des balises et classes -->
<style type="text/css">
    .titre {
        font-weight: bold;
    }
</style>

@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="alert alert-success" role="alert">
            Votre témoignage a bien été mis à jour.
        </div>

        <p>Voici votre témoignage :</p>
        <div>{{$user->profile->temoignage ?? 'N\'hésitez pas à témoigner sur votre aventure au Master CCI, merci !'}}</div>

        <br>
        <a href="/profiles/{{$user->id}}"><button class="btn btn-primary">Retour à mon profil</button> </a>

    </div>

@endsection
