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
                            <h2>Slides List</h2>
                            <ul class="nav navbar-right panel_toolbox">

                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".slide-modal-lg">
                                    {{ __('Slide')}} <i class="fa fa-plus"></i>
                                </button>

                                <!-- call User registrion model -->
                                @include('admin.slides.create')


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
                                                    <th>Slide Name</th>
                                                    <th>Head Caption</th>
                                                    <th>Catption</th>
                                                    <th>Slide Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count([$slide_imgs]) > 0)
                                                @foreach($slide_imgs as $slide_img)
                                                <tr>
                                                    <td>{{$loop->index + 1}}</td>
                                                    <td>{{$slide_img->slide_name}}</td>
                                                    <td>{{$slide_img->head_caption}}</td>
                                                    <td>{{$slide_img->slide_caption}}</td>
                                                    <td><img src="{{ asset('storage/uploads/slide_images/'.$slide_img->slide_image)}}" alt="" width="50px" height="50px;"></td>
                                                    <td>
                                                        @can('isAdmin')
                                                        <input type="checkbox" data-id="{{ $slide_img->id }}" name="status" class="switch" {{ $slide_img->status == 1 ? 'checked' : '' }}>
                                                        @endcan

                                                        {{$slide_img->status? 'Active' : 'Inactive'}}

                                                    </td>

                                                    <td>
                                                        <a href="#" title="view"><span class="fa fa-eye"></span></a>
                                                        &nbsp;&nbsp;
                                                        @can('isAdmin')
                                                        <a href="" class="slideImage_Edit" data-id="{{$slide_img->id}}" data-toggle="modal" data-target=".slide-image-modal-lg" title="edit"><span class="fa fa-pencil-square" style="color:cornflowerblue;"></span></a>
                                                        @include('admin.slides.edit')
                                                        @endcan
                                                        &nbsp;&nbsp;

                                                        <form id="delete-form-{{$slide_img->id}}" action="{{route('admin-slides.destroy',$slide_img->id)}}" method="POST" style="display: none">
                                                            {{ csrf_field() }}
                                                            {{method_field('DELETE')}}


                                                        </form>
                                                        @can('isAdmin')
                                                        <a href="" onclick="if(confirm('Are you sure,You want to delete this?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{$slide_img->id}}').submit();
                                                                
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
                                                    <th>Slide Name</th>
                                                    <th>Head Caption</th>
                                                    <th>Catption</th>
                                                    <th>Slide Image</th>
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
        let slideimgId = $(this).data('id');
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('slides_image.update.status') }}",
            data: {
                'status': status,
                'slideImg_Id': slideimgId
            },
            success: function(data) {
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(data.message);
                //refresh the page
                setTimeout(() => {
                    document.location.reload();
                }, 3000); // 3000 milliseconds = 3 seconds
            }
        });
    });

});

    // Ajax for add slides data to the db
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#addslideForm').on('submit', function(e) {
            e.preventDefault();

            if (confirm('Are you sure want to save it??')) {
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('admin-slides.store')}}", //For using Resource Controller
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
                        }, 3000); // 3000 milliseconds = 3 seconds

                    }
                });
            }
        });
    });

// Ajax for fetch slide image data from the db to the slide image form
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.slideImage_Edit').click(function(e) {
        e.preventDefault();
        let slideimgId = $(this).data('id');
        
        $.ajax({
            type: "get",
            dataType: "json",
            url: "{{ route('admin-slides.index')}}"+ "/"+slideimgId+"/edit", //For using Resource Controller url('userEdit_data')}}"+"/"+uId+"/edit"
            data: { 'slideimageId': slideimgId },
            success: function(data) {
                 //console.log(data.user1.name);
                 $('#slideImageId').val(data.slide_image.id);
                $('#slide_namee').val(data.slide_image.slide_name);
                $('#head_captionn').val(data.slide_image.head_caption);
                $('#slide_captionn').val(data.slide_image.slide_caption);
                $('#slide_statuss').val(data.slide_image.status);
                $('#slide_imagee').val(data.slide_image.slide_image); 
                
            }
        });
    });
});

// Ajax for Update slide images to the db
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#updateslideImageForm').on('submit',function(e) {
        e.preventDefault();
        //var urld = $('meta[name=app-url]').attr("content") + "/admin-slides/" + $("#slideImageId").val();
        if (confirm('Are you sure want to update??')) {
            $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('update-slide')}}",
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {

                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(response.message);
                $('#slideimagemodal').modal('hide');
                //refresh the page
                setTimeout(() => {
                    document.location.reload();
                }, 3000); // 3000 milliseconds = 3 seconds
                
            }
        });
        }
    });
});
</script>

@endsection