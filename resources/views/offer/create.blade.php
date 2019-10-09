<<<<<<< develop
@extends('base')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Create New Offer</div>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/offer') }}">Offers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/beneficiary') }}">Beneficiaries</a>
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
=======



@extends('base')
>>>>>>> Update Pruebas

@section('main')

<div class="row">
        <div class="col-sm-12 offset-sm-2">
                <h1 class="display-3">Afegeix la teva donació</h1>
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



    <h1>Esto es el formulario de offers</h1>
    <form method="post" action="{{route('offer.store')}}">
    @csrf
    <div class="form-group"><label for="title">Title</label><input class="form-control" type="text" name="title"></div>
    <div class="form-group"><label for="description">description</label><input class="form-control" type="text" name="description"></div>
    <div class="form-group"><label for="location">location</label><input class="form-control" type="text" name="location"></div>
    <div class="form-group"><label for="agreementType">agreementType</label><input class="form-control" type="text" name="agreementType"></div>
    <div class="form-group"><label for="quantity">quantity</label><input class="form-control" type="number" name="quantity"></div>
    <div class="form-group"><label for="limitDate">limitDate</label><input class="form-control" type="date" name="limitDate"></div>
    <div class="form-group"><label for="beneficiary">beneficiary</label><input class="form-control" type="text" name="beneficiary"></div>
    <div class="form-group"><label for="companyOffer">companyOffer</label><input class="form-control" type="text" name="companyOffer"></div>
<<<<<<< develop
    <button type="submit" class="btn btn-outline-primary">Add offer</button>
=======
    <button type="submit" class="btn btn-primary-outline">Add offer</button>
>>>>>>> Update Pruebas
    </form>
@endsection