@extends('layouts.index')

@section('content')
    <div class="container mt-5">
        <h1>creatipon d'equipe</h1>
        <form action="{{ route('equipes.store') }}" method='POST'>
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">nom</label>
                <input type="string" class="form-control" id="nom" name="nom" aria-describedby="nom"
                    placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">ville</label>
                <input type="string" class="form-control" id="ville" name="ville" placeholder="ville">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">pays</label>
                <input type="string" class="form-control" id="pays" name="pays" placeholder="pays">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">joueurs</label>
                <input type="string" class="form-control" id="joueurs" name="joueurs" placeholder="joueur">
            </div>
            <div class="form-group">
                <label for="continent">Example select</label>
                <select class="form-control" id="continent" name="continent_id">
                    @foreach ($continents ?? '' as $continent)
                        <option value="{{ $continent->id }}">{{ $continent->continent }}</option>

                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">ville</th>
                    <th scope="col">pays</th>
                    <th scope="col">joueurs</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($equipes as $equipe)
                <tr>
                    <th scope="row">{{ $equipe->id }}</th>
                    <td>{{ $equipe->nom }}</td>
                    <td>{{ $equipe->ville }}</td>
                    <td>{{ $equipe->pays }}</td>
                    <td>{{ $equipe->joueurs }}</td>
                    <td>{{ $equipe->continent->continent }}</td>
                </tr>
                @empty
                vide
                @endforelse
            </tbody>
        </table>
    </div>
    @endsection
