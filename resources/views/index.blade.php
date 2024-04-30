@extends('layout.app')

@section('content')
<div class="slider">
    <div class="slide-carousel owl-carousel">

        @if(count([$slideImages]) > 0)
        @foreach($slideImages as $slideImage )
        <div class="slider-item" style="background-image:url('{{ asset("storage/uploads/slide_images/".$slideImage->slide_image)}}');">
            <div class="slider-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 ">
                        <div class="slider-table">
                            <div class="slider-text">

                                <div class="text-animated">
                                    <h1>{{$slideImage->head_caption}}</h1>
                                </div>

                                <div class="text-animated">
                                    <p>
                                    <p>{{$slideImage->slide_caption}}</p>

                                </div>

                                <div class="text-animated">
                                    <ul>
                                        <li><a href="#">Read More</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>


<div class="service-area pt_80 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>Our Services</h2>
                    </div>
                    <p>Our team always provides quality tour services to our valuable clients</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service1.webp)">
                    <a href="service/international-tour.html">
                        <i class="fas fa-globe"></i>
                        <div class="ser-text">
                            <h4>Island Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service2.webp)">
                    <a href="service/adventure-tour.html">
                        <i class="fab fa-superpowers"></i>
                        <div class="ser-text">
                            <h4>Adventure Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service-3.jpg)">
                    <a href="service/business-tour.html">
                        <i class="far fa-handshake"></i>
                        <div class="ser-text">
                            <h4>Jozani Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service-4.jpg)">
                    <a href="service/domestic-tour.html">
                        <i class="fas fa-anchor"></i>
                        <div class="ser-text">
                            <h4>Safari blue Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service-5.jpg)">
                    <a href="service/medical-tour.html">
                        <i class="fas fa-briefcase-medical"></i>
                        <div class="ser-text">
                            <h4>Spice Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-xs-6 clear-three wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item mt_30" style="background-image: url(storage/uploads/service-6.jpg)">
                    <a href="service/religious-tour.html">
                        <i class="fas fa-atom"></i>
                        <div class="ser-text">
                            <h4>Culture Tour</h4>
                            <p>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>

                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="featured-package bg-area pt_80 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>FEATURED PACKAGES</h2>
                    </div>
                    <p>All our featured tour packages are given below</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt_50">
                <div class="featured-carousel owl-carousel">

                    @if(count([$packages]) > 0 )
                    @foreach($packages as $package)
                    <div class="featured-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="featured-photo left">

                            <img src="{{ asset('storage/uploads/package_images/' .$package->packageimage)}}" alt="3 days in Buenos Aires">
                            <!-- <span class="price"><i class="fas fa-dollar-sign"></i> {{ $package->packagecost }} / Person</span> -->
                        </div>
                        <div class="team-text">
                            <a href="{{Route('package.view', $package->id)}}">
                                {{ $package->packagetrip}}<br>
                                <span class="fz_22"><i class="fas fa-dollar-sign"></i> {{ $package->packagecost }}/ Person</span>
                                <br><span class="available-green">(Booking Now)</span>

                            </a>
                        </div>
                        <div class="featured-text">
                            <h4><a href="{{Route('package.view', $package->id)}}">{{ $package->packagename }}</a></h4>
                            <p>
                                
                            
                            @if(strlen($package->description) > 50 )
                            <p>{!! htmlspecialchars_decode(substr($package->description, 0,50)) !!}...</p>
                            <a href="{{ url('readmore', $package->id)}}" >
                                    <!--more&gt;&gt;-->
                                    Read more...
                                 </a>
                            @else
                            {!! htmlspecialchars_decode($package->description) !!}
                            @endif
                            
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="counterup-area pt_70 pb_100" style="background-image: url(storage/uploads/counter_bg.jpg)">
    <div class="bg-counterup"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-3 col-xs-6 count-four wow fadeIn" data-wow-delay="0.1s">
                <div class="counter-item mt_30">
                    <div class="counter-text">
                        <h2 class="counter">575</h2>
                        <h4>COMPLETED TOURS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 count-four wow fadeIn" data-wow-delay="0.2s">
                <div class="counter-item mt_30">
                    <div class="counter-text">
                        <h2 class="counter">300</h2>
                        <h4>HAPPY CLIENTS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 count-four wow fadeIn" data-wow-delay="0.3s">
                <div class="counter-item mt_30">
                    <div class="counter-text">
                        <h2 class="counter">70</h2>
                        <h4>EXPERIENCED MEMBERS</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6 count-four wow fadeIn" data-wow-delay="0.4s">
                <div class="counter-item mt_30">
                    <div class="counter-text">
                        <h2 class="counter">45</h2>
                        <h4>AWARDS WON</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="team-area bg-area pt_80 pb_80">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="main-headline">
                    <div class="headline">
                        <h2>Team Members</h2>
                    </div>
                    <p>See all our expert team members who are ready to help you always</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt_30">
                <div class="team-carousel owl-carousel">
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-1.jpg')}}" alt="Brent Grundy">

                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="team-text">
                            <a href="team-member/brent-grundy.html">Brent Grundy</a>
                            <p>Founder</p>
                        </div>
                    </div>
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-2.jpg')}}" alt="Robin Cook">
                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="team-text">
                            <a href="team-member/robin-cook.html">Robin Cook</a>
                            <p>Chairman</p>
                        </div>
                    </div>
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-3.jpg')}}" alt="Bob Smith">

                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="team-text">
                            <a href="team-member/bob-smith.html">Bob Smith</a>
                            <p>Executive Office</p>
                        </div>
                    </div>
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-4.jpg')}}" alt="Patrick Henderson">

                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="team-text">
                            <a href="team-member/patrick-henderson.html">Patrick Henderson</a>
                            <p>Marketing Officer</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-area pt_80 pb_80" style="background-image: url(storage/uploads/testimonial_bg.jpg)">
    <div class="bg-testimonial"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="main-headline white">
                    <div class="headline">
                        <h2>Testimonial</h2>
                    </div>
                    <p>Our happy clients always recommend our travel agency</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt_30">
                <div class="testimonial-gallery owl-carousel wow fadeIn" data-wow-delay="0.2s">
                    <div class="testimonial-item">
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
                    <div class="testimonial-item">
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
                    <div class="testimonial-item">
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