@extends('base')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Edit Beneficiary</div>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/offer') }}">Offers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/beneficiary') }}">Beneficiaries</a>
                  </li>
                  <li class="nav-item">
<<<<<<< develop
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                 
=======
                    <a class="nav-link" href="#">Home</a>
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
        <h1 class="display-3">Update a beneficiary</h1>

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
        <form method="post" action="{{ route('beneficiary.update', $beneficiary->id) }}">
            @method('PATCH') 
            @csrf
    <div class="form-group"><label for="name">Name</label><input class="form-control" type="text" name="name" value="{{ $beneficiary->name }}"></div>
    <div class="form-group"><label for="surname">Surname</label><input class="form-control" type="text" name="surname" value="{{ $beneficiary->surname }}"></div>
    <div class="form-group"><label for="dni">Dni</label><input class="form-control" type="char" name="dni" value="{{ $beneficiary->dni }}"></div>
    <div class="form-group"><label for="birthday">Birthday</label><input class="form-control" type="date" name="birthday" value="{{ $beneficiary->getDateForInput() }}"></div>
    <div class="form-group"><label for="adress">Adress</label><input class="form-control" type="text" name="adress" value="{{ $beneficiary->adress }}"></div>
    <div class="form-group"><label for="phone">Phone</label><input class="form-control" type="integer" name="phone" value="{{ $beneficiary->phone }}"></div>
    <div class="form-group"><label for="email">email</label><input class="form-control" type="text" name="email" value="{{ $beneficiary->email }}"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection