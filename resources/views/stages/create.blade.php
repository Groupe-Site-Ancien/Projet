@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- l'action du form doit correspondre a l'uri de la route correspondante dans le fichier web.php -->
        <!-- c'est dans la methode update du StagesController que l'on effectue la redirection -->

        <form action="/stages/create" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')

            <div>
                <label class="row" style="font-size: 14pt; font-weight: bold;">Proposer une offre de stage</label>
                <br>
                <h6 class="row">Champs obligatoires <span style="color: red;">*</span></h6>
                <br>

                <div class="form-group row">
                    <label>Intitulé du stage<span style="color: red;">*</span></label>
                    <input type="text"
                           class="form-control{{ $errors->has('intitule_stage') ? ' is invalid' : ''}}"
                           name="intitule_stage"
                           autocomplete="intitule_stage" autofocus>
                    @if($errors->has('intitule_stage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('intitule_stage') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Domaine du stage <span style="color: red;">*</span></label>
                    <select name="domaine_stage">
                        <option value="Développement">Développement</option>
                        <option value="BI / Big data">BI / Big data</option>
                        <option value="Systèmes / réseaux">Systèmes / réseaux</option>
                        <option value="Fonctionnel / MOA">Fonctionnel / MOA</option>
                        <option value="Gestion de projet">Gestion de projet</option>
                    </select>
                </div>
                <br>

                <div class="form-group row">
                    <label>Entreprise d'accueil <span style="color: red;">*</span></label>
                    <input type="text"
                           class="form-control{{ $errors->has('entreprise_stage') ? ' is invalid' : ''}}"
                           name="entreprise_stage"
                           autocomplete="entreprise_stage" autofocus>
                    @if($errors->has('entreprise_stage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('entreprise_stage') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Région du stage <span style="color: red;">*</span></label>
                    <select name="region_stage">
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
                <br>

                <div class="form-group row">
                    <label>Précisez la ville <span style="color: red;">*</span></label>
                    <input type="text"
                           class="form-control{{ $errors->has('ville_stage') ? ' is invalid' : ''}}"
                           name="ville_stage"
                           autocomplete="ville_stage" autofocus>
                    @if($errors->has('ville_stage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ville_stage') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Missions du stage <span style="color: red;">*</span></label>
                    <textarea class="form-control{{ $errors->has('missions_stage') ? ' is invalid' : ''}}"
                              name="missions_stage"
                              rows="8"
                              maxlength="2000"
                              title="Maximum 2000 caractères"
                              placeholder="Je saisis ici les missions principales du stage proposé."
                              autocomplete="missions_stage"></textarea>
                    @if($errors->has('missions_stage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('missions_stage') }}</strong>
                        </span>
                     @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Profil recherché <span style="color: red;">*</span></label>
                    <textarea class="form-control{{ $errors->has('profil_stage') ? ' is invalid' : ''}}"
                              name="profil_stage"
                              rows="8"
                              maxlength="2000"
                              title="Maximum 2000 caractères"
                              placeholder="Je saisis ici le profil recherché pour le stage."
                              autocomplete="profil_stage"></textarea>
                    @if($errors->has('profil_stage'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('profil_stage') }}</strong>
                            </span>
                    @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Gratification de stage (en euros brut par mois)</label>
                    <input type="text"
                           class="form-control{{ $errors->has('rem_stage') ? ' is invalid' : ''}}"
                           name="rem_stage"
                           autocomplete="rem_stage">
                    @if($errors->has('rem_stage'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('rem_stage') }}</strong>
                            </span>
                    @endif
                </div>
                <br>

                <div class="form-group row">
                    <label>Lien vers l'offre de stage</label>
                    <input type="text"
                           class="form-control{{ $errors->has('url_stage') ? ' is invalid' : ''}}"
                           name="url_stage"
                           autocomplete="url_stage">
                    @if($errors->has('url_stage'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url_stage') }}</strong>
                            </span>
                    @endif
                </div>
                <br>

                <div>
                    <button class="btn btn-primary">Valider</button>
                </div>

            </form>

    </div>
@endsection
