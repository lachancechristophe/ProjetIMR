@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Mettre à jour une bouée</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('bouees.update', $bouee->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="numero">numero:</label>
                    <input type="text" class="form-control" name="numero" value={{ $bouee->numero }} />
                </div>
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" class="form-control" name="description" value={{ $bouee->description }} />
                </div>
                <div class="form-group">
                    <label for="date_debut">date_debut:</label>
                    <input type="text" class="form-control" name="date_debut" value={{ $bouee->date_debut }} />
                </div>
                <div class="form-group">
                    <label for="latitude">latitude:</label>
                    <input type="text" class="form-control" name="latitude" value={{ $bouee->latitude }} />
                </div>
                <div class="form-group">
                    <label for="longitude">longitude:</label>
                    <input type="text" class="form-control" name="longitude" value={{ $bouee->longitude }} />
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
