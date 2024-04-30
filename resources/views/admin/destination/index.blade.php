@extends('admin.layouts.app')
@section('content')

<div class="container body">
    <div class="main_container">
        <!--start left side menu -->
        @include('admin.ainc.left_sidebar')
        <!-- End left side menu -->

        <!-- top navigation -->
        @include('admin.ainc.top_navlink')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <div class="x_title">
                            <h2>Destination Info</h2>
                            <ul class="nav navbar-right panel_toolbox">

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".destination-page-modal-lg">
                                    {{ __('Destination')}} <i class="fa fa-plus"></i>
                                </button>

                                <!-- call service registrion model -->
                                @include('admin.destination.create')


                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
                                            <!-- User List -->
                                        </p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>S/No</th>
                                                    <th>Destination Name</th>
                                                    <th>Tittle</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count([$destinationInfos]) > 0)
                                                @foreach($destinationInfos as $destinationInfo)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$destinationInfo->destination_name}}</td>
                                                    <td>{{$destinationInfo->tittle}}</td>
                                                    <td>{{$destinationInfo->description}}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/uploads/destination_images/'.$destinationInfo->destination_image)}}"
                                                            alt="" width="50px" height="50px;">
                                                    </td>
                                                    <td>
                                                        @can('isAdmin')
                                                        <input type="checkbox" data-id="{{ $destinationInfo->id }}" name="status"
                                                            class="switch" {{ $destinationInfo->status == 1 ? 'checked' : '' }}>
                                                        @endcan
                                                        
                                                        {{$destinationInfo->status? 'Active' : 'Inactive'}}

                                                    </td>

                                                    <td>
                                                        <a href="#" title="view"><span
                                                                class="fa fa-eye"></span></a>
                                                        &nbsp;&nbsp;
                                                        @can('isAdmin')
                                                        <a href="" class="destination_Edit" data-id="{{$destinationInfo->id}}"
                                                            data-toggle="modal"
                                                            data-target=".destination-modal-lg" title="edit"><span
                                                                class="fa fa-pencil-square"
                                                                style="color:cornflowerblue;"></span></a>
                                                        @include('admin.destination.edit')
                                                        @endcan
                                                        &nbsp;&nbsp;

                                                        <form id="delete-form-{{$destinationInfo->id}}"
                                                            action="{{route('admin-destination.destroy',$destinationInfo->id)}}"
                                                            method="POST" style="display: none">
                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}


                                                        </form>
                                                        @can('isAdmin')
                                                        <a href="" onclick="if(confirm('Are you sure,You want to delete this?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{$destinationInfo->id}}').submit();
                                                                
                                                            }else{
                                                                event.preventDefault();
                                                            }" title="delete"><span class="fa fa-trash"
                                                                style="color:red;"></span>
                                                        </a>
                                                        @endcan
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th>S/No</th>
                                                    <th>Service Name</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script src="{{ asset('assets/js/jquery.js')}}"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
<link rel="stylesheet" href="{{asset('assets/css/customtoastr.css')}}">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->
<script src="{{ asset('assets/js/customtoastr.js')}}"></script>

<script type="text/javascript">
    // For Small Toogle button    
    let elems = Array.prototype.slice.call(document.querySelectorAll('.switch'));

    elems.forEach(function(html) {
        let switchery = new Switchery(html, {
            size: 'small'
        });
    });

    // Ajax for update slide images status only
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.switch').change(function() {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let destination_Id = $(this).data('id');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('update-destination-status') }}",
                data: {
                    'status': status,
                    'destination_id': destination_Id
                },
                success: function(data) {
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    toastr.success(data.message);
                    //refresh the page
                    setTimeout(() => {
                        document.location.reload();
                    }, 2000); // 2000 milliseconds = 2 seconds
                }
            });
        });

    });

    // Ajax for add destination info to the db
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addDestinationForm').on('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure want to save it??')) {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('admin-destination.store')}}", //For using Resource Controller
                    data: new FormData(this),
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(response.message);
                        //refresh the page
                        setTimeout(() => {
                            document.location.reload();
                        }, 2000); // 2000 milliseconds = 2 seconds

                    }
                });
            }
        });
    });

    // Ajax for featching destination page data from the db to the destination page form
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.destination_Edit').click(function(e) {
            e.preventDefault();
            let destinationId = $(this).data('id');

            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ route('admin-destination.index')}}"+ "/" + destinationId + "/edit", //For using Resource Controller url('userEdit_data')}}"+"/"+uId+"/edit"
                data: {
                    'destinationid': destinationId
                },
                success: function(data) {
                    //console.log(data.user1.name);
                    $('#destinationid').val(data.destinationinfo.id);
                    $('#destination_namee').val(data.destinationinfo.destination_name);
                    $('#tittlee').val(data.destinationinfo.tittle);
                    $('#descriptionn').val(data.destinationinfo.description);
                    $('#destination_statuss').val(data.destinationinfo.status);
                    $('#destination_imagee').val(data.destinationinfo.destination_image);

                }
            });
        });
    });

    // Ajax for Update destination page info to the db
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#updateDestinationForm').on('submit',function(e) {
        e.preventDefault();
        
        if (confirm('Are you sure want to update??')) {
            $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('update-destination-info')}}",
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(response.message);
                $('#destinationmodal1').modal('hide');
                //refresh the page
                setTimeout(() => {
                    document.location.reload();
                }, 2000); // 2000 milliseconds = 2 seconds
                
            }
        });
        }
    });
});
</script>

@endsection