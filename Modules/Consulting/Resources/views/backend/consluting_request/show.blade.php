@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>{{$consuleting_req->name}}</h4>
                    <p>
                       <b>Company Name:</b> {{$consuleting_req->company_name}}
                    </p>
                    <p>
                        <b>Email:</b> {{$consuleting_req->email}}
                    </p>
                    <p>
                        <b>Contact Number:</b> {{$consuleting_req->telephone}}
                    </p>
                    <p>
                        <b>Appointment Date:</b> {{$consuleting_req->appointment_date_time}}
                    </p>
                    <p>
                        <b>Additional Note:</b> <br>
                        <div class="card">
                            <div class="card-body">
                                {{$consuleting_req->additional_notes}}
                            </div>
                        </div>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.consulting_request.update')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$consuleting_req->id}}" name="id">
                        <div class="form-group">
                            <label>Status Update</label>
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
