@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a offer</h1>

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
    
        <form method="post" action="{{ route('offer.update', $offer->id) }}">
            @method('PATCH') 
            @csrf
    <div class="form-group"><label for="title">Title</label><input class="form-control" type="text" name="title" value="{{ $offer->title }}"></div>
    <div class="form-group"><label for="description">description</label><input class="form-control" type="text" name="description" value="{{ $offer->description }}"></div>
    <div class="form-group"><label for="location">location</label><input class="form-control" type="text" name="location" value="{{ $offer->location }}"></div>
    <div class="form-group"><label for="agreementType">agreementType</label><input class="form-control" type="text" name="agreementType" value="{{ $offer->agreementType }}"></div>
    <div class="form-group"><label for="quantity">quantity</label><input class="form-control" type="number" name="quantity" value="{{ $offer->quantity }}"></div>
    <div class="form-group"><label for="limitDate">limitDate</label><input class="form-control" type="date" name="limitDate" value="{{ $offer->getDateForInput() }}"></div>
    <div class="form-group"><label for="beneficiary">beneficiary</label><input class="form-control" type="text" name="beneficiary" value="{{ $offer->beneficiary }}"></div>
    <div class="form-group"><label for="companyOffer">companyOffer</label><input class="form-control" type="text" name="companyOffer" value="{{ $offer->companyOffer }}"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection