@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(../storage/uploads/banner_package.jpg)">
    @if(count([$packagescost]) > 0)
    @foreach($packagescost as $packagecost)
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>
                {{$packagecost->packagename}}<br>
                (<i class="fas fa-dollar-sign"></i> {{ $packagecost->packagecost}} / Person)
            </h1>
        </div>
    </div>
    @endforeach
    @endif
</div>

<div class="featured-detail country-detail pt_30 pb_20 bg_white">
    <div class="container wow fadeIn">
        @if(count([$packagescost]) > 0)
        @foreach($packagescost as $packagecost)
        <!-- https://scriptsnest.com/travelplace/package/store/list -->
        @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
              @endif
        <form action="{{ route('booking-info')}}" method="post" enctype="multipart/form-data">
        @csrf

            <input type="text" name="packagename" id="packagename" value="{{$packagecost->packagename}}" />
            <div class="row">
                <div class="col-md-8 wow fadeIn" data-wow-delay="0.2s">

                    <div class="fea-descrip">

                        <div class="headstyle-two mt_30">   
                            <h4>Booking Info</h4>
                        </div>
                        <div class="descrip-pre table-responsive mb_25">
                            <table class="table table-bordered">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>

                                <tr>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" class="form-control" id="firstName" name="firstName" minlength="3" maxlength="24" required />

                                                </div>
                                            </b></span>
                                    </td>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="text" class="form-control" id="lastName" name="lastName" minlength="3" maxlength="24" required />

                                                </div>
                                            </b></span>
                                    </td>

                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                </tr>

                                <tr>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="email" class="form-control" id="mailfrom" name="mailfrom" required />

                                                </div>
                                            </b></span>
                                    </td>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" required />

                                                </div>
                                            </b></span>
                                    </td>

                                </tr>

                                <tr>
                                    <th>Tour Start Date</th>
                                    <th>Tour End Date</th>
                                </tr>
                                <tr>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" class="form-control" id="startdate" name="startdate" />

                                                </div>
                                            </b></span>
                                    </td>
                                    <td><span class="fz_20"><b>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" class="form-control" id="enddate" name="enddate" />

                                                </div>
                                            </b></span>
                                    </td>

                                </tr>

                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="fea-descrip mt_30">
                        <div class="headstyle-two">
                            <h4>Book Now</h4>
                        </div>
                        <div class="row book-now">
                            <div class="col-md-12">
                                <!-- <input type="hidden" name="_token" value="Dccr0BuK08xOGx5d6rAYgp05Bhiq8HnhPtgxLvxk"> <input type="hidden" name="package_id" value="5"> -->
                                <div class="row">

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Total Price (per Person)</label>
                                            <div class="mb_5" style="font-size: 30px;">
                                                <i class="fas fa-dollar-sign"></i> <input type="" id="packagecost" name="packagecost" value="{{$packagecost->packagecost}}" />
                                            </div>
                                            <div class="sep mb_10"></div>
                                            <label>Total Persons</label>
                                            <select id="vistornumber" name="vistornumber" class="custom-select select2 mb_15 w_auto">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                            <div class="sep mb_15"></div>
                                            <label>Total Price</label>
                                            <div class="mb_5" style="font-size: 30px;">
                                            <i class="fas fa-dollar-sign"></i> <input type="" id="totalcost" name="totalcost" required />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group button-booking">
                                    <button class="btn btn-info btn-lg" type="submit">Book Your Seat</button>
                                </div>

        </form>
        </br>
        <div class="form-group button-booking">
            <p><label>Book over Whatsapp</label></p>
        </div>
        <div class="mb_5 fz_32">
            <a href="https://wa.me/255717035783" target="_blank"><i aria-hidden="true" class="fab fa-whatsapp-square" style="color:green;"></i></a>
            <a href="https://wa.me/255717035783" target="_blank"><span> +255 717 035783</span></a>
        </div>
    </div>
</div>
</div>
</div>

</div>
<div class="row">
    <div class="headstyle-two">
        <h4>Tour Description</h4>
    </div>
    <div class="descrip-pre">
        <div>
            <p>{{$packagecost->description}}</p>
        </div>

    </div>
</div>
@endforeach
@endif
</div>
</div>


