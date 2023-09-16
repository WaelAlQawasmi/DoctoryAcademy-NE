
       
          <!doctype html>
          <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
            
              <!-- ** Basic Page Needs ** -->
              <meta charset="utf-8">
              <title>{{ config('app.name', 'Laravel') }}</title>
              <meta name="csrf-token" content="{{ csrf_token() }}">

            
              <!-- ** Mobile Specific Metas ** -->
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="description" content="Medical HTML Template">
              <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
              <meta name="author" content="Themefisher">
              <meta name="generator" content="Themefisher Medical HTML Template v1.0">
              
              <!-- theme meta -->
              <meta name="theme-name" content="medic" />
              
              <!-- ** Plugins Needed for the Project ** -->
              <!-- bootstrap -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
              <!-- Slick Carousel -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css')}}">
              <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css')}}">
              <!-- FancyBox -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
              <!-- fontawesome -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
              <!-- animate.css -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/animation/animate.min.css')}}">
              <!-- jquery-ui -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-ui/jquery-ui.css')}}">
              <!-- timePicker -->
              <link rel="stylesheet" href="{{ asset('assets/plugins/timePicker/timePicker.css')}}">
              
              <!-- Stylesheets -->
              <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
              
              <!--Favicon-->
              <link rel="icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
            
            </head>
            
            
            <body>
              <div class="page-wrapper">
            
              
            
            <!--header top-->
            <div class="header-top">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="top-left text-center text-md-left">
                      <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="top-right text-center text-md-right">
                      <ul class="social-links">
                        <li>
                          <a href="https://themefisher.com/" aria-label="facebook">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://themefisher.com/" aria-label="twitter">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://themefisher.com/" aria-label="google-plus">
                            <i class="fab fa-google-plus-g"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://themefisher.com/" aria-label="instagram">
                            <i class="fab fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://themefisher.com/" aria-label="pinterest">
                            <i class="fab fa-pinterest-p"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--header top-->
            
            <!--Header Upper-->
            <section class="header-uper">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-4 col-lg-3">
                    <div class="logo">
                      <a href="index.html">
                        <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-9">
                    <div class="right-side">
                      <ul class="contact-info pl-0 mb-4 mb-md-0">
                        <li class="item text-left">
                          <div class="icon-box">
                            <i class="far fa-envelope"></i>
                          </div>
                          <strong>Email</strong>
                          <br>
                          <a href="mailto:info@medic.com">
                            <span>info@medic.com</span>
                          </a>
                        </li>
                        <li class="item text-left">
                          <div class="icon-box">
                            <i class="fas fa-phone"></i>
                          </div>
                          <strong>Call Now</strong>
                          <br>
                          <span>+ (88017) - 123 - 4567</span>
                        </li>
                      </ul>
                      <div class="link-btn text-center text-lg-right">
                        <a href="contact.html" class="btn-style-one">Appoinment</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!--Header Upper-->
            
            
            <!--Main Header-->
            <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarLinks">
                  <ul class="navbar-nav">
                    
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item @@about">
                          <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item @@service">
                          <a class="nav-link" href="service.html">Service</a>
                        </li>
                        <li class="nav-item @@gallery">
                          <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item @@team">
                          <a class="nav-link" href="team.html">Team</a>
                        </li>
                        <li class="nav-item @@appointment">
                          <a class="nav-link" href="appointment.html">Appointment</a>
                        </li>
                        <li class="nav-item dropdown @@blogs">
                          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item @@blogDetails" href="blog-details.html">Blog Details</a></li>
                            <li class="dropdown dropdown-submenu dropright">
                              <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
                    
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item @@contact">
                          <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item @@contact">
                          <a class="nav-link"  href="{{ route('login') }}"> {{ __('mainTrans.Login') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                      <li class="nav-item @@contact">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('mainTrans.Register') }}</a>
                      </li>
                    @endif
                    @else
                    @can('edit translation')
                      <li class="nav-item @@contact">
                        <a class="nav-link" href="/translations">{{ __('mainTrans.translations') }}</a>
                      </li>
                    @endcan
                    @can('edit permission')
                      <li class="nav-item @@contact">
                        <a class="nav-link" href="{{route('users.index') }}">{{ __('mainTrans.users') }}</a>
                      </li>
                      <li class="nav-item @@contact">
                        <a class="nav-link" href="{{route('roles.index') }}">{{ __('mainTrans.roles') }}</a>
                      </li>
                    @endcan
                      <li class="nav-item @@contact">
                        <a  class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('mainTrans.Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </li>
                    @endguest
                  </ul>
                </div>
              </div>
            </nav>
            <!--End Main Header -->


            <main class="py-4">
                @yield('content')
            </main>
    </div>
</body>

</html>
