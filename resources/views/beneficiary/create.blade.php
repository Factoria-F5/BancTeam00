@extends('base')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Create New Beneficiary</div>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/offer') }}">Offers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/beneficiary') }}">Beneficiaries</a>
                  </li>
                  <li class="nav-item">
<<<<<<< develop
<<<<<<< develop
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                 
=======
                    <a class="nav-link" href="#">Home</a>
=======
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
>>>>>>> Update
                  </li>
<<<<<<< develop
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
>>>>>>> Update Front Blade
=======
                 
>>>>>>> Last Update Front
                </ul>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('main')

<div class="row">
        <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Add a Beneficiary</h1>
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



    <h1>Aquest és el formulari per registrarse com a beneficiari</h1>
    <form method="post" action="{{route('beneficiary.store')}}">
    @csrf
<<<<<<< develop
    <div class="form-group"><label for="name">Nom</label><input class="form-control" type="text" name="name"></div>
    <div class="form-group"><label for="surname">Cognoms</label><input class="form-control" type="text" name="surname"></div>
    <div class="form-group"><label for="dni">DNI</label><input class="form-control" type="char" name="dni"></div>
    <div class="form-group"><label for="birthday">Any de naixement</label><input class="form-control" type="date" name="birthday"></div>
    <div class="form-group"><label for="adress">Adreça</label><input class="form-control" type="text" name="adress"></div>
    <div class="form-group"><label for="phone">Telèfon</label><input class="form-control" type="integer" name="phone"></div>
    <div class="form-group"><label for="email">eCorreu electrònic</label><input class="form-control" type="text" name="email"></div>
    <button type="submit" class="btn btn-primary-outline">Registrar-se</button>
=======
    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" name="name"></div>
    <div class="form-group"><label for="surname">Surname</label><input class="form-control" type="text" name="surname"></div>
    <div class="form-group"><label for="dni">Dni</label><input class="form-control" type="char" name="dni"></div>
    <div class="form-group"><label for="birthday">birthday</label><input class="form-control" type="date" name="birthday"></div>
    <div class="form-group"><label for="adress">adress</label><input class="form-control" type="text" name="adress"></div>
    <div class="form-group"><label for="phone">phone</label><input class="form-control" type="integer" name="phone"></div>
    <div class="form-group"><label for="email">email</label><input class="form-control" type="text" name="email"></div>
    <button type="submit" class="btn btn-outline-primary">Add beneficiary</button>
<<<<<<< develop
>>>>>>> Update Front Blade
=======
>>>>>>> Update Front Blade
    </form>
@endsection