<!-- Style -->
<style type="text/css">
    p {
        font-size: 12pt;
    }
    .titre {
        font-weight: bold;
        text-align: center;
    }
</style>

@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- Bienvenue dans votre espace personnel -->
        <div align="center;" style="text-align: center; margin-top: 2%;">
            <p style="font-size: 14pt;">Bonjour<span style="font-weight: bold;">{{' ' . $user->profile->prenom ?? ''}}</span>,
                bienvenue dans votre espace membre !</p>
        </div>

        <!-- 1ere ligne de cards : forum, temoignage et enquete -->
        <div class="row" style="margin-top: 4%;" align="center">
            <div class="card col-md-3" style="margin-left: 4%;">
                <img class="card-img-top" src="/jpg/forum.jpg" alt="Forum">
                <div class="card-body">
                    <h5 class="card-title titre">Forum</h5>
                    <p class="card-text">Tu as une question ? Tu veux lancer une discussion ? Rendez-vous sur le forum !</p>
                    <div align="center">
                        <a href="/forum"><button class="btn btn-primary">Forum</button></a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 offset-md-1">
                <img class="card-img-top" src="/jpg/temoignage.jpg" alt="Témoignage">
                <div class="card-body">
                    <h5 class="card-title titre">Témoignage</h5>
                    <p class="card-text">Je raconte comment s'est passé le Master CCI et ce que cela m'a apporté.</p>
                    <div align="center">
                        <a href="/temoignage/{{$user->id}}/edit"><button class="btn btn-primary">Je témoigne</button></a>
                    </div>
                </div>
            </div>
            <div class="card col-md-3 offset-md-1">
                <img class="card-img-top" src="/jpg/enquete.jpg" alt="Enquête">
                <div class="card-body">
                    <h5 class="card-title titre">Enquête</h5>
                    <p class="card-text">Je réponds à l'enquête sur mon parcours après le Master CCI.</p>
                    <div align="center">
                        <a href="/enquete"><button class="btn btn-primary">Je réponds</button></a>
                    </div>
                </div>
            </div>

            <!-- 2eme ligne de cards : stage + reseau -->
            <div class="row" style="margin-top: 5%;" align="center">
                <div class="card col-md-3 offset-md-2">
                    <img class="card-img-top" src="/png/stage.png" alt="Stage">
                    <div class="card-body">
                        <h5 class="card-title titre">Stage</h5>
                        <p class="card-text">Tu es actuellement en formation et tu cherches ton stage de fin d'études ?</p>
                        <div align="center">
                            <a href="/stages"><button class="btn btn-primary">Liste des stages</button></a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3 offset-md-2">
                    <img class="card-img-top" src="/jpg/entraide.jpg" alt="Réseau">
                    <div class="card-body">
                        <h5 class="card-title titre">Réseau</h5>
                        <p class="card-text">Tu connais une entreprise qui cherche des stagiaires en informatique ?</p>
                        <div align="center">
                            <a href="/stages/create"><button class="btn btn-primary">Je dépose une offre</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer-->
        <footer style="margin-top: 2%; margin-bottom: 0px;
        background-color:#d6e9f9; padding-left: 10%; padding-right: 10%; padding-top: 3%; padding-bottom: 3%; bottom: 0px; width: 100%;">
            <div class="container-fluid text-center text-md-left" style="bottom: 0;">
                <div class="row" style="width: 100%; bottom: 0;">
                    <div class="col-md-3 mt-md-0 mt-2">
                        <a href="https://www.univ-tours.fr/">
                            <img src="/png/univtours.png" style="height: 50px; width: auto;"></a>
                    </div>
                    <div align="center" style="padding-top: 20px;" class="col-md-2 offset-md-2 mb-md-0 mb-3">
                        <div>© Master CCI - 2020</div>
                    </div>
                    <div class="col-md-2 offset-md-3 mb-md-0 mb-3">
                        <a href="https://www.facebook.com/Master-2-CCI-Tours-1948671108542437/">
                            <img src="/png/facebook.png" style="height: 50px; width: 50px;"></a>
                        <a href="https://www.linkedin.com/groups/8517340/">
                            <img src="/png/linkedin.png" style="height: 50px; width: 50px;"></a>
                    </div>
                </div>
            </div>
        </footer>

@endsection
