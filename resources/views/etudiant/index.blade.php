
@extends('base')
@section('content')
    <div class="container">

        <form action="" method="">

            {{ csrf_field() }}
            <table class="table content-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Commune</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant )

                    <tr>
                        <th scope="row">{{ $etudiant ->id }}</th>
                        <td>{{ $etudiant ->nom }}</td>
                        <td>{{ $etudiant ->prenom }}</td>
                        <td>{{ $etudiant ->commune }}</td>
                        <td>{{ $etudiant ->telephone }}</td>
                        <td>{{ $etudiant ->email }}</td>
                        <th scope="col">
                            <a href="{{ url("/show". $etudiant->id) }}"class="">
                                <button class="btn btn-primary btn-sm rounded-pill">
                                    Voir
                                </button>
                            </a>
                            <a href="{{ url("/edit". $etudiant->id) }}">
                                <button class="btn btn-warning rounded-pill">
                                    Editer
                                </button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger rounded-pill ">
                                    Supprimer
                                </button>
                            </a>
                        </th>
                    </tr>

                    @endforeach
                </tbody>
            </table><br><br><br>
            <div class="position-relative">
                <div class="position-absolute top-50 start-50 translate-middle">
                <button type="button" class="btn btn-success rounded-pill">
                    <a href="{{ url('/creer') }}" class="btn btn-success btn-sm">
                        ADD_USER
                    </a>

                </button>
                </div>
            </div>
        </form>

    </div>
@endsection


