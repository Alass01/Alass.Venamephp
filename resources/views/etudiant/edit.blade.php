@extends('base')
@section('content')
<div class="container">

    <h1 class="center">MODIFIER UN UTILISATEUR</h1>

    <form method="POST" action="/edit">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">{{ $etudiant ->nom }}</label>
          <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">{{ $etudiant ->prenom }}</label>
          <input name="prenom" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">{{ $etudiant ->commune }}</label>
            <input name="commune" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">{{ $etudiant ->telephone }}</label>
            <input name="telephone" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">{{ $etudiant ->email }}</label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
