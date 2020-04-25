@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- l'action du form doit correspondre a l'uri de la route correspondante dans le fichier web.php -->
        <!-- c'est dans la methode update du TemoignageController que l'on effectue la redirection -->
        <form action="/temoignage/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div>
                <div style="margin-bottom: 2%;">
                    <h4>Mon témoignage</h4>
                </div>
                <div class="form-group">
                    <textarea id="temoignage"
                           class="form-control{{ $errors->has('temoignage') ? ' is invalid' : ''}}"
                           name="temoignage"
                              rows="3"
                              maxlength="2000"
                              title="Maximum 2000 caractères"
                              placeholder="Je saisis ici mon témoignage sur le Master CCI."
                           autocomplete="temoignage" required autofocus></textarea>
                    @if($errors->has('temoignage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('temoignage') }}</strong>
                        </span>
                     @endif
                </div>

                <div align="center" style="margin-top: 3%;">
                    <button class="btn btn-primary">Valider</button>
                </div>

            </div>

        </form>

    </div>
@endsection
