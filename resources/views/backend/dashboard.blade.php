@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="height: 100px;padding-top: 10px">
                <div class="container">
                    <h3>Blog Posts</h3>
                    <h1>20</h1><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="height: 100px;padding-top: 10px">
                <div class="container">
                    <h3>Invoices</h3>
                    <h1>0</h1><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="height: 100px;padding-top: 10px">
                <div class="container">
                    <h3>Invoice Count</h3>
                    <h1>0</h1><br><br>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="height: 100px;padding-top: 10px">
                <div class="container">
                    <h3>Projects</h3>
                    <h1>0</h1><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="row" style="padding: 10px;">
            <div class="card">

            </div>
        </div>
    </div>
@endsection
