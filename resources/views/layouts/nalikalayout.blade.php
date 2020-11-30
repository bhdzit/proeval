<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Proeval</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- nalika Icon CSS
		============================================ -->
  <link rel="stylesheet" href="/css/nalika-icon.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="/css/owl.carousel.css">
  <link rel="stylesheet" href="/css/owl.theme.css">
  <link rel="stylesheet" href="/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="/css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="/css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="/css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="/css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="/css/calendar/fullcalendar.print.min.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="https://kit.fontawesome.com/015cfc4544.js" crossorigin="anonymous"></script>
</head>

  <!-- Ionicons -->

  <!-- Theme style -->
<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
        <a href="/index.html"><img class="main-logo" src="/img/logo/logosn.png" alt="" /></a>
        <strong><img src="/img/logo/logosn.png" alt="" /></strong>
      </div>

      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <li class="active">
              <a href="{{ url('/') }}">
              <i class="fas fa-house-user"></i>
                <span>Inicio</span>
              </a>

            </li>
            <li class="active">
              <a href="{{ url('usuarios/') }}">
              <i class="fas fa-users"></i>
                <span>Usuarios</span>
              </a>
            </li>
            <li class="active">
              <a href="{{ url('evaluaciones/') }}">
              <i class="fas fa-book-open"></i>
                <span>Evaluaciones</span>
              </a>
            </li><li class="active">
              <a href="{{ url('home/') }}">
              <i class="fas fa-tag"></i>
                <span>Categorias</span>
              </a>
            </li>
            <li class="active">
              <a href="{{ url('home/') }}">
              <i class="fas fa-tags"></i>
                <span>Subcategoria</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="/index.html"><img class="main-logo" src="/img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-advance-area">
      <div class="header-top-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header-top-wraper">
                <div class="row">
                  <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro">
                      <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="icon nalika-menu-task"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n">
                      <div class="breadcome-heading">

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">

                        <li class="nav-item">
                          <a href="/#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
                            <span class="admin-name">{{auth()->user()->US_NOMBRE}} {{auth()->user()->US_NOMBRE_2}} {{auth()->user()->US_AP_PATERNO}} {{auth()->user()->US_AP_MATERNO}}</span>
                            <i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
                          </a>
                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                            <li>
                              <i class="fas fa-sign-out-alt"></i></a>
                              <a href="/#" href="/{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><span class="icon nalika-unlocked author-log-ic"></span>Salir</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                            </li>
                          </ul>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single pro tab start-->
    <div class="single-product-tab-area mg-b-30">
      <!-- Single pro tab review Start-->
      <div class="single-pro-review-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-copy-right">
              <p>Copyright © 2018 <a href="/https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery
		============================================ -->
  <script src="/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="/js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="/js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="/js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="/js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="/js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="/js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="/js/metisMenu/metisMenu.min.js"></script>
  <script src="/js/metisMenu/metisMenu-active.js"></script>
  <!-- morrisjs JS
		============================================ -->
  <script src="/js/sparkline/jquery.sparkline.min.js"></script>
  <script src="/js/sparkline/jquery.charts-sparkline.js"></script>
  <!-- calendar JS
		============================================ -->
  <script src="/js/calendar/moment.min.js"></script>
  <script src="/js/calendar/fullcalendar.min.js"></script>
  <script src="/js/calendar/fullcalendar-active.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="/js/tab.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="/js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="/js/main.js"></script>
</body>

</html>