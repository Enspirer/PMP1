@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3>{{$contactUsDetails->first_name}} {{$contactUsDetails->last_name}}</h3>

            </div>
        </div>
    </div>
    <div class="col-md-6">

    </div>
</div>

@endsection
