@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3>{{$contactUsDetails->first_name}} {{$contactUsDetails->last_name}}</h3>

                <p><b>Email: </b> {{$contactUsDetails->email_address}}</p>
                <p><b>Created At:</b> {{$contactUsDetails->created_at}}</p>
                <b>Message: </b>

                <div class="card">
                    <div class="card-body">
                        <p> {{$contactUsDetails->message}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-6">

    </div>
</div>

@endsection
