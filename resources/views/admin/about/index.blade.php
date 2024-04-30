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
                            <h2>About Us Info</h2>
                            <ul class="nav navbar-right panel_toolbox">

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".about-modal-lg">
                                    {{ __('About')}} <i class="fa fa-plus"></i>
                                </button>

                                <!-- call User registrion model -->
                                @include('admin.about.create')


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
                                                    <th>Tittle</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count([$aboutinfos]) > 0)
                                                @foreach($aboutinfos as $aboutinfo)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$aboutinfo->tittle}}</td>
                                                    <td>{{$aboutinfo->description}}</td>
                                                    <td><img src="{{ asset('storage/uploads/about_images/'.$aboutinfo->about_image)}}" alt="" width="50px" height="50px;"></td>
                                                    <td>
                                                        @can('isAdmin')
                                                        <input type="checkbox" data-id="{{ $aboutinfo->id }}" name="status" class="switch" {{ $aboutinfo->status == 1 ? 'checked' : '' }}>
                                                        @endcan

                                                        {{$aboutinfo->status? 'Active' : 'Inactive'}}

                                                    </td>

                                                    <td>
                                                        <a href="#" title="view"><span class="fa fa-eye"></span></a>
                                                        &nbsp;&nbsp;
                                                        @can('isAdmin')
                                                        <a href="" class="aboutInfo_Edit" data-id="{{$aboutinfo->id}}" data-toggle="modal" data-target=".about-page-modal-lg" title="edit"><span class="fa fa-pencil-square" style="color:cornflowerblue;"></span></a>
                                                        @include('admin.about.edit')
                                                        @endcan
                                                        &nbsp;&nbsp;

                                                        <form id="delete-form-{{$aboutinfo->id}}" action="{{route('admin-about.destroy',$aboutinfo->id)}}" method="POST" style="display: none">
                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}


                                                        </form>
                                                        @can('isAdmin')
                                                        <a href="" onclick="if(confirm('Are you sure,You want to delete this?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{$aboutinfo->id}}').submit();
                                                                
                                                            }else{
                                                                event.preventDefault();
                                                            }" title="delete"><span class="fa fa-trash" style="color:red;"></span>
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
                                                    <th>Tittle</th>
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
            let aboutusId = $(this).data('id');
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "{{ route('update-about-status') }}",
                data: {
                    'status': status,
                    'aboutusid': aboutusId
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

    // Ajax for add about us info data to the db
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#adddaboutForm').on('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure want to save it??')) {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('admin-about.store')}}", //For using Resource Controller
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

    // Ajax for featching about page data from the db to the about page form
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.aboutInfo_Edit').click(function(e) {
            e.preventDefault();
            let aboutpageId = $(this).data('id');

            $.ajax({
                type: "get",
                dataType: "json",
                url: "{{ route('admin-about.index')}}"+ "/" + aboutpageId + "/edit", //For using Resource Controller url('userEdit_data')}}"+"/"+uId+"/edit"
                data: {
                    'aboutPageid': aboutpageId
                },
                success: function(data) {
                    //console.log(data.user1.name);
                    $('#aboutPageid').val(data.aboutinfo.id);
                    $('#page_tittlee').val(data.aboutinfo.tittle);
                    $('#about_descriptionn').val(data.aboutinfo.description);
                    $('#about_statuss').val(data.aboutinfo.status);
                    $('#about_imagee').val(data.aboutinfo.about_image);

                }
            });
        });
    });

    // Ajax for Update About page info to the db
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#updateaboutForm').on('submit',function(e) {
        e.preventDefault();
        
        if (confirm('Are you sure want to update??')) {
            $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('about-page-update')}}",
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(response.message);
                $('#aboutpagemodal').modal('hide');
                //refresh the page
                setTimeout(() => {
                    document.location.reload();
                }, 2000); // 3000 milliseconds = 3 seconds
                
            }
        });
        }
    });
});
</script>

@endsection