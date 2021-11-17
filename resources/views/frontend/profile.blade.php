@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{}}">
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="col-6 text-end">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">

            </div>
        </div>
    </div>
    
@endsection
