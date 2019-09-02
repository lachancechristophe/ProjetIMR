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
        <a style="margin: 19px;" href="{{ route('bouees.create')}}" class="btn btn-primary">Ajouter une bouée</a>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Bouées</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>numero</td>
                    <td>description</td>
                    <td>date_debut</td>
                    <td>latitude</td>
                    <td>longitude</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($bouees as $bouee)
                    <tr>
                        <td>{{$bouee->id}}</td>
                        <td>{{$bouee->numero}}</td>
                        <td>{{$bouee->description}}</td>
                        <td>{{$bouee->date_debut}}</td>
                        <td>{{$bouee->latitude}}</td>
                        <td>{{$bouee->longitude}}</td>
                        <td>
                            <a href="{{ route('bouees.edit',$bouee->id)}}" class="btn btn-primary">Éditer</a>
                        </td>
                        <td>
                            <form action="{{ route('bouees.destroy', $bouee->id)}}" method="post">
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
