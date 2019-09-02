@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Ajouter une bouée</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('bouees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="numero">numero</label>
                        <input type="text" class="form-control" value="1" name="numero"/>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" value="exemple, bouée 1" name="description"/>
                    </div>
                    <div class="form-group">
                        <label for="date_debut">date_debut</label>
                        <input type="text" class="form-control" value="2019-09-02 08:21:00" name="date_debut"/>
                    </div>
                    <div class="form-group">
                        <label for="latitude">latitude</label>
                        <input type="text" class="form-control" value="48.526139" name="latitude"/>
                    </div>
                    <div class="form-group">
                        <label for="longitude">longitude</label>
                        <input type="text" class="form-control" value="-68.674056" name="longitude"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Ajouter l'entrée</button>
                </form>
            </div>
        </div>
    </div>
@endsection
