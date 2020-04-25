<!-- Style -->
<style>
    /* style personnalisé pour les boutons radio */
    .rad {
        margin-left: 3%;
        margin-right: 1%;
        margin-top: 5px;
    }
</style>

@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/profiles/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <h2>Modifier mon profil</h2>
            </div>

            <div>
                <!-- Nom -->
                <div class="form-group row">
                    <label class="col-md-4 col-form-label">Nom</label>
                    <input id="nom"
                           type="text"
                           class="form-control{{ $errors->has('nom') ? ' is invalid' : ''}}"
                           name="nom"
                           value="{{ old('nom') ?? $user->profile->nom }}"
                           autocomplete="nom" required autofocus>
                    @if($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Prénom -->
                <div class="form-group row">
                    <label for="prenom" class="col-md-4 col-form-label">Prénom</label>
                    <input id="prenom"
                           type="text"
                           class="form-control{{ $errors->has('prenom') ? ' is invalid' : ''}}"
                           name="prenom"
                           value="{{ old('prenom') ?? $user->profile->prenom }}"
                           autocomplete="prenom" required>
                    @if($errors->has('prenom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('prenom') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Promotion -->
                <div class="form-group row">
                    <label for="promotion" class="col-md-4 col-form-label">Promotion</label>
                    <input type="number"
                           class="form-control{{ $errors->has('promotion') ? ' is invalid' : ''}}"
                           name="promotion"
                           placeholder="Saisir l'année de diplôme, ex : 2020"
                           value="{{ old('promotion') ?? $user->profile->promotion}}"
                           min="1990"
                           max="2020"
                           step="1"
                           autocomplete="promotion" required>
                    @if($errors->has('promotion'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('promotion') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Sexe -->
                <label for="sexe">Sexe</label>
                <div class="form-group row">
                    <input class="rad" type="radio" id="M"
                           name="sexe" value="M" required="true">
                    <label for="M">Masculin</label>
                    <input class="rad" type="radio" id="F"
                           name="sexe" value="F">
                    <label for="F">Féminin</label>
                    @if($errors->has('sexe'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sexe') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Régime d'inscription -->
                <label for="regime_inscription">Régime d'inscription</label>
                <div class="form-group row">
                    <input class="rad" type="radio" id="initiale"
                           name="regime_inscription" value="initiale" required="true">
                    <label for="initiale">Formation initiale</label>
                    <input class="rad" type="radio" id="continue"
                           name="regime_inscription" value="continue">
                    <label for="continue">Formation continue</label>
                    @if($errors->has('regime_inscription'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('regime_inscription') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Âge lors de l'entrée en CCI -->
                <div class="form-group row">
                    <label for="age_entree_cci" class="col-md-4 col-form-label">Âge lors de votre entrée en Master CCI</label>
                    <input type="number"
                           class="form-control{{ $errors->has('age_entree_cci') ? ' is invalid' : ''}}"
                           name="age_entree_cci"
                           placeholder="Saisir une valeur entière"
                           value="{{ old('age_entree_cci') ?? $user->profile->age_entree_cci}}"
                           min="18"
                           max="100"
                           step="1"
                           autocomplete="age_entree_cci" required>
                    @if($errors->has('age_entree_cci'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('age_entree_cci') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Année dernier diplome obtenu -->
                <div class="form-group row">
                    <label for="annee_dernier_diplome" class="col-md-4 col-form-label">Année de votre dernier diplôme obtenu avant le CCI</label>
                    <input type="number"
                           class="form-control{{ $errors->has('annee_dernier_diplome') ? ' is invalid' : ''}}"
                           name="annee_dernier_diplome"
                           placeholder="Saisir l'année de diplôme, ex : 2019"
                           value="{{ old('annee_dernier_diplome') ?? $user->profile->annee_dernier_diplome}}"
                           min="1960"
                           max="2019"
                           step="1"
                           autocomplete="annee_dernier_diplome" required>
                    @if($errors->has('annee_dernier_diplome'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('annee_dernier_diplome') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Type de BAC obtenu -->
                <label for="type_bac">Type de BAC obtenu</label>
                <div class="form-group row">
                    <input class="rad" type="radio" name="type_bac" value="S" required="true" style="margin-left: 3%;">
                    <label>S</label>
                    <input class="rad" type="radio" name="type_bac" value="ES" style="margin-left: 3%;">
                    <label>ES</label>
                    <input class="rad" type="radio" name="type_bac" value="L">
                    <label>L</label>
                    <input class="rad" type="radio" name="type_bac" value="professionnel">
                    <label>Professionnel</label>
                    @if($errors->has('type_bac'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type_bac') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Region precedente -->
                <label>Région précédant votre entrée en Master CCI</label>
                <select name="region_prec" required>
                    <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                    <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                    <option value="Bretagne">Bretagne</option>
                    <option value="Centre-Val de Loire" selected>Centre-Val de Loire</option>
                    <option value="Corse">Corse</option>
                    <option value="Grand Est">Grand Est</option>
                    <option value="Hauts-de-France">Hauts-de-France</option>
                    <option value="Île-de-France">Île-de-France</option>
                    <option value="Normandie">Normandie</option>
                    <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                    <option value="Occitanie">Occitanie</option>
                    <option value="Pays de la Loire">Pays de la Loire</option>
                    <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                    <option value="Outre-mer">Outre-mer</option>
                    <option value="Etranger">Etranger</option>
                </select>

                <br><br>
                <div align="center">
                    <button class="btn btn-primary">Valider</button>
                </div>

            </div>

        </form>

    </div>
@endsection
