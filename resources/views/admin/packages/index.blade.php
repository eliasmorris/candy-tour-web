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
                            <h2>Package Info</h2>
                            <ul class="nav navbar-right panel_toolbox">

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".package-page-modal-lg">
                                    {{ __('Package')}} <i class="fa fa-plus"></i>
                                </button>
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
                                                    <th>Package Name</th>
                                                    <th>Trip</th>
                                                    <th>Cost</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count([$packageInfos]) > 0)
                                                @foreach($packageInfos as $packageInfo)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$packageInfo->destination_info_id}}</td>
                                                    <td>{{$packageInfo->packagename}}</td>
                                                    <td>{{$packageInfo->packagetrip}}</td>
                                                    <td>{{$packageInfo->packagecost}}</td>
                                                    <td>{{$packageInfo->description}}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/uploads/package_images/'.$packageInfo->packageimage)}}"
                                                            alt="" width="50px" height="50px;">
                                                    </td>
                                                    <td>
                                                        @can('isAdmin')
                                                        <input type="checkbox" data-id="{{ $packageInfo->id }}" name="status"
                                                            class="switch" {{ $packageInfo->status == 1 ? 'checked' : '' }}>
                                                        @endcan
                                                        
                                                        {{$packageInfo->status? 'Active' : 'Inactive'}}

                                                    </td>

                                                    <td>
                                                        <a href="#" title="view"><span
                                                                class="fa fa-eye"></span></a>
                                                        &nbsp;&nbsp;
                                                        @can('isAdmin')
                                                        <a href="" class="package_Edit" data-id="{{$packageInfo->id}}"
                                                            data-toggle="modal"
                                                            data-target=".package-modal-lg" title="edit"><span
                                                                class="fa fa-pencil-square"
                                                                style="color:cornflowerblue;"></span></a>
                                                        @include('admin.packages.edit')
                                                        @endcan
                                                        &nbsp;&nbsp;

                                                        <form id="delete-form-{{$packageInfo->id}}"
                                                            action="{{route('admin-package.destroy',$packageInfo->id)}}"
                                                            method="POST" style="display: none">
                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}


                                                        </form>
                                                        @can('isAdmin')
                                                        <a href="" onclick="if(confirm('Are you sure,You want to delete this?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{$packageInfo->id}}').submit();
                                                                
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
                                                    <th>Destination Name</th>
                                                    <th>Package Name</th>
                                                    <th>Trip</th>
                                                    <th>Cost</th>
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

    // Ajax for update package status only
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.switch').change(function() {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let package_Id = $(this).data('id');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('update-package-status') }}",
                data: {
                    'status': status,
                    'package_id': package_Id
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

    // Ajax for add packages info to the db
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addPackageForm').on('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure want to save it??')) {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('admin-package.store')}}", //For using Resource Controller
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

    // Ajax for featching package data from the db to the destination page form
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.package_Edit').click(function(e) {
            e.preventDefault();
            let packageId = $(this).data('id');

            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ route('admin-package.index')}}"+ "/" + packageId + "/edit", //For using Resource Controller url('userEdit_data')}}"+"/"+uId+"/edit"
                data: {
                    'packageid': packageId
                },
                success: function(data) {
                    //console.log(data.user1.name);
                    $('#packageid').val(data.packageinfo.id);
                    $('#destionationn').val(data.packageinfo.destination_info_id);
                    $('#package_namee').val(data.packageinfo.packagename);
                    $('#tripp').val(data.packageinfo.packagetrip);
                    $('#package_costt').val(data.packageinfo.packagecost);
                    $('#descriptionn').val(data.packageinfo.description);
                    $('#package_statuss').val(data.packageinfo.status);
                    $('#package_imagee').val(data.packageinfo.packageimage);

                }
            });
        });
    });

    // Ajax for Update packages page info to the db
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#upadatePackageForm').on('submit',function(e) {
        e.preventDefault();
        
        if (confirm('Are you sure want to update??')) {
            $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('update-package-info')}}",
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(response.message);
                $('#packagemodal').modal('hide');
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