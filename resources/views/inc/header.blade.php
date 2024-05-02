<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-8">
                    <div class="top-header-left">
                        <p><i class="fas fa-phone"></i>+255 717 035783</p>
                        <p><i class="far fa-envelope"></i>info@candytoursafari.co.tz</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-4">
                    <div class="top-header-right">
                        <!-- <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>{{ __('Register') }}</a>
                        <a href="{{ route('login') }}"><i class="fas fa-lock"></i>{{ __('Login') }}</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="{{Route('/')}}"><img src="{{ asset('storage/uploads/logo.jpg')}}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="nav-wrapper main-menu">
                    <nav>
                        <ul class="sf-menu" id="menu">

                            <li><a href="{{Route('/')}}">Home</a></li>

                            <li><a href="{{Route('pages.services')}}">Services</a></li>

                            <li><a href="{{Route('pages.package')}}">Packages</a></li>

                            <li class="menu-item-has-children"><a href="javascript:void;">Pages</a>
                                <ul>

                                    <li><a href="{{Route('pages.about')}}">About Us</a></li>

                                    <li><a href="{{Route('pages.teammember')}}">Our Team</a></li>

                                    <li><a href="{{Route('pages.testimonial')}}">Testimonial</a></li>

                                    <li><a href="{{Route('pages.faq')}}">FAQ</a></li>

                                    <!-- <li><a href="page/dynamic-page-1.html">Dynamic Page 1</a></li>
                                    <li><a href="page/dynamic-page-2.html">Dynamic Page 2</a></li> -->
                                    
                                </ul>
                            </li>
                            <li><a href="{{Route('pages.contact')}}">Contact</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>