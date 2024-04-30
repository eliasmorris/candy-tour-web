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
                @if(count([$packages]) > 0 )
                @foreach($packages as $package)
                <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                        <div class="portfolio-item mt_30">
                            <div class="portfolio-bg"></div>
                            <img src="{{ asset('storage/uploads/package_images/' .$package->packageimage)}}"  alt="">
                            <div class="portfolio-text">
                                <a href="{{ asset('storage/uploads/package_images/' .$package->packageimage)}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                            </div>
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

@endsection
