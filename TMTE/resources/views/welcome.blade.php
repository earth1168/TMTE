<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TMTE Video Streaming </title>
  <link rel="shortcut icon" href="image/faviconre.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="./fonts/typography-font/typo.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="{{asset('./plugins/aos/aos.min.css')}}">
  <!-- Vendor stylesheets  --> 
  <link rel="stylesheet" href="{{asset('./css/main.css')}}">
  <!-- Custom stylesheet -->
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'Mazzard H'; ">
  <div class="site-wrapper overflow-hidden position-relative">
    <!-- Site Header -->
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader.gif" alt="preloader">
   </div>
   </div>    -->
    <!--Site Header Area -->
    <header class="site-header site-header--menu-right landing-14-menu site-header--absolute site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="brand-logo">
            <a href="#">
              <!-- light version logo (logo must be black)-->
              <img src="image/logo/logor.png" alt="" class="light-version-logo">
              <!-- Dark version logo (logo must be White)-->
              <img src="image/logo/logor.png" alt="" class="dark-version-logo">
            </a>
          </div>
          <div class="menu-block-wrapper">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item nav-item-has-children">
                  <a href="#" class="nav-link-item drop-trigger">Dropdowns <i class="fas fa-angle-down"></i>
                  </a>
                  <ul class="sub-menu" id="submenu-9">
                    <li class="sub-menu--item">
                      <a href="#">Payment</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Home </a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">Noti</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">SerAd</a>
                    </li>
                    <li class="sub-menu--item">
                      <a href="#">MediaAd</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link-item">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link-item">Support</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="header-btn header-btn-l-14 ms-auto d-none d-xs-inline-flex">
          @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        
                        <a class="btn btn trailb-btn focus-reset" href="{{ route('login') }}">
              Login
            </a>
                        @if (Route::has('register'))
                           
                          <a class="btn btn trail-btn focus-reset" href="{{ route('register') }}">
              Register
            </a>
                            @endif
                    @endauth
                
            @endif
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>
    <!-- navbar- -->
    <!-- Hero Area -->
    <div class="hero-area-l-14 position-relative z-index-1 overflow-hidden">
      <div class="container">
        <div class="row position-relative justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 pr-0 " data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content">
              <h1>Unlimited movies, TV shows, and more.</h1>
              <p>Watch anywhere. Cancel anytime. <br> Ready to watch? Click the button below.</p>
              <a href="#" class="btn focus-reset">Register / Login</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-5 col-md-8 " data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="banner-image-l-14">
              <img src="./image/landpic/landbg4.svg" alt="" class="w-100 mt-xl-n10">
            </div>
          </div>
        </div>
      </div>
      <div class="bg-shape-14"></div>
    </div>
    <!-- Brand-area -->
    <div class="brand-area-l-14">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h4>The #1 Video Streaming Platform, Tons Of Popular Brands</h4>
          </div>
        </div>
        <div class="row img-grayscale">
          <div class="col-lg-12">
            <div class="brand-area-l-14-items d-flex justify-content-center justify-content-xl-between align-items-center flex-wrap ">
              <div class="single-brand " data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <img src="image/landpic/marvelree.png" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="700" data-aos-once="true">
                <img src="image/landpic/warnere.jpg" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="900" data-aos-once="true">
                <img src="image/landpic/pixare.png" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                <img src="image/landpic/ghiblire.png" alt="">
              </div>
              <div class="single-brand " data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
                <img src="image/landpic/sony.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="brand-aarea-border-l14"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content-Area-1 -->
    <div class="content-area-l-14-1 position-relative">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10 order-lg-1 order-1" data-aos="fade-right" data-aos-duration="1200" data-aos-once="true">
            <div class="h-100 section-heading-8 content text-lg-start text-center">
              <h2>Watch everywhere.</h2>
              <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV without paying more.</p>
              <a href="#" class="btn focus-reset">
                Get Started Now
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
          <div class="offset-xl-2 col-xl-6 col-lg-6 col-md-8 pl-xl-11 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="1200" data-aos-once="true">
            <div class="content-img">
              <img src="image/landpic/content-1.svg" alt="" class="w-100 w-xl-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Content-Area-2 -->
    <div class="content-area-l-14-2">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-md-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="content-img pr-lg-13">
              <img src="image/landpic/content-2.svg" alt="" class="w-100">
            </div>
          </div>
          <div class="col-xl-4 offset-xl-2 col-lg-6 col-md-8 col-sm-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="content section-heading-8 text-lg-start text-center">
              <h2>
              Create profiles<br>for kids.
              </h2>
              <p>Send kids on adventures with their favorite characters in a space made just for them—free with your membership.</p>
              <a href="#" class="btn focus-reset">
                Get Started Now
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pricing-area section -->
    <div class="pricing-area-l14 position-relative overflow-hidden z-index-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-6 col-lg-7 col-md-10 text-center" data-aos="fade-down" data-aos-duration="800" data-aos-once="true">
            <div class="section-heading-8">
              <h2>
               Check out our plans and pricing options</h2>
              <p>Watch TMTE on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from THB99 to THB419 a month. No extra costs, no contracts.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
          <div class="col-md-12 text-center">
            <!-- toggle-btn start -->
            <div class="toggle-btn d-inline-block  justify-content-center">
              <a class="btn-toggle btn-toggle-2 active-white d-flex  price-deck-trigger" data-pricing-trigger data-target="#table-price-value" href="javascript:">
                <span class="round"></span>
              </a>
            </div>
            <!-- toggle-btn end -->
          </div>
          <div class="col-md-12 col-sm-8 l-14-pricing-table row no-gutters">
            <div class="col-lg-3 col-md-6 border p-0">
              <!-- single-price start -->
              <div class="single-price bg-default text-center  pt-5 pb-10 mb-lg-0" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <!-- price-top start -->
                <div class="price-top justify-content-between mb-2">
                  <span>Basic</span>
                </div>
                <!-- price-top end -->
                <!-- main-price start -->
                <div class="main-price pb-8 border-bottom">
                  <div class="price mt-3 mb-3 position-relative">
                    <span class="d-inline-block mb-0  dynamic-value">THB</span>
                    <h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="19" data-yearly="199"></h2>
                  </div>
                  <span class=" dynamic-value" data-active="per month" data-monthly="Per month"
                                data-yearly="per year"></span>
                </div>
                <!-- main-price end -->
                <!-- price-body start -->
                <div class="price-body">
                  <ul class="pricing-list with-check-icon list-unstyled">
                    <li>
                      Unlimited Blocks</li>
                    <li>
                      5GB Clould Storages</li>
                    <li>
                      Custom Domain Names</li>
                    <li>
                      <del class="text-gray">Unlimited Emails</del>
                    </li>
                  </ul>
                </div>
                <div class="price-btn">
                  <a class="btn focus-reset" href="#">Get started now</a>
                </div>
                <!-- price-btn end -->
              </div>
              <!-- single-price end -->
            </div>
            <div class="col-lg-3 col-md-6 border p-0">
              <!-- single-price start -->
              <div class="single-price bg-default popular-pricing popular-pricing-2 text-center position-relative  pt-5 pb-10 mb-lg-0" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <!-- price-top start -->
                <div class="price-top justify-content-between mb-2">
                  <span>Pro</span>
                </div>
                <!-- price-top end -->
                <!-- main-price start -->
                <div class="main-price pb-8 border-bottom">
                  <div class="price mt-3 mb-3 position-relative">
                    <span class="d-inline-block mb-0  dynamic-value">THB</span>
                    <h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="29" data-yearly="299"></h2>
                  </div>
                  <span class=" dynamic-value" data-active="per month" data-monthly="per month"
                                data-yearly="per year"></span>
                </div>
                <!-- main-price end -->
                <!-- price-body start -->
                <div class=" price-body">
                  <ul class="pricing-list with-check-icon list-unstyled">
                    <li>
                      Unlimited Blocks</li>
                    <li>
                      5GB Clould Storages</li>
                    <li>
                      Custom Domain Names</li>
                    <li>
                      Unlimited Emails</li>
                  </ul>
                </div>
                <div class="price-btn price-btn-bro">
                  <a class="btn" href="#">Get started now</a>
                </div>
                <!-- price-btn end -->
              </div>
              <!-- single-price end -->
            </div>
            <div class="col-lg-3 col-md-6 border p-0">
              <!-- single-price start -->
              <div class="single-price bg-default text-center  pt-5 pb-10 mb-lg-0" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <!-- price-top start -->
                <div class="price-top justify-content-between mb-2">
                  <span>Smart</span>
                </div>
                <!-- price-top end -->
                <!-- main-price start -->
                <div class="main-price pb-8 border-bottom">
                  <div class="price mt-3 mb-3 position-relative">
                    <span class="d-inline-block mb-0  dynamic-value">THB</span>
                    <h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="49" data-yearly="499"></h2>
                  </div>
                  <span class=" dynamic-value" data-active="per month" data-monthly="per month"
                                data-yearly="per year"></span>
                </div>
                <!-- main-price end -->
                <!-- price-body start -->
                <div class=" price-body">
                  <ul class="pricing-list with-check-icon list-unstyled">
                    <li>
                      Unlimited Blocks</li>
                    <li>
                      5GB Clould Storages</li>
                    <li>
                      Custom Domain Names</li>
                    <li>
                      Unlimited Emails</li>
                  </ul>
                </div>
                <div class="price-btn">
                  <a class="btn" href="#">Get started now</a>
                </div>
                <!-- price-btn end -->
              </div>
              <!-- single-price end -->
            </div>
            <div class="col-lg-3 col-md-6 border p-0">
              <!-- single-price start -->
              <div class="single-price bg-default  text-center  pt-5 pb-10" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                <!-- price-top start -->
                <div class="price-top justify-content-between mb-2">
                  <span
                                class="font-size-1 letter-spacing-np51 text-dovegray line-height-1p66 font-weight-bold">Exclusive</span>
                </div>
                <!-- price-top end -->
                <!-- main-price start -->
                <div class="main-price pb-8 border-bottom">
                  <div class="price mt-3 mb-3 position-relative">
                    <span class="d-inline-block mb-0  dynamic-value">THB</span>
                    <h2 class="d-inline-block mb-0  dynamic-value" data-active="15" data-monthly="89" data-yearly="999"></h2>
                  </div>
                  <span class=" dynamic-value" data-active="per month" data-monthly="per month"
                                data-yearly="per year"></span>
                </div>
                <!-- main-price end -->
                <!-- price-body start -->
                <div class="price-body">
                  <ul class="pricing-list with-check-icon list-unstyled">
                    <li>
                      Unlimited Blocks</li>
                    <li>
                      5GB Clould Storages</li>
                    <li>
                      Custom Domain Names</li>
                    <li>
                      Unlimited Emails</li>
                  </ul>
                </div>
                <div class="price-btn">
                  <a class="btn" href="#">Get started now</a>
                </div>
                <!-- price-btn end -->
              </div>
              <!-- single-price end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CTA Area -->
    <div class="cta-area-l-14">
      <div class="container position-relative">
        <div class="bg-shape-img-3"></div>
        <div class="row cta-area-l-14-content justify-content-center text-lg-start text-center">
          <div class="col-lg-6">
            <div class="cta-content">
              <h2 class="text-white">Ready to get started?</h2>
            </div>
          </div>
          <div class="col-lg-3 text-lg-end text-center">
            <a class="btn" href="#">Register / Login</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Area -->
    <footer class="footer-area-l-12 position-relative">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-11 pl-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
            <div class="row">
              <div class="col-sm-3 col-xs-6">
                <div class="footer-widget widget2">
                  <p>Help menu</p>
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="">About</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Works</a></li>
                    <li><a href="">Career</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div class="footer-widget widget3">
                  <ul class="widget-links pl-0 list-unstyled">
                    <li><a href="">Contact </a></li>
                    <li><a href="">Help & Support</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-5 col-xs-6 pl-lg-0">
                <div class="footer-widget widget4">
                  <p class="widget-title">Products</p>
                  <ul class="widget-links pl-0 list-unstyled ">
                    <li><a href="">Essential Landing Page</a></li>
                    <li><a href="">Alpha Dashboard Pro</a></li>
                    <li><a href="">Karnel Admin Dashboard</a></li>
                    <li><a href="">Gray UI Kit</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-8 col-sm-11" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
            <div class="footer-subs-form-l-12">
              <p>Subscribe to our newsletter</p>
              <h6>Subscribe to get lastest offers, news and events announcements. No spam in your inbox.</h6>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your email address" aria-label="">
                <div class="input-group-append">
                  <button class="btn border-0 focus-reset" type="button">
                    <i class="icon icon-tail-right text-white"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Vendor Scripts -->
  <script src="js/vendor.min.js"></script>
  <script src="./plugins/aos/aos.min.js"></script>
  <script src="./plugins/menu/menu.js"></script>
  <!-- Activation Script -->
  <script src="js/custom.js"></script>
</body>

</html>