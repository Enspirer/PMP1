@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Consulting Requests</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="villadatatable" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Telephone No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Option</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <script type="text/javascript">
        $(function () {

            var table = $('#villadatatable').DataTable({
                processing: false,
                ajax: "{{route('admin.consulting_request.get_table_details')}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'company_name', name: 'company_name'},
                    {data: 'telephone', name: 'telephone'},
                    {data: 'email', name: 'email'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

@endsection
