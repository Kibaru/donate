@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">           
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">I will appreciate your donation.</h3>
                    </div>
                    <div class="card-body">
                    <form id="contactForm" action="{{route('donate')}}" method="POST">
                            <span class="text-danger">*</span>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="text-danger">*</span>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="text-danger">*</span>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="text-danger">*</span>
                            <input type="text" name="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="Amount">
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="text-danger">*</span>
                            <select name="period" class="form-control @error('period') is-invalid @enderror">
                                <option value="">Select time to make your donation</option>
                                <option value="One-off">One-off</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option> 
                            </select>
                            @error('period')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <p class="mt-3"> <span class="text-info">Note:</span>  The <span class="text-danger">*</span> field are required. </p>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="submit" value="Submit" class="btn btn-outline-primary float-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
