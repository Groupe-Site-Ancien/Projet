@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                        <div>
                            Bonjour {{ $user->id}} !
                            <br>
                            Nom : {{$user->profile->nom ?? 'Nom'}}
                            <br>
                            Prénom : {{$user->profile->prenom ?? 'Prénom' }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
