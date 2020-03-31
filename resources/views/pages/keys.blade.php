@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">           
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Change your pesapal consumer key and secret</h3>
                    </div>
                    <div class="card-body">
                        <form id="contactForm" action="{{route('consumer')}}" method="POST">
                            <div class="form-group">
                                <label for="secret">Consumer key</label>
                                <input type="text" name="key" class="form-control @error('key') is-invalid @enderror" placeholder="Pesapal consumer key">
                                @error('key')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="secret">Consumer secret</label>
                                <input type="text" name="secret" class="form-control @error('secret') is-invalid @enderror" placeholder="Pesapal consumer secret">
                                @error('secret')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" class="btn btn-outline-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
