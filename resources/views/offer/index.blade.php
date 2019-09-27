@extends('base')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/offer') }}">Offers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/beneficiary') }}">Beneficiaries</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
    <div class="col-sm-12">
        <h1 class="display-3">Offers</h1>
        <div>
            <a style="margin: 19px;" href="{{ route('offer.create')}}" class="btn btn-primary">New offer</a>
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
                    <a href="{{ route('offer.edit',$offer->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('offer.destroy', $offer->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection