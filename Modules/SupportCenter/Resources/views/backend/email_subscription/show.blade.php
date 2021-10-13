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
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.contact_us.update')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$contactUsDetails->id}}">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Unread">Unread</option>
                            <option value="Read">Read</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection
