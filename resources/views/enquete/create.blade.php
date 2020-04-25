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

        <form action="/enquete" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')

            <div style="margin-bottom: 2%;">
                <h4>Répondre à l'enquête</h4>
            </div>
            <h6 style="margin-bottom: 2%;">Champs obligatoires <span style="color: red;">*</span></h6>

            <!-- Situation actuelle -->
            <div class="form-group">
            <label>Situation actuelle <span style="color: red;">*</span></label>
                <br>
            <select name="situation" required>
                <option value="En emploi">En emploi</option>
                <option value="En études">En études</option>
                <option value="En recherche d'emploi">En recherche d'emploi</option>
            </select>
            </div>

            <!-- Delai pour trouver un emploi -->
            <div class="form-group">
            <label>Combien de temps avez-vous mis pour trouver votre premier emploi après l'obtention du Master CCI ?
                <span style="color: red;">*</span></label>
                <br>
            <select name="delai_emploi" required>
                <option value="Immédiatement">Immédiatement</option>
                <option value="Moins d'un mois">Moins d'un mois</option>
                <option value="Entre 1 et 3 mois">Entre 1 et 3 mois</option>
                <option value="Plus de 3 mois">Plus de 3 mois</option>
            </select>
            </div>

            <!-- Canal emploi -->
            <div class="form-group">
            <label>Par quel moyen avez-vous obtenu votre premier emploi ? <span style="color: red;">*</span></label>
                <br>
            <select name="canal_emploi" required>
                <option value="Suite à un stage">Suite à un stage</option>
                <option value="Dépôt de CV en ligne">Dépôt de CV en ligne</option>
                <option value="Site internet d'entreprise">Site internet d'entreprise</option>
                <option value="Réseaux professionnels">Réseaux professionnels</option>
                <option value="Relations personnelles">Relations personnelles</option>
            </select>
            </div>

            <!-- Type employeur -->
            <label for="type_employeur">Type d'employeur <span style="color: red;">*</span></label>
            <div class="form-group row">
                <input class="rad" type="radio" name="type_employeur" value="Privé" required>
                <label>Privé</label>
                <input class="rad" type="radio" name="type_employeur" value="Public">
                <label>Public</label>
                @if($errors->has('type_employeur'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type_employeur') }}</strong>
                        </span>
                @endif
            </div>

            <!-- Nom employeur -->
            <div class="form-group">
                <label>Nom de l'entreprise <span style="color: red;">*</span></label>
                <input type="text"
                       class="form-control{{ $errors->has('nom_employeur') ? ' is invalid' : ''}}"
                       name="nom_employeur"
                       autocomplete="nom_employeur" required>
                @if($errors->has('nom_employeur'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom_employeur') }}</strong>
                        </span>
                @endif
            </div>

            <!-- Temps de travail -->
            <label for="temps_travail">Temps de travail <span style="color: red;">*</span></label>
            <div class="form-group">
                <input class="rad" type="radio" name="temps_travail" value="Temps plein" required>
                <label>Temps plein</label>
                <input class="rad" type="radio" name="temps_travail" value="Temps partiel">
                <label>Temps partiel</label>
                @if($errors->has('temps_travail'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('temps_travail') }}</strong>
                        </span>
                @endif
            </div>

            <!-- Type de contrat -->
            <label for="type_contrat">Type de contrat <span style="color: red;">*</span></label>
            <div class="form-group">
                <input class="rad" type="radio" name="type_contrat" value="CDI" required>
                <label>CDI</label>
                <input class="rad" type="radio" name="type_contrat" value="CDD">
                <label>CDD</label>
                @if($errors->has('type_contrat'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('type_contrat') }}</strong>
                        </span>
                @endif
            </div>

            <!-- Domaine emploi -->
            <div class="form-group">
                <label>Domaine de l'emploi <span style="color: red;">*</span></label>
                <br>
                <select name="domaine_emploi" required>
                    <option value="Développement">Développement</option>
                    <option value="BI / Big data">BI / Big data</option>
                    <option value="Systèmes / réseaux">Systèmes / réseaux</option>
                    <option value="Fonctionnel / MOA">Fonctionnel / MOA</option>
                    <option value="Gestion de projet">Gestion de projet</option>
                </select>
            </div>

            <!-- Intitule emploi -->
            <div class="form-group">
                <label>Intitulé de l'emploi <span style="color: red;">*</span></label>
                <input type="text"
                       class="form-control{{ $errors->has('intitule_emploi') ? ' is invalid' : ''}}"
                       name="intitule_emploi" required>
                @if($errors->has('intitule_emploi'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('intitule_emploi') }}</strong>
                        </span>
                @endif
            </div>

            <!-- Region emploi -->
            <div class="form-group">
                <label>Région de l'emploi <span style="color: red;">*</span></label>
                <br>
                <select name="region_emploi" required>
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

            <!-- Salaire net mensuel -->
            <div class="form-group">
                <label>Salaire net mensuel après impôts <span style="color: red;">*</span></label>
                <br>
                <select name="tranche_salaire" required>
                    <option value="Moins de 1500">Moins de 1500</option>
                    <option value="Entre 1500 et 1999">Entre 1500 et 1999</option>
                    <option value="Entre 2000 et 2499">Entre 2000 et 2499</option>
                    <option value="Plus de 2500">Plus de 2500</option>
                </select>
            </div>

            <!-- Salaire net mensuel -->
            <div class="form-group">
                <label>Précisez votre salaire net mensuel</label>
                <input type="number"
                       class="form-control{{ $errors->has('salaire_net') ? ' is invalid' : ''}}"
                       name="salaire_net"
                       min="1000"
                       max="10000"
                       step="100">
                @if($errors->has('salaire_net'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('salaire_net') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Satisfaction emploi -->
            <div class="form-group">
                <label>Êtes-vous satisfait de votre emploi actuel ? <span style="color: red;">*</span></label>
                <br>
                <select name="satisfaction_emploi" required>
                    <option value="Très satisfait">Très satisfait</option>
                    <option value="Satisfait">Satisfait</option>
                    <option value="Insatisfait">Insatisfait</option>
                    <option value="Très insatisfait">Très insatisfait</option>
                </select>
            </div>

                <div style="margin-top: 2%;">
                    <button class="btn btn-success">Valider</button>
                </div>

        </form>

    </div>
@endsection
