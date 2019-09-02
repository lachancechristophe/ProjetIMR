@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Ajouter une donnée de bouée</h1>
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
                <form method="post" action="{{ route('donnee_bouees.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="id_bouee">id_bouee</label>
                        <input type="text" class="form-control" value="1" name="id_bouee"/>
                    </div>
                    <div class="form-group">
                        <label for="temperature">temperature</label>
                        <input type="text" class="form-control" value="12.3" name="temperature"/>
                    </div>
                    <div class="form-group">
                        <label for="salinite">salinite</label>
                        <input type="text" class="form-control" value="45.6" name="salinite"/>
                    </div>
                    <div class="form-group">
                        <label for="debit">debit</label>
                        <input type="text" class="form-control" value="78.9" name="debit"/>
                    </div>
                    <div class="form-group">
                        <label for="valide">valide</label>
                        <input type="text" class="form-control" value="true" name="valide"/>
                    </div>
                    <div class="form-group">
                        <label for="date_temps">date_temps</label>
                        <input type="text" class="form-control" value="2019-09-02 08:21:00" name="date_temps"/>
                    </div>
                    <div class="form-group">
                        <label for="latitude">latitude</label>
                        <input type="text" class="form-control" value="48.526139" name="latitude"/>
                    </div>
                    <div class="form-group">
                        <label for="longitude">longitude</label>
                        <input type="text" class="form-control" value="-68.674056" name="longitude"/>
                    </div>
                    <div class="form-group">
                        <label for="batterie">batterie</label>
                        <input type="text" class="form-control" value="100" name="batterie"/>
                    </div>
                    <button type="submit" class="btn btn-primary-outline">Ajouter l'entrée</button>
                </form>
            </div>
        </div>
    </div>
@endsection
