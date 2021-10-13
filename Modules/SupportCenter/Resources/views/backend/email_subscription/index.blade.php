@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Email Subscriptions</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="email-subscriptions-table" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
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


    <!-- Modal delete -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form name="importform" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h3 class="modal-title" id="ModalDeleteLabel">Delete</h3>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Are you sure you want to remove this?</h5>
                        </div>                        

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">Delete</button>
                       
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(function () {

            var table = $('#email-subscriptions-table').DataTable({
                processing: false,
                ajax: "{{route('admin.email_subscription.get_email_subscriptions')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'email'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });


            let subscription_id;

            $(document).on('click', '.delete', function(){
                subscription_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"email-subscriptions/delete/" + subscription_id,
            
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#email-subscriptions-table').DataTable().ajax.reload();
                        });
                    }
                })
            });
        });
    </script>

@endsection
