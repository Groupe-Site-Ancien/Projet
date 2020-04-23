<!-- style des balises et classes -->
<style type="text/css">
    .section {
        background-color: white;
        padding: 1%;
        font-size: 12pt;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-10 offset-1" style="align-content: center;">
            <br>
            <h3 align="center">Mon profil</h3>
            <br>
            <div>Nom : {{$user->profile->nom ?? 'Non renseigné'}}</div>
            <hr>
            <div>Prénom : {{$user->profile->prenom ?? 'Non renseigné'}}</div>
            <hr>
            <div>Promotion : {{$user->profile->promotion ?? 'Non renseigné'}}</div>
            <hr>
            <div>Sexe (M/F) : {{$user->profile->sexe ?? 'Non renseigné'}}</div>
            <hr>
            <div>Régime d'inscription : {{$user->profile->regime_inscription ?? 'Non renseigné'}}</div>
            <hr>
            <div>Âge lors de votre entrée en Master CCI : {{$user->profile->age_entree_cci ?? 'Non renseigné'}}</div>
            <hr>
            <div>Année de votre dernier diplôme obtenu : {{$user->profile->annee_dernier_diplome ?? 'Non renseigné'}}</div>
            <hr>
            <div>Type de BAC obtenu : {{$user->profile->type_bac ?? 'Non renseigné'}}</div>
            <hr>
            <div>Région d'habitation avant votre entrée en Master CCI : {{$user->profile->region_prec ?? 'Non renseigné'}}</div>
            <br>
            <br>
            <div align="center"><a href="/profiles/{{$user->id}}/edit"><button class="btn btn-info">Modifier mon profil</button></a></div>

        </div>

    </div>

@endsection
