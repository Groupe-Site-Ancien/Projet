@extends('layouts.app')

@section('content')
    <div class="container">
        {{$user->id}}

        <form action="/profiles/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <h2>Modifier mon profil</h2>
            </div>
            <div>
                <div class="form-group row">
                    <label for="nom" class="col-md-4 col-form-label">Nom</label>
                    <input id="nom"
                           type="text"
                           class="form-control{{ $errors->has('nom') ? ' is invalid' : ''}}"
                           name="nom"
                           value="{{ old('nom') ?? $user->profile->nom }}"
                           autocomplete="nom" autofocus>
                    @if($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                     @endif
                </div>

                <div class="form-group row">
                    <label for="prenom" class="col-md-4 col-form-label">Prénom</label>
                    <input id="prenom"
                           type="text"
                           class="form-control{{ $errors->has('prenom') ? ' is invalid' : ''}}"
                           name="prenom"
                           value="{{ old('prenom') ?? $user->profile->prenom }}"
                           autocomplete="prenom" autofocus>
                    @if($errors->has('prenom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('prenom') }}</strong>
                        </span>
                    @endif
                </div>

                <div>
                    <button class="btn btn-primary">Valider</button>
                </div>

            </div>

        </form>

    </div>
@endsection
