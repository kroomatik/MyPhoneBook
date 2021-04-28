@extends('layouts.app')


@section('content')
@csrf 
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route ('show') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $entreprise->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Street:</strong>
                {{ $entreprise->street }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zipcode:</strong>
                {{ $entreprise->zipcode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Town:</strong>
                {{ $entreprise->town }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone number:</strong>
                    {{ $entreprise->phone }}
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $entreprise->email }}
                    </div>
        </div>
    </div>
@endsection