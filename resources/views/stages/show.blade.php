<!-- style des balises et classes -->
<style type="text/css">
    .titre {
        font-weight: bold;
        font-size: 16pt;
    }
    .section {
        background-color: white;
        padding: 1%;
        font-size: 12pt;
    }
    .sous-section {
        padding-top: 1%;
    }
</style>

@extends('layouts.app')

@section('content')

    <div class="col-md-8 offset-2" style="align-content: center;">
        <br>
        <h3 align="center">Détails du stage</h3>
        <br>
        <div class="titre">{{$stage['intitule_stage']}}</div>
        <br>
        <div class="section">Domaine métier : {{$stage['domaine_stage']}}</div>
        <br>
        <div class="section">Entreprise : {{$stage['entreprise_stage']}}</div>
        <br>
        <div class="section">Région du stage : {{$stage['region_stage']}}</div>
        <br>
        <div class="section">Ville : {{$stage['ville_stage']}}</div>
        <br>
        <div class="section">Missions du stage :
            <br>
        <div class="sous-section">{{$stage['missions_stage']}}</div></div>
        <br>
        <div class="section">Profil recherché :
            <br>
        <div class="sous-section">{{$stage['profil_stage']}}</div></div>
        <br>
        <div class="section">Gratification : {{$stage['rem_stage'] . "€ brut par mois" ?? 'Non renseigné'}}</div>
        <br>
        <div class="section">Lien vers l'offre : {{$stage['url_stage'] ?? 'Non renseigné'}}</div>
        <br>
        <br>
        <div align="center"><a href="/stages"><button class="btn btn-info">Retour à la liste des stages</button></a></div>

    </div>

@endsection
