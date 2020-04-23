<!-- style des balises et classes -->
<style type="text/css">
    .titre {
        font-weight: bold;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">Mon tableau de bord</div>

                        <div style="padding: 20px;">
                            <p style="font-size: 12pt;">
                            Bonjour {{$user->profile->prenom ?? 'Prénom' }} !
                            <br>
                                Bienvenue sur votre espace personnel des <span style="font-weight: bolder">Anciens du Master CCI</span> :)
                            <br>
                            Nom : {{$user->profile->nom ?? 'Nom'}}
                            <br>

                            @can('update', $user->profile)
                            <a href="/profiles/{{$user->id}}/edit">Modifier mon profil</a>
                            @endcan
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Structure avec les cards -->
    <div class="row" style="margin-top: 3%; width: 100%;">
        <div class="card col-2 offset-2">
            <img class="card-img-top" src="/jpg/temoignage.jpg" alt="Témoignage">
            <div class="card-body">
                <h5 class="card-title titre">Témoignage</h5>
                <p class="card-text">Je raconte comment s'est passé le Master CCI et ce que cela m'a apporté.</p>
                <a href="/temoignage/{{$user->id}}/edit" class="btn btn-primary">Je témoigne !</a>
            </div>
        </div>
        <div class="card col-2 offset-1">
            <img class="card-img-top" src="/jpg/enquete.jpg" alt="Enquête">
            <div class="card-body">
                <h5 class="card-title titre">Enquête</h5>
                <p class="card-text">Je réponds à l'enquête sur mon parcours après le Master CCI.</p>
                <a href="/enquete" class="btn btn-primary">Je réponds !</a>
            </div>
        </div>
        <div class="card col-2 offset-1">
            <img class="card-img-top" src="/png/stage.png" alt="Stage">
            <div class="card-body">
                <h5 class="card-title titre">Stage</h5>
                <p class="card-text">Mon entreprise ou des connaissances cherchent des stagiaires ?</p>
                <a href="/stages/create" class="btn btn-primary">Je dépose une offre !</a>
            </div>
        </div>

@endsection
