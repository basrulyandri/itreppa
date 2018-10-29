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
  <title>{{getOption('site_name')}} | @yield('header_title')</title>

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
                        <li><i class="fa fa-phone"></i><span>{{getOption('theme_option_hotline')}}</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>{{getOption('theme_option_email')}}</span></li>
                        <li><a href="{{getOption('theme_option_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{getOption('theme_option_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{getOption('theme_option_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{getOption('theme_option_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="{{route('auth.login')}}">Log In</a></li>
                        <li><a href="{{route('page.register')}}">Daftar</a></li>
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
        <a class="site-logo" href="{{route('page.index')}}"><img src="{{getOption('theme_option_logo')}}" alt="{{getOption('site_name')}} | {{getOption('site_description')}}"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul class="menu fading">
          <li><a href="{{route('page.index')}}">Home</a></li>             
          @foreach(\Menu::getByName('Top') as $menu)
            <li @if(!empty($menu['child'])) class="dropdown" @endif>
              <a @if(!empty($menu['child']))class="dropdown-toggle" data-toggle="dropdown"@endif href="@if(!empty($menu['child']))javascript:;@else{{url('/')}}/{{$menu['link']}}@endif">{{\Harimayco\Menu\Models\MenuItems::find($menu['id'])->label}}</a>
              @if(!empty($menu['child']))
              <ul class="dropdown-menu">
                @foreach($menu['child'] as $child)
                  <li {{(!empty($child['child'])) ? 'class="dropdown-submenu"' : ''}}>
                  <a href="{{url('/')}}/{{$child['link']}}">
                    {{\Harimayco\Menu\Models\MenuItems::find($child['id'])->label}}</a>
                    @if(!empty($child['child'])) <i class="fa fa-angle-right"></i>@endif
                  </a>
                  @if(!empty($child['child']))
                    <ul class="dropdown-menu">
                      @foreach($child['child'] as $child2)
                        <li><a href="{{url('/')}}/{{$child2['link']}}">{{\Harimayco\Menu\Models\MenuItems::find($child2['id'])->label}}</a></a></li>
                      @endforeach
                    </ul>                   
                  @endif
                  </li>
                @endforeach
              </ul> 
              @endif
            </li>
          @endforeach         
        </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    @if(\Request::route()->getName() == 'page.index')
        @include('layouts.frontend._slider')
    @endif

    @yield('content')

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Tentang APPERTI</h2>
            <p style="text-align: justify;">{{getOption('theme_option_about')}}</p>

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
             {{getOption('theme_option_address')}}<br>
              Telpon: {{getOption('theme_option_hotline')}}<br>              
              Email: <a href="mailto:{{getOption('theme_option_email')}}">{{getOption('theme_option_email')}}</a><br>              
            </address>

            
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <div class="photo-stream">
              <h2>Galeri Foto</h2>
              <ul class="list-unstyled">
                @foreach(\App\Image::inRandomOrder()->take(15)->get() as $footerimage)
                  @if(!$footerimage->albums->isEmpty())
                  <li><a href="{{route('page.album.single',$footerimage->albums()->first()->slug)}}"><img alt="" src="{{$footerimage->thumbnail()}}"></a></li>
                  @endif
                @endforeach                
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
            2018 © {{config('app.name')}}. ALL Rights Reserved
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline pull-right">
             <li><a href="{{getOption('theme_option_facebook_url')}}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{getOption('theme_option_instagram_url')}}"><i class="fa fa-instagram"></i></a></li>
              <li><a href="{{getOption('theme_option_twitter_url')}}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{getOption('theme_option_youtube_url')}}"><i class="fa fa-youtube"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="http://www.keenthemes.com/">rolloic.com</a></p>
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

    @yield('footer')
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>