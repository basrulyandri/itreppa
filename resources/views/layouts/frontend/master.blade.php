<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>{{getOption('site_name')}} | {{getOption('site_description')}}</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  

  @yield('og')

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{asset('assets/frontend')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{asset('assets/frontend')}}/pages/css/animate.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{asset('assets/frontend')}}/pages/css/components.css" rel="stylesheet">
  
  <link href="{{asset('assets/frontend')}}/corporate/css/style.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="{{asset('assets/frontend')}}/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="{{asset('assets/frontend')}}/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
  @yield('header')
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>021 456 78910</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@apperti.id</span></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{route('auth.login')}}">Log In</a></li>
                        <li><a href="page-reg-page.html">Registration</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index.html"><img src="{{asset('assets/frontend')}}/corporate/img/logos/logo-apperti.png" alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Profil                
              </a>                
              <ul class="dropdown-menu">
                <li><a href="#">Sambutan Ketua</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
                <li class="active"><a href="#">Visi & Misi</a></li>
              </ul>
            </li>
            
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Regional                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-3 header-navigation-col">
                        <h4>Sumatra</h4>
                        <ul>
                          <li><a href="#">Sumatra Barat</a></li> 
                          <li><a href="#">Jambi</a></li> 
                          <li><a href="#">Lampung</a></li>                         
                        </ul>
                      </div>
                      <div class="col-md-3 header-navigation-col">
                        <h4>Jawa</h4>
                        <ul>
                          <li><a href="#">Jawa Barat</a></li> 
                        </ul>
                      </div>
                      <div class="col-md-3 header-navigation-col">
                        <h4>Sulawesi</h4>
                        <ul>
                          <li><a href="#">Sulawesi Barat</a></li> 
                          <li><a href="#">Gorontalo</a></li> 
                          <li><a href="#">Sulawesi Selatan</a></li> 
                        </ul>                        
                      </div>
                      <div class="col-md-3 header-navigation-col">
                        <h4>Kalimantan</h4>
                        <ul>
                          <li><a href="#">Selatan</a></li>
                          <li><a href="#">Timur</a></li>
                          <li><a href="#">Utara</a></li>
                        </ul>                        
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="#">Agenda Kegiatan</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Berita               
              </a>                
              <ul class="dropdown-menu">
                <li><a href="#">Regulasi</a></li>
                <li><a href="#">Umum</a></li>                
              </ul>
            </li>
            <li><a href="#">Galeri</a></li> 
            <li><a href="#">Kontak</a></li> 
            

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    @if(\Request::route()->getName() == 'page.index')
        <!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-40">
            <div id="carousel-example-generic" class="carousel slide carousel-slider">
                <!-- Indicators -->
                <ol class="carousel-indicators carousel-indicators-frontend">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="item active" style="background: url({{asset('assets/frontend')}}/pages/img/frontend-slider/slider-apperti.jpg);background-size: cover; background-position: center center;">
                        <div class="container">
                            <div class="carousel-position-seven text-uppercase text-center">
                                <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown">
                                    SEMINAR NASIONAL <br/>                                    
                                </h2>
                                <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">Tantangan PTS di era Digital Dsruption</p>
                                <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Selengkapnya!</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second slide -->
                    <div class="item"  style="background: url({{asset('assets/frontend')}}/pages/img/frontend-slider/bg-15.jpg);background-size: cover; background-position: center center;">
                        <div class="container">
                            <div class="carousel-position-five">
                                <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown">
                                    Need a website design?
                                </h2>
                                <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                    This is what you were looking for
                                </p>
                                <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                    Sed est nunc, sagittis at consectetur id.
                                </p>
                                <a class="carousel-btn-green" href="#" data-animation="animated fadeInUp">Purchase Now!</a>
                            </div>
                        </div>
                    </div>

                    <!-- Third slide -->
                    <div class="item"  style="background: url({{asset('assets/frontend')}}/pages/img/frontend-slider/bg-15.jpg);background-size: cover; background-position: center center;">
                        <div class="container">
                            <div class="carousel-position-six">
                                <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown">
                                    Powerful &amp; Clean
                                </h2>
                                <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                    Responsive Website &amp; Admin Theme
                                </p>
                                <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
                                    Sed est nunc, sagittis at consectetur id.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <!-- END SLIDER -->
    @endif

    @yield('content')

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Tentang APPERTI</h2>
            <p>Mengembangkan serta meningkatkan kemampuan anggota sebagai badan penyelenggara perguruan tinggi Indonesia untuk menyiapkan pelaksanaan kegiatan Tridharma Perguruan Tinggi, dalam rangka menghasilkan peserta didik menjadi manusia Indonesia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, professional, berwawasan kebangsaan, berkepribadian Pancasila serta berdayasaing global.</p>

            <p>Mengembangkan serta meningkatkan kemampuan anggota agar dapat berperan sebagai agen pembangunan terdepan dalam kegiatan Tridharma Perguruan Tinggi serta mengembangkannya, dan menerapkan ilmu pengetahuan, teknologi, seni dan</p>

            <!-- <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img5.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img6.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div> -->

          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Kontak</h2>
            <address class="margin-bottom-40">
             Menara YARSI Kav. 13 Lt. 1<br>
              Jl. Letjen. Suprapto, Cempaka Putih Timur<br>
              Phone: 021 456 78910<br>
              Fax: 021 456 78910<br>
              Email: <a href="#">info@apperti.id</a><br>              
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Langganan</h2>
              <p>Dapatkan berita terbaru APPERTI melalui email</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="email anda" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Langganan</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <div class="photo-stream">
              <h2>Galeri Foto</h2>
              <ul class="list-unstyled">
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/4.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/5.jpg"></a></li>

                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/5.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/4.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/1.jpg"></a></li>

                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/3.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/4.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/2.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/1.jpg"></a></li>
                <li><a href="javascript:;"><img alt="" src="{{asset('assets/frontend')}}/pages/img/5.jpg"></a></li>                
              </ul>                    
            </div>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2018 © APPERTI. ALL Rights Reserved. <a href="javascript:;">Privacy Policy</a> | <a href="javascript:;">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-skype"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-youtube"></i></a></li>
              <li><a href="javascript:;"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.keenthemes.com/">rolloic.com.com</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('assets/frontend')}}/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/frontend')}}/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/frontend')}}/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="{{asset('assets/frontend')}}/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('assets/frontend')}}/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="{{asset('assets/frontend')}}/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="{{asset('assets/frontend')}}/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{asset('assets/frontend')}}/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>