@extends('layouts.app')

@section('content')

  <div class="container text-center">
    <h1 class="h1 mt-4">Donacions</h1>
    <h2 class="h2 mt-4">Omple el formulari per a donar material</h2>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form method="POST" action="{{route('offer.store')}}">
            @csrf
            @method('POST')

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="title">Títol</label>
                  <input id="title" class="@error('title') is-invalid @enderror form-control" type="text">
                    @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="description">Descripció</label>
                  <input id="description" class="@error('description') is-invalid @enderror form-control" type="text">
                    @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="location">Ubicació</label>
                  <input id="location" class="@error('location') is-invalid @enderror form-control" type="text">
                    @error('location')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                  <label for="agreementType">Tipus de material</label>
                  <input id="agreementType" class="@error('agreementType') is-invalid @enderror form-control" type="text">
                    @error('agreementType')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            <div class="row">
              <div class="col-6">
                <div class="form-group">
                    <label for="quantity">Quantitat</label>
                    <input id="quantity" class="@error('quantity') is-invalid @enderror form-control" type="number">
                      @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                      <label for="limitDate">Data límit</label>
                      <input id="limitDate" class="@error('limitDate') is-invalid @enderror form-control" type="date">
                        @error('limitDate')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="form-group">
                    <label for="beneficiary">Beneficiari</label>
                    <input id="beneficiary" class="@error('beneficiary') is-invalid @enderror form-control" type="text">
                      @error('beneficiary')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="companyOffer">Entitat donant</label>
                    <input id="beneficiary" class="@error('companyOffer') is-invalid @enderror form-control" type="text">
                      @error('companyOffer')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div class="form-group">
                    <label for="file">Puja aquí les teves imatges</label>
                    <input class="form-control-file" type="file" >
                    <small id="fileHelp" class="form-text text-muted">Nomès s'accepten formats .jpg i .png.</small>
                  </div>
                
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>

          </div>
        </form>   
      </div>
    </div>
  </div>
@endsection
