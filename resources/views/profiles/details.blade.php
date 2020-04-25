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

        <h3>Mon profil</h3>
        <br>

        <div style="padding: 1%; border: solid 1px #b3d7f5; border-radius: 5px;">
            <div class="section">Nom : {{$user->profile->nom ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Prénom : {{$user->profile->prenom ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Promotion : {{$user->profile->promotion ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Sexe (M/F) : {{$user->profile->sexe ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Régime d'inscription : {{$user->profile->regime_inscription ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Âge lors de votre entrée en Master CCI : {{$user->profile->age_entree_cci ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Année de votre dernier diplôme obtenu : {{$user->profile->annee_dernier_diplome ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Type de BAC obtenu : {{$user->profile->type_bac ?? 'Non renseigné'}}</div>
            <br>
            <div class="section">Région d'habitation avant votre entrée en Master CCI : {{$user->profile->region_prec ?? 'Non renseigné'}}</div>
        </div>

        <br>
        <div align="center"><a href="/profiles/{{$user->id}}/edit"><button class="btn btn-primary">Modifier mon profil</button></a></div>

    </div>

@endsection
