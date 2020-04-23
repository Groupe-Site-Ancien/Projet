@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- l'action du form doit correspondre a l'uri de la route correspondante dans le fichier web.php -->
        <!-- c'est dans la methode update du TemoignageController que l'on effectue la redirection -->
        <form action="/temoignage/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div>
                <div class="form-group row">
                    <label for="temoignage" class="col-md-4 col-form-label" style="font-size: 14pt;">Mon témoignage</label>
                    <br><br>
                    <textarea id="temoignage"
                           class="form-control{{ $errors->has('temoignage') ? ' is invalid' : ''}}"
                           name="temoignage"
                              rows="3"
                              maxlength="2000"
                              title="Maximum 2000 caractères"
                              placeholder="Je saisis ici mon témoignage sur le Master CCI."
                           autocomplete="temoignage" autofocus></textarea>
                    @if($errors->has('temoignage'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('temoignage') }}</strong>
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
