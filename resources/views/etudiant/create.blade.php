@extends('base')
@section('content')
<div class="container">

    <h1 class="">CREER UN UTILISATEUR</h1>

    <form method="POST" action="/store">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nom</label>
          <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prenom</label>
          <input name="prenom" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Commune</label>
            <input name="commune" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Telephone</label>
            <input name="telephone" type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">E-mail</label>
            <input name="email" type="email" class="form-control" id="exampleInputPassword1" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
