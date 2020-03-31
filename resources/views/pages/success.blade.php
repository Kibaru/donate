@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Donors</h3>
                    <div class="pull-right">
                        <span class="clickable filter" data-toggle="tooltip" title="" data-container="body" data-original-title="Toggle table filter">
                            <i class="glyphicon glyphicon-filter"></i>
                        </span>
                    </div>
                </div>
                <div class="panel-body" style="display: block">
                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Donors"/>
                </div>
                    
                @if(count($donations) > 0)
                <table class="table table-hover" id="dev-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        @foreach($donations as $donation)
                        <tr> 
                            <td >{{$donation->id}}</td>
                            <td>{{$donation->name}}</td>
                            <td>{{$donation->email}}</td>
                            <td>{{$donation->phone}}</td>
                            <td>{{$donation->amount}}</td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>No donations made yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection