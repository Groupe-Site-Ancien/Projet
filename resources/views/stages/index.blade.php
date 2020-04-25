@extends('layouts.app')

@section('content')

    <div class="col-md-10 offset-1">
        <br>
        <h4 align="center">Liste des stages proposés</h4>
        <br>

        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Intitulé du stage</th>
                    <th>Domaine métier</th>
                    <th>Entreprise</th>
                    <th>Région</th>
                    <th>Ville</th>
                    <th align="center" style="text-align: center;"></th>
                </tr>
                @foreach($stages as $row)
                    <tr>
                        <td>{{$row['intitule_stage']}}</td>
                        <td>{{$row['domaine_stage']}}</td>
                        <td>{{$row['entreprise_stage']}}</td>
                        <td>{{$row['region_stage']}}</td>
                        <td>{{$row['ville_stage']}}</td>
                        <td align="center"><a href="/stages/show/{{$row['id']}}"><button class="btn btn-primary">Consulter</button></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
