@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Mettre à jour une donnée de bouée</h1>

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
            <form method="post" action="{{ route('donnee_bouees.update', $donnee_bouee->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="id_bouee">id_bouee:</label>
                    <input type="text" class="form-control" name="id_bouee" value={{ $donnee_bouee->id_bouee }} />
                </div>
                <div class="form-group">
                    <label for="temperature">temperature:</label>
                    <input type="text" class="form-control" name="temperature" value={{ $donnee_bouee->temperature }} />
                </div>
                <div class="form-group">
                    <label for="salinite">salinite:</label>
                    <input type="text" class="form-control" name="salinite" value={{ $donnee_bouee->salinite }} />
                </div>
                <div class="form-group">
                    <label for="debit">debit:</label>
                    <input type="text" class="form-control" name="debit" value={{ $donnee_bouee->debit }} />
                </div>
                <div class="form-group">
                    <label for="valide">valide:</label>
                    <input type="text" class="form-control" name="valide" value={{ $donnee_bouee->valide }} />
                </div>
                <div class="form-group">
                    <label for="date_temps">date_temps:</label>
                    <input type="text" class="form-control" name="date_temps" value={{ $donnee_bouee->date_temps }} />
                </div>
                <div class="form-group">
                    <label for="latitude">latitude:</label>
                    <input type="text" class="form-control" name="latitude" value={{ $donnee_bouee->latitude }} />
                </div>
                <div class="form-group">
                    <label for="longitude">longitude:</label>
                    <input type="text" class="form-control" name="longitude" value={{ $donnee_bouee->longitude }} />
                </div>
                <div class="form-group">
                    <label for="batterie">batterie:</label>
                    <input type="text" class="form-control" name="batterie" value={{ $donnee_bouee->batterie }} />
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
