@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_package.jpg)">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>Packages</h1>
            </div>
        </div>
    </div>

    <div class="portfolio-page pt_50 pb_80">
        <div class="container wow fadeIn">

            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-1.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-1.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/3-days-in-buenos-aires.html">
                                3 days in Buenos Aires<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 5000 / Person</span>
                                <br><span class="available-green">(Available For Booking)</span>
                                                                
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-3.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-3.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/7-days-in-buenos-aires.html">
                                7 days in Buenos Aires<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 25 / Person</span>
                                <br><span class="not-available-red">(Not Available For Booking)</span>
                                                                
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-4.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-4.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/12-days-in-buenos-aires.html">
                                12 days in Buenos Aires<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 30 / Person</span>
                                <br><span class="available-green">(Available For Booking)</span>
                                                                
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-5.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-5.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/3-days-in-bangkok.html">
                                3 days in Bangkok<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 22 / Person</span>
                                <br><span class="not-available-red">(Not Available For Booking)</span>
                                                                
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-6.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-6.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/5-days-in-bangkok.html">
                                5 days in Bangkok<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 34 / Person</span>
                                <br><span class="available-green">(Available For Booking)</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package-main-photo-7.jpg')}}" alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package-main-photo-7.jpg')}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="photo-title">
                            <a href="package/8-days-in-bangkok.html">
                                8 days in Bangkok<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> 80 / Person</span>
                                <br><span class="available-green">(Available For Booking)</span>                                 
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
