@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="alert alert-success" role="alert">
            Votre témoignage a bien été mis à jour.
        </div>

        <p>Voici votre témoignage :</p>
        <div style="background-color: white; padding: 1%; border: solid 1px #b3d7f5; border-radius: 5px;">
            {{$user->profile->temoignage ?? 'N\'hésitez pas à témoigner sur votre aventure au Master CCI, merci !'}}
        </div>

        <br>
        <div align="center">
        <a href="/profiles/{{$user->id}}"><button class="btn btn-primary">Retour à mon profil</button></a>
        </div>

    </div>

@endsection
