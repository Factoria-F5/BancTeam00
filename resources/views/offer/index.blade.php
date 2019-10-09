@extends('base')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Offer List</div>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/offer') }}">Ofertes</a>
                  </li>
                  <li class="nav-item">
<<<<<<< develop
                    <a class="nav-link" href="{{ url('/beneficiary') }}">Beneficiaris</a>
=======
                    <a class="nav-link" href="{{ url('/beneficiary') }}">Beneficiaries</a>
                  </li>
                  <li class="nav-item">
<<<<<<< develop
<<<<<<< develop
                    <a class="nav-link" href="#">Home</a>
>>>>>>> Update Front Blade
=======
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
>>>>>>> Update
=======
                    <a class="nav-link" href="#">Home</a>
>>>>>>> Update Front Blade
                  </li>
                  
                </ul>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    
                    Estàs ingresat!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Offers</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('offer.create')}}" class="btn btn-outline-primary">New offer</a>
        </div>     
      <table class="table table-striped">
        <thead>
            <tr>
                <td>title</td>
                <td>description</td>
                <td>location</td>
                <td>agreementType</td>
                <td>quantity</td>
                <td>limitData</td>
                <td>beneficiary</td>
                <td>companyOffer</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <div class="col-sm-12">
    
                @if(session()->get('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}  
                  </div>
                @endif
              </div>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{$offer->title}}</td>
                <td>{{$offer->description}}</td>
                <td>{{$offer->location}}</td>
                <td>{{$offer->agreementType}}</td>
                <td>{{$offer->quantity}}</td>
                <td>{{$offer->limitDate->format('d/m/Y')}}</td>
                <td>{{$offer->beneficiary}}</td>
                <td>{{$offer->companyOffer}}</td>
                <td>
                    <a href="{{ route('offer.edit',$offer->id)}}" class="btn btn-outline-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('offer.destroy', $offer->id)}}" method="post">
                      @csrf
                      @method('DELETE')
<<<<<<< develop
<<<<<<< develop
=======
>>>>>>> Last Update Front

                      <!-- Button trigger modal 
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal" >
  Delete
</button> -->

<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Warning !!!</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
<h4>Be careful about deleting a record</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
-->



<<<<<<< develop
=======
>>>>>>> Update Front Blade
=======
>>>>>>> Last Update Front
                      <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection