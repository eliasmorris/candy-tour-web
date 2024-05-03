@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_service.jpg)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Our Services</h1>
        </div>
    </div>
</div>

<div class="service-area pt_50 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>

        <div class="row">
            @if(count([$serviceinfos])> 0)
            @foreach($serviceinfos as $serviceinfo)
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(public/uploads/service-1.jpg)">
                    <a href="service/international-tour.html">
                        <i class="fas fa-globe"></i>
                        <div class="ser-text">
                            <h4>International Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endif

        </div>

        <div class="row">
            <div class="col-md-12">

            </div>
        </div>

    </div>
</div>

@endsection