@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_team_member.jpg)">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>Team Member</h1>
            </div>
        </div>
    </div>

    <div class="team-area pt_50 pb_80">
        <div class="container wow fadeIn">

            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-4 col-xs-6 clear-four wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item mt_30">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-1.jpg')}}" alt="Brent Grundy">
                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="team-text">
                            <a href="team-member/brent-grundy.html">Brent Grundy</a>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 clear-four wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item mt_30">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-2.jpg')}}" alt="Robin Cook">
                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="team-text">
                            <a href="team-member/robin-cook.html">Robin Cook</a>
                            <p>Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 clear-four wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item mt_30">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-3.jpg')}}" alt="Bob Smith">
                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="team-text">
                            <a href="team-member/bob-smith.html">Bob Smith</a>
                            <p>Executive Office</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 clear-four wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item mt_30">
                        <div class="team-photo">
                            <div class="team-bg"></div>
                            <img src="{{ asset('storage/uploads/team-member-4.jpg')}}" alt="Patrick Henderson">
                            <div class="team-social">
                                <ul>
                                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
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

            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>

        </div>
    </div>

@endsection