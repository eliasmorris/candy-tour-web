<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta name="description" content="TravelPlace - Laravel Travel Agency CMS with Online Booking">
    <title>{{ config('app.name', 'Candy-tour') }}</title>


    <link rel="icon" type="image/png" href="{{ asset('storage/uploads/favicon.png')}}">

    <!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/superfish.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/spacing.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/chosen.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/datatable.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/toastr.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">


    <!-- All JS Files -->
<script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/chosen.jquery.js')}}"></script>
<script src="{{ asset('assets/frontend/js/docsupport/init.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/easing.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/superfish.js')}}"></script>
<script src="{{ asset('assets/frontend/js/jquery.slicknav.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/viewportchecker.js')}}"></script>
<script src="{{ asset('assets/frontend/js/toastr.min.js')}}"></script>
<script src="{{ asset('../api/checkout.js')}}"></script>
<script src="{{ asset('../recaptcha/api.js')}}"></script>
<script src="{{ asset('../lib/cookieconsent/cookieconsent.min.js')}}" defer=""></script>
<script>window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#50BF20","text":"#F8FFED","border":"#b3d0e4"},"button":{"background":"#FFFFFF","text":"#000000"}},"position":"bottom","padding":"large","margin":"none","content":{"message":"This website uses cookies to ensure you get the best experience on our website.","button":"ACCEPT"}})});</script>
    

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="{{ asset('../gtag/js?id=UA-84213520-6')}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-84213520-6');
</script>

    <style>
        .top-header,
        .sf-menu > li > a:before,
        .sf-menu li ul > li,
        .text-animated li a,
        .slide-carousel .owl-nav .owl-prev, 
        .slide-carousel .owl-nav .owl-next,
        .service-item:before,
        .featured-item .price,
        .featured-carousel .owl-dots .owl-dot.active,
        .photo-title a:hover,
        .button a,
        .team-text,
        .testimonial-gallery .owl-dots .owl-dot.active,
        .blog-carousel .owl-nav .owl-prev, 
        .blog-carousel .owl-nav .owl-next,
        .blog-image .date,
        .newsletter-submit input[type='submit'],
        .footer-item ul.footer-social li a,
        .scroll-top,
        .headstyle h4:before,
        .headstyle h4:after,
        .service-list ul li a:hover,
        .pack-tab-left .nav-link.active,
        .button-booking button,
        .packmoreinfo-tab-top .nav-link.active,
        .team-detail-photo ul li a,
        .testi-page-carousel .owl-dots .owl-dot.active,
        .sidebar-item button,
        .sidebar-item h3:before,
        .sidebar-item h3:after,
        .contact-item,
        .btn-primary,
        .option-board ul li a:hover {
            background: #3367C1!important;
        }

        .sf-menu li:hover > a, .sf-menu li.current_page_item a,
        .text-animated h1,
        .featured-text h4 a:hover,
        .blog-item a.b-head:hover,
        .footer-item ul li a:hover,
        .pack-tab-left .nav-link,
        .packmoreinfo-tab-top .nav-link,
        .team-detail-text li i,
        .faq-page .accordion-button:not(.collapsed),
        .sidebar-item ul li a:hover,
        .sidebar-item ul li:hover a:before,
        .single-blog ul li a,
        .blog-text ul li a:hover,
        a.forget-password-link,
        .new-user a:hover {
            color: #3367C1!important;
        }

        .text-animated li a,
        .footer-item ul.footer-social li a,
        .footer-item ul.footer-social li a:hover,
        .sidebar-item button,
        .sidebar-item input:focus,
        .form-group input:focus, 
        .form-group textarea:focus,
        .btn-primary {
            border-color: #3367C1!important;
        }

        .sf-arrows > li:hover > .sf-with-ul:after, 
        .sf-arrows > li.current_page_item > .sf-with-ul:after {
            border-top-color: #3367C1!important;
        }
        
        .sf-menu li:hover li > a,
        .footer-item ul.footer-social li a,
        .footer-item ul.footer-social li a:hover,
        .pack-tab-left .nav-link.active,
        .packmoreinfo-tab-top .nav-link.active {
            color: #fff!important;
        }

        .footer-item ul.footer-social li a:hover {
            background: transparent!important;
        }

        .button a:hover,
        .team-text:hover,
        .blog-carousel .owl-nav .owl-prev:hover,
        .blog-carousel .owl-nav .owl-next:hover,
        .newsletter-submit input[type='submit']:hover,
        .text-animated li a:hover,
        .team-detail-photo ul li a:hover,
        .sidebar-item button:hover,
        .contact-item:hover,
        .btn-primary:hover {
            background: #333!important;
        }

        .text-animated li a:hover,
        .sidebar-item button:hover,
        .btn-primary:hover {
            border-color: #333!important;   
        }

        .wpcc-container {
            z-index: 20000000000!important;
        }

        .wpcc-container .wpcc-message a.wpcc-privacy {
            display: none!important;
        }

    </style>