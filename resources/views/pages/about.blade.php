@extends('layout.app')
@section('content')
@if (count([$aboutusInfos]) > 0)
@foreach ($aboutusInfos as $aboutusInfo)
<div class="banner-slider" style="background-image:url('{{ asset("storage/uploads/about_images/" .$aboutusInfo->about_image)}}');">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>About candy tour</h1>
            </div>
        </div>
    </div>
    <div class="about-area pt_30 pb_50">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.1s">
                   
                    <div class="about-text mt_30">
                        <!-- <h3>OUR MISSION</h3> -->
                        <h6>{{$aboutusInfo->tittle}}</h6>
                        <p>
                            {{$aboutusInfo->description}}
                        </p>
                        <p><br></p>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection