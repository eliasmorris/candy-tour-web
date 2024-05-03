@extends('layout.app')
@section('content')

<div class="banner-slider" style="background-image: url(storage/uploads/banner_contact.jpg)">
        <div class="bg"></div>
        <div class="bannder-table">
            <div class="banner-text">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>

    <div class="contact-area bg-area pt_50 pb_80">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 mt_30 wow fadeIn" data-wow-delay="0.1s">
                    <div class="contact-form">
                        <div class="headstyle">
                            <h4>Contact Form</h4>
                        </div>
                        <form action="https://scriptsnest.com/travelplace/contact/store" method="post">
                            <input type="hidden" name="_token" value="Dccr0BuK08xOGx5d6rAYgp05Bhiq8HnhPtgxLvxk">                            <div class="form-row">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" name="visitor_name">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Phone" name="visitor_phone">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email Address" name="visitor_email">
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control" placeholder="Message" name="visitor_message"></textarea>
                                </div>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 mt_30 wow fadeIn" data-wow-delay="0.1s">
                    <div class="headstyle">
                        <h4>Contact Information</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.2s">
                            <div class="contact-item mb_30">
                                <div class="contact-text">
                                    <h3>Address</h3>
                                    <p>
                                        <p>3153 Foley Street<br>Kidichi Mnarani</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="contact-item mb_30">
                                <div class="contact-text">
                                    <h3>Email Address</h3>
                                    <p>
                                        <p>Office 1: +255 773 782 683<br>Office 2: +255 773 782 683</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.4s">
                            <div class="contact-item mb_30">
                                <div class="contact-text">
                                    <h3>Phone</h3>
                                    <p>
                                        <p>sales@yourwebsite.com<br>info@candytoursafari.co.tz</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt_50 wow fadeIn">
                    <div class="map-area">
                        <div class="headstyle">
                            <h4>Address in Map</h4>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4804.156059369445!2d39.234612575782094!3d-6.089812493896439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd32205083a05%3A0x76c01d569ad012b6!2sTO%20THE%20HILL%20KIDICHI%20SPICE%20FARMS!5e1!3m2!1sen!2stz!4v1714641308469!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                </div>
            </div>
        </div>
    </div>

@endsection