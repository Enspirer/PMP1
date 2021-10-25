@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Status'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Project Leeds Status</strong>
                </div><!--card-header-->
                <form action="{{route('admin.project_leeds.update')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                    <div class="p-3">
                        <table class="table table-hover table-borderless p-4">
                            <tbody>
                                <tr>
                                    <td width="15%" style="font-weight: 600; font-size:16px;">Title:</td>
                                    <td style="font-size:16px;">{{ $project_leeds->title }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; font-size:16px;">Name:</td>
                                    <td style="font-size:16px;">{{ $project_leeds->name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                    <td style="font-size:16px;">{{ $project_leeds->email }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: 600; font-size:16px;">Project Brief:</td>
                                    <td style="font-size:16px;">{{ $project_leeds->project_brief }}</td>
                                </tr>
                            </tbody>                                            
                        </table>
                        <div class="mt-5 mr-3 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $project_leeds->id }}"/>
                                <a href="{{route('admin.project_leeds.index')}}" type="button" class="btn rounded-pill text-light px-4 py-2 me-2 mr-3 btn-primary">Back</a>
                                @if($project_leeds->status == 'Seen')
                                @else
                                <input type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success" value="Seen" />
                                @endif
                            </div>
                    </div>
                </form>

                
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace('body');
    </script>

@endsection

@push('after-scripts')
    <script>
        
    </script>
@endpush
