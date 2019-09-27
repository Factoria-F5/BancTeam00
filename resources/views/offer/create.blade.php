@extends('base')

@section('main')

<div class="row">
        <div class="col-sm-8 offset-sm-2">
                <h1 class="display-3">Add a offer</h1>
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
    <button type="submit" class="btn btn-primary-outline">Add offer</button>
    </form>
@endsection