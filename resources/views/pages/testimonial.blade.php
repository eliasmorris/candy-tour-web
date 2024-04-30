@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_testimonial.jpg)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1>Testimonials</h1>
        </div>
    </div>
</div>

<div class="testimonial-page pt_80 pb_80">
    <div class="container wow fadeIn">

        <div class="row">
            <div class="col-md-12">

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt_30">
                <div class="testi-page-carousel owl-carousel">

                    <div class="testimonial-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-photo" style="background-image: url(storage/uploads/testimonial-1.jpeg)"></div>
                        <div class="testimonial-text">
                            <h2>John Doe</h2>
                            <h3>Managing Director, ABC Media</h3>
                            <div class="testimonial-pra">
                                <p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-photo" style="background-image: url(storage/uploads/testimonial-2.jpeg)"></div>
                        <div class="testimonial-text">
                            <h2>Dadiv Smith</h2>
                            <h3>CEO, XYZ Technologies</h3>
                            <div class="testimonial-pra">
                                <p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="testimonial-photo" style="background-image: url(storage/uploads/testimonial-3.jpeg)"></div>
                        <div class="testimonial-text">
                            <h2>Stefen Carman</h2>
                            <h3>Chairman, ZZ Corporation</h3>
                            <div class="testimonial-pra">
                                <p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection