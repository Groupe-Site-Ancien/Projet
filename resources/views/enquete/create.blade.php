@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="/enquete" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')

            <div class="row">
                <h2>Répondre à l'enquête</h2>
            </div>

            <div class="form-group">
            <label>Situation actuelle : </label>
            <select name="situation">
                <option value="En emploi">En emploi</option>
                <option value="En études">En études</option>
                <option value="En recherche d'emploi">En recherche d'emploi</option>
            </select>
            </div>

            <div class="form-group">
            <label>Combien de temps avez-vous mis pour trouver votre premier emploi après l'obtention du Master CCI ? </label>
            <select name="delai_emploi">
                <option value="Immédiatement">Immédiatement</option>
                <option value="Moins d'un mois">Moins d'un mois</option>
                <option value="Entre 1 et 3 mois">Entre 1 et 3 mois</option>
                <option value="Plus de 3 mois">Plus de 3 mois</option>
            </select>
            </div>

            <div class="form-group">
            <label>Par quel moyen avez-vous obtenu votre premier emploi ? </label>
            <select name="canal_emploi">
                <option value="Suite à un stage">Suite à un stage</option>
                <option value="Dépôt de CV en ligne">Dépôt de CV en ligne</option>
                <option value="Site internet d'entreprise">Site internet d'entreprise</option>
                <option value="Réseaux professionnels">Réseaux professionnels</option>
                <option value="Relations personnelles">Relations personnelles</option>
            </select>
            </div>

            <label for="type_employeur">Type d'employeur</label>
            <div class="form-group row">
                <input type="radio" name="type_employeur" value="Privé">
                <label>Privé</label>
                <input type="radio" name="type_employeur" value="Public">
                <label>Public</label>
                @if($errors->has('type_employeur'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type_employeur') }}</strong>
                        </span>
                @endif
            </div>
            <br>

            <div class="form-group row">
                <label>Nom de l'entreprise : <span style="color: red;">*</span></label>
                <input type="text"
                       class="form-control{{ $errors->has('nom_employeur') ? ' is invalid' : ''}}"
                       name="nom_employeur"
                       autocomplete="nom_employeur">
                @if($errors->has('nom_employeur'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom_employeur') }}</strong>
                        </span>
                @endif
            </div>

            <label for="temps_travail">Temps de travail</label>
            <div class="form-group row">
                <input type="radio" name="temps_travail" value="Temps plein">
                <label>Temps plein</label>
                <input type="radio" name="temps_travail" value="Temps partiel">
                <label>Temps partiel</label>
                @if($errors->has('temps_travail'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('temps_travail') }}</strong>
                        </span>
                @endif
            </div>

            <label for="type_contrat">Type de contrat</label>
            <div class="form-group row">
                <input type="radio" name="type_contrat" value="CDI">
                <label>CDI</label>
                <input type="radio" name="type_contrat" value="CDD">
                <label>CDD</label>
                @if($errors->has('type_contrat'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type_contrat') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group row">
                <label>Domaine de l'emploi <span style="color: red;">*</span></label>
                <select name="domaine_emploi">
                    <option value="Développement">Développement</option>
                    <option value="BI / Big data">BI / Big data</option>
                    <option value="Systèmes / réseaux">Systèmes / réseaux</option>
                    <option value="Fonctionnel / MOA">Fonctionnel / MOA</option>
                    <option value="Gestion de projet">Gestion de projet</option>
                </select>
            </div>

            <div class="form-group row">
                <label>Intitulé de l'emploi<span style="color: red;">*</span></label>
                <input type="text"
                       class="form-control{{ $errors->has('intitule_emploi') ? ' is invalid' : ''}}"
                       name="intitule_emploi">
                @if($errors->has('intitule_emploi'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('intitule_emploi') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                <label>Région de l'emploi<span style="color: red;">*</span></label>
                <select name="region_emploi">
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
            </div>

            <div class="form-group">
                <label>Salaire net mensuel par mois après impôts<span style="color: red;">*</span></label>
                <select name="tranche_salaire">
                    <option value="Moins de 1500">Moins de 1500</option>
                    <option value="Entre 1500 et 1999">Entre 1500 et 1999</option>
                    <option value="Entre 2000 et 2499">Entre 2000 et 2499</option>
                    <option value="Plus de 2500">Plus de 2500</option>
                </select>
            </div>

                <div class="form-group row">
                    <label for="salaire_net" class="col-md-4 col-form-label">Précisez votre salaire net mensuel : </label>
                    <input type="number"
                           class="form-control{{ $errors->has('salaire_net') ? ' is invalid' : ''}}"
                           name="salaire_net"
                           min="1000"
                           max="4000"
                           step="1">
                    @if($errors->has('salaire_net'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('salaire_net') }}</strong>
                        </span>
                    @endif
                </div>
            <br>

            <div class="form-group">
                <label>Êtes-vous satisfait de votre emploi actuel ? </label>
                <select name="satisfaction_emploi">
                    <option value="Très satisfait">Très satisfait</option>
                    <option value="Satisfait">Satisfait</option>
                    <option value="Insatisfait">Insatisfait</option>
                    <option value="Très insatisfait">Très insatisfait</option>
                </select>
            </div>

                <div>
                    <button class="btn btn-primary">Valider</button>
                </div>

        </form>

    </div>
@endsection