<div class="featured-detail country-detail pt_0 pb_80 bg_white">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.2s">


                <div class="fea-descrip mt_30">
                    <div class="headstyle-two">
                        <h4>More Information</h4>
                    </div>
                </div>


                <div class="packmoreinfo-tab">
                    <ul class="nav nav-pills mb-3 packmoreinfo-tab-top" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">Tour Photos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">Tour Videos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">Tour Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">Itinerary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">Policy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">Terms and Conditions</button>
                        </li>
                    </ul>
                    <div class="tab-content packmoreinfo-tab-bottom" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">

                            <div class="row">
                                @if(count([$packageviewpictures]) > 0)
                                @foreach($packageviewpictures as $packageviewpicture)
                                <div class="col-md-4 col-xs-6 clear-three col-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-bg"></div>
                                        <img src="{{ asset('storage/uploads/package_images/' .$packageviewpicture->packageimage)}}" alt="">
                                        <div class="portfolio-text">
                                            <a href="{{ asset('storage/uploads/package_images/' .$packageviewpicture->packageimage)}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">

                            <div class="row">

                                <div class="col-md-6 col-xs-6 clear-two col-item">
                                    <div class="portfolio-item">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yTIYJwqHzHE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 clear-two col-item">
                                    <div class="portfolio-item">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xC4h7SA6sBc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">

                            <div class="feat-detail-table table-responsive">
                                <table class="table table-bordered table-striped">

                                    <tr>
                                        <th class="w_200">Detail Location</th>
                                        <td>
                                            <p>Location Here</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Tour Start Date</th>
                                        <td>2023/10/05</td>
                                    </tr>
                                    <tr>
                                        <th>Tour End Date</th>
                                        <td>2023/10/08</td>
                                    </tr>
                                    <tr>
                                        <th>Last Booking Date</th>
                                        <td>2023/10/02</td>
                                    </tr>

                                    <tr>
                                        <th>Address in Map</th>
                                        <td>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496113.92041601305!2d100.3529071711315!3d13.72510879354118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6032280d61f3%3A0x10100b25de24820!2sBangkok%2C+Thailand!5e0!3m2!1sen!2sbd!4v1544191664761" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">

                            <div>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</div>

                            <div><br></div>

                            <div>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</div>

                        </div>
                        <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">

                            <div>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</div>

                            <div><br></div>

                            <div>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</div>

                        </div>
                        <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">

                            <div>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</div>

                            <div><br></div>

                            <div>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</div>

                        </div>
                    </div>

                </div><!-- //packmoreinfo-tab -->



            </div>
        </div>
    </div>
</div>

<script>
    (function($) {

        "use strict";

        $(document).ready(function() {
            $('#vistornumber').on('change', function() {
                var startDate = new Date(document.getElementById('startdate').value);
                var endDate = new Date(document.getElementById('enddate').value);
                var timeDiff = endDate.getTime() - startDate.getTime();
                var dayDiff = timeDiff / (1000 * 3600 * 24);
                var selectVal = $('#vistornumber').val();
                var selectPrice = $('#packagecost').val();
                if (dayDiff == 0) {
                    var totalPrice = selectVal * selectPrice;
                    $('#totalcost').val(totalPrice);
                    
                } else {
                    var totalPrice = selectVal * selectPrice * dayDiff;
                    $('#totalcost').val(totalPrice);
                }


            });
        });

    })(jQuery);

    // // Ajax for add services info data to the db
    // $(document).ready(function() {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $('#addbookingInfo').on('submit', function(e) {
    //         e.preventDefault();

    //         if (confirm('Are you sure want to booking with us??')) {
    //             $.ajax({
    //                 type: "post",
    //                 dataType: "json",
    //                 url: "", //For using Resource Controller
    //                 data: new FormData(this),
    //                 cache: false,
    //                 processData: false,
    //                 contentType: false,
    //                 success: function(response) {

    //                     toastr.options.closeButton = true;
    //                     toastr.options.closeMethod = 'fadeOut';
    //                     toastr.options.closeDuration = 100;
    //                     toastr.success(response.message);
    //                     //refresh the page
    //                     setTimeout(() => {
    //                         document.location.reload();
    //                     }, 2000); // 2000 milliseconds = 2 seconds

    //                 }
    //             });
    //         }
    //     });
    // });
</script>

@endsection