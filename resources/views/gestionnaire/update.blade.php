@extends('layouts.app')


@section('content')
@csrf
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route ('showCollaborateur') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Civility:</strong>
                {{ $collaborateur->civility }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $collaborateur->lastName }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $collaborateur->firstName }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Street:</strong>
                {{ $collaborateur->street }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zipcode:</strong>
                {{ $collaborateur->zipcode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Town:</strong>
                {{ $collaborateur->town }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone number:</strong>
                    {{ $collaborateur->phone }}
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $collaborateur->email }}
                    </div>
                </div>
                {{--<div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>entreprise:</strong>
                        {{ $collaborateur->entreprise_id }}
                    </div>
                </div>--}}
    </div>
@endsection