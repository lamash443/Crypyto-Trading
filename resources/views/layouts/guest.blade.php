<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <title>Shared By NULLPHPSCRIPT.COM - Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Sites meta Data -->
  <meta name="application-name"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta name="author" content="thetork">
  <meta name="keywords" content="Bitrader, Crypto, Forex, and Stocks Trading Business">
  <meta name="description"
    content="Experience the power of Bitrader, the ultimate HTML template designed to transform your trading business. With its sleek design and advanced features, Bitrader empowers you to showcase your expertise, engage clients, and dominate the markets. Elevate your online presence and unlock new trading possibilities with Bitrader.">

  <!-- OG meta data -->
  <meta property="og:title"
    content="Bitrader - Professional Multipurpose HTML Template for Your Crypto, Forex, Stocks & Day Trading Business">
  <meta property="og:site_name" content=Bitrader>
  <meta property="og:url" content="https://thetork.com/demos/html/bitrader/">
  <meta property="og:description"
    content="Welcome to Bitrader, the game-changing HTML template meticulously crafted to revolutionize your trading business. With its sleek and modern design, Bitrader provides a cutting-edge platform to showcase your expertise, attract clients, and stay ahead in the competitive trading markets.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/og.png">



  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">



  <!-- main css for template -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

  <!-- ===============>> Preloader start here <<================= -->
  <div class="preloader">
    <img src="{{ asset('assets/images/logo/preloader.png') }}" alt="preloader icon">
  </div>
  <!-- ===============>> Preloader end here <<================= -->



  <!-- ===============>> light&dark switch start here <<================= -->
  <div class="lightdark-switch">
    <span class="switch-btn" id="btnSwitch"><img src="{{ asset('assets/images/icon/moon.svg') }}" alt="light-dark-switchbtn"
        class="swtich-icon"></span>
  </div>
  <!-- ===============>> light&dark switch start here <<================= -->





  <!-- ===============>> Header section start here <<================= -->
  <header class="header-section header-section--style2">
    <div class="header-bottom">
      <div class="container">
        <div class="header-wrapper">
          <div class="logo">
            <a href="{{ url('/') }}">
              <img class="dark" src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
            </a>
          </div>
          <div class="menu-area">
            <ul class="menu menu--style1">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>
                <a href="#">Services</a>
                <ul class="submenu">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-details.html">Services Details</a></li>
                </ul>
              </li>
              <li>
                <a href="#">About</a>
                <ul class="submenu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="price.html">Price</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-2.html">Team 2</a></li>
                  <li><a href="team-details.html">Team Details</a></li>
                </ul>
              </li>

              <li>
                <a href="#">Pages</a>
                <ul class="submenu">
                  <li><a href="blogs.html">Blogs</a></li>
                  <li><a href="blog-sidebar.html">Blog - Side Bar</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                  <li><a href="{{ route('register') }}">Sign Up</a></li>
                  <li><a href="signup-2.html">Sign Up 2</a></li>
                  <li><a href="{{ route('login') }}">Sign In</a></li>
                  <li><a href="signin-2.html">Sign In 2</a></li>
                  <li><a href="{{ route('password.request') }}">Reset Password</a></li>
                  <li><a href="forgot-pass-2.html">Reset Password 2</a></li>
                  <li><a href="404.html">404 Error</a></li>
                </ul>

              </li>
              <li>
                <a href="contact.html">Contact Us</a>
              </li>
            </ul>

          </div>
          <div class="header-action">
            <div class="menu-area">
              <div class="header-btn">
                <a href="{{ route('login') }}" class="trk-btn trk-btn--login">
                  <span>Login</span>
                </a>
                <a href="{{ route('register') }}" class="trk-btn trk-btn--signup">
                  <span>Signup</span>
                </a>
              </div>

              <!-- toggle icons -->
              <div class="header-bar d-lg-none header-bar--style1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ===============>> Header section end here <<================= -->





  {{ $slot }}

  <!-- ===============>> footer start here <<================= -->
  <footer class="footer ">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top footer__top--style1">
          <div class="row gy-5 gx-4">
            <div class="col-md-6">
              <div class="footer__about">
                <a href="{{ url('/') }}" class="footer__about-logo"><img src="{{ asset('assets/images/logo/logo-dark.png') }}"
                    alt="Logo"></a>
                <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most
                  affordable products and services around. Shop now and start finding great deals!</p>
                <div class="footer__app">
                  <div class="footer__app-item footer__app-item--apple">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://www.apple.com/app-store/" target="_blank" class="stretched-link">
                          <img src="{{ asset('assets/images/footer/apple.png') }}" alt="apple-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>Download on the</span>
                        <p class="mb-0">App Store</p>
                      </div>
                    </div>
                  </div>
                  <div class="footer__app-item footer__app-item--playstore">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://play.google.com/store" target="_blank" class="stretched-link">
                          <img src="{{ asset('assets/images/footer/play.png') }}" alt="playstore-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>GET IT ON</span>
                        <p class="mb-0">Google Play</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Quick links</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="about.html">About Us</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="team.html">Teams</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="service.html">Services</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Features</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Support</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#">Terms & Conditions</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Privacy Policy</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">FAQs</a></li>
                    <li class="footer__linklist-item"> <a href="#">Support Center</a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Company</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#">Careers</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Updates</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Job</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Announce</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__end">
            <div class="footer__end-copyright">
              <p class=" mb-0">© 2024 All Rights Reserved By <a href="https://themeforest.net/user/thetork/portfolio"
                  target="_blank">Thetork</a> </p>
            </div>
            <div>
              <ul class="social">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__shape">
      <span class="footer__shape-item footer__shape-item--1"><img src="{{ asset('assets/images/footer/1.png') }}"
          alt="shape icon"></span>
      <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
    </div>
  </footer>
  <!-- ===============>> footer end here <<================= -->



  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/all.min.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
  <script src="{{ asset('assets/js/purecounter_vanilla.js') }}"></script>



  <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>