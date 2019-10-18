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
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                 
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



    <h1>Esto es el formulario de beneficiaries</h1>
    <form method="post" action="{{route('beneficiary.store')}}">
    @csrf
    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" name="name"></div>
    <div class="form-group"><label for="surname">Surname</label><input class="form-control" type="text" name="surname"></div>
    <div class="form-group"><label for="dni">Dni</label><input class="form-control" type="char" name="dni"></div>
    <div class="form-group"><label for="birthday">birthday</label><input class="form-control" type="date" name="birthday"></div>
    <div class="form-group"><label for="adress">adress</label><input class="form-control" type="text" name="adress"></div>
    <div class="form-group"><label for="phone">phone</label><input class="form-control" type="integer" name="phone"></div>
    <div class="form-group"><label for="email">email</label><input class="form-control" type="text" name="email"></div>
    <button type="submit" class="btn btn-outline-primary">Add beneficiary</button>
    </form>
@endsection