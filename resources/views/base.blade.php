<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tailor | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/assets/img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('home/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
             <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo">
                    <a href="#"><img src="{{asset('home/assets/img/logo/logo.png')}}" alt=""></a>
                </div>
                <div class="header-left  d-flex f-right align-items-center">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                        <li><a href="#">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                                @if (Route::has('login'))
                                @auth
                                @if ( Auth::user() )
                                <li><a href="{{(session('utype') && Auth::user()->role_id <=5)?route('admin.dashboard'):route('dashboard')}}">Dashboard</a></li>
                                <li>
                                    <a onclick="event.preventDefault(); document.getElementById('logout_form_control').submit();" >Logout</a>
                                    <form action="{{route('logout')}}" method="POST" id="logout_form_control"> @csrf </form>
                                </li>

                                {{-- @elseif(Auth::user()->utype ==='ADM')
                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li> --}}
                                @endif

                                @else
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                                @endif
                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <!-- left Btn -->
                    <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                        <a href="#" class="header-btn">Visit Us</a>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area  position-relative ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center" data-background="{{asset('home/assets/img/hero/h1_hero.png')}}">
                <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="hero-caption">
                            <img class="rotateme" src="{{asset('home/assets/img/hero/hero-icon.png')}}" alt="" data-animation="zoomIn" data-delay="1s">
                            <h1 data-animation="fadeInLeft" data-delay=".4s">We make cloths  that suit you</h1>
                            <p data-animation="fadeInLeft" data-delay=".6s">TLorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse varius enim in eros elementum tristique. Duis
                            cursus, mi quis viverra ornare.</p>
                            <!-- Hero Btn -->
                            <a href="#" class="btn"  data-animation="fadeInLeft" data-delay=".8s" >Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left img -->
            <div class="hero-img">
                <img src="{{asset('home/assets/img/hero/h1_hero1.png')}}" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
            </div>
        </div>
        <!-- Single Slider -->
        <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center" data-background="{{asset('home/assets/img/hero/h1_hero.png')}}">
            <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                    <div class="hero-caption">
                        <img class="rotateme" src="{{asset('home/assets/img/hero/hero-icon.png')}}" alt="" data-animation="zoomIn" data-delay="1s">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">We make cloths  that suit you</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">TLorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspendisse varius enim in eros elementum tristique. Duis
                        cursus, mi quis viverra ornare.</p>
                        <!-- Hero Btn -->
                        <a href="#" class="btn"  data-animation="fadeInLeft" data-delay=".8s" >Our Services</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left img -->
        <div class="hero-img">
            <img src="{{asset('home/assets/img/hero/h1_hero1.png')}}" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
        </div>
    </div>
</div>
</div>
<!-- slider Area End-->
<!--? Clients Offers Start -->
<div class="clients-area section-padding40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".2s" >
                    <div class="offers-img">
                        <img src="{{asset('home/assets/img/gallery/offers1.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>1</span>
                        <h3><a href="services.html">Tailor Sweing</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                    <div class="offers-img">
                        <img src="{{asset('home/assets/img/gallery/offers2.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>2</span>
                        <h3><a href="services.html">Mesurement</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".6s">
                    <div class="offers-img">
                        <img src="{{asset('home/assets/img/gallery/offers3.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>3</span>
                        <h3><a href="services.html">Ready-made</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Clients Offers End -->
<!--? Visit Our Tailor Start -->
<section class="visit-tailor-area fix">
    <!--Right Contents  -->
    <div class="tailor-offers"></div>
    <!-- left Contents -->
    <div class="tailor-details">
        <h2>About our<br>tailor house</h2>
        <p class="pera-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
        <p class="pera-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse varius enim in eros elementum tristique. Duis
        cursus, mi quis viverra ornare.</p>
        <a href="#" class="btn">More About Us</a>
    </div>
</section>
<!-- Visit Our Tailor End -->
<!--? Services Area Start -->
<section class="categories-area section-padding40">
    <div class="container">
        <!-- section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9">
                <div class="section-tittle text-center mb-60">
                    <h2>Why use our service?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="{{asset('home/assets/img/icon/services1.svg')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Tailor Sweing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="{{asset('home/assets/img/icon/services2.svg')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Tailor Sweing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="{{asset('home/assets/img/icon/services3.svg')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Tailor Sweing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="{{asset('home/assets/img/icon/services4.svg')}}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Tailor Sweing</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Services Area End -->
<!--? video_start -->
<div class="video-area section-bg2 d-flex align-items-center"  data-background="{{asset('home/assets/img/gallery/video-bg.png')}}">
    <div class="container">
        <div class="video-wrap position-relative">
            <!-- Video icon -->
            <div class="video-icon" >
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- video_end -->
<!--? Testimonial Area Start -->
<section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption pb-bottom">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{asset('home/assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{asset('home/assets/img/icon/testimonial.png')}}" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Robart Brown</span>
                                    <p>Creative designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{asset('home/assets/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{asset('home/assets/img/icon/testimonial.png')}}" alt="">
                                </div>
                                <div class="founder-text">
                                    <span>Robart Brown</span>
                                    <p>Creative designer at Colorlib</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Testimonial Area End -->
<!--? instagram-social start -->
<section class="instagram-area fix pb-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                <div class="section-tittle text-center mb-80">
                    <h2>Follow us on Instagram</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-instagram mb-30">
                    <img src="{{asset('home/assets/img/gallery/instra1.png')}}" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-instagram">
                    <img src="{{asset('home/assets/img/gallery/instra2.png')}}" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instagram-social End -->
</main>
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="{{asset('home/assets/img/gallery/footer-bg.png')}}">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="{{asset('home/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing.</p>
                                    </div>
                                    <ul class="mb-40">
                                        <li class="number"><a href="#">(80) 783 367-3904</a></li>
                                        <li class="number2"><a href="#">(80) 783 367-3904</a></li>
                                    </ul>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
          <!-- Map -->
          <div class="map-area">
            <img src="{{asset('home/assets/img/gallery/map.png')}}" alt="">
        </div>
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="{{asset('home/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('home/assets/js/popper.min.js')}}"></script>
<script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('home/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('home/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('home/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('home/assets/js/wow.min.js')}}"></script>
<script src="{{asset('home/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('home/assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('home/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.sticky.js')}}"></script>
<!-- Progress -->
<script src="{{asset('home/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('home/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('home/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('home/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('home/assets/js/contact.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('home/assets/js/mail-script.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('home/assets/js/plugins.js')}}"></script>
<script src="{{asset('home/assets/js/main.js')}}"></script>

</body>
</html>
