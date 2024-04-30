@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_destination.jpg)">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>Destinations</h1>
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
            @if(count([$destinations]) > 0)
            @foreach($destinations as $destination)
                <div class="col-md-4 col-xs-6 clear-three wow fadeIn">
                    <div class="portfolio-item mt_30">
                        <div class="portfolio-bg"></div>
                        <img src="{{ asset('storage/uploads/destination_images/' .$destination->destination_image)}}" alt="">
                        <div class="portfolio-text">
                            <a href="{{ asset('storage/uploads/destination_images/' .$destination->destination_image)}}" class="magnific"><i class="fa fa-search-plus"></i></a>
                        </div>
                    </div>
                    <div class="photo-title">
                        <a href="{{Route('destination.view',$destination->id)}}">{{$destination->destination_name}}</a>
                    </div>
                </div>
                  @endforeach
                  @endif  
                
            </div>
        </div>
    </div> 

@endsection