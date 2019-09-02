@extends('base')

@section('main')
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>

    <div>
        <a style="margin: 19px;" href="{{ route('donnee_bouees.create')}}" class="btn btn-primary">Ajouter une donnée de bouée</a>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Données de bouées</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>id_bouee</td>
                    <td>temperature</td>
                    <td>salinite</td>
                    <td>debit</td>
                    <td>valide</td>
                    <td>date_temps</td>
                    <td>latitude</td>
                    <td>longitude</td>
                    <td>batterie</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($donnee_bouees as $donnee_bouee)
                    <tr>
                        <td>{{$donnee_bouee->id}}</td>
                        <td>{{$donnee_bouee->id_bouee}}</td>
                        <td>{{$donnee_bouee->temperature}}</td>
                        <td>{{$donnee_bouee->salinite}}</td>
                        <td>{{$donnee_bouee->debit}}</td>
                        <td>{{$donnee_bouee->valide}}</td>
                        <td>{{$donnee_bouee->date_temps}}</td>
                        <td>{{$donnee_bouee->latitude}}</td>
                        <td>{{$donnee_bouee->longitude}}</td>
                        <td>{{$donnee_bouee->batterie}}</td>
                        <td>
                            <a href="{{ route('donnee_bouees.edit',$donnee_bouee->id)}}" class="btn btn-primary">Éditer</a>
                        </td>
                        <td>
                            <form action="{{ route('donnee_bouees.destroy', $donnee_bouee->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>

            <div>
                <a style="margin: 19px;" href="/" class="btn btn-primary">Retour à l'accueil</a>
            </div>
@endsection
