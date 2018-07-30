<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Pascasarjana Institut STIAMI</title>
@yield('og')
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="{{url('/')}}/assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/assets/frontend/css/style.css?ver=3" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/assets/frontend/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/assets/frontend/css/responsive.css?ver=4" rel="stylesheet" type="text/css">
<link href="{{url('/')}}/assets/frontend/css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/bootstrap.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/jquery.isotope.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/wow.js"></script>
<script type="text/javascript" src="{{url('/')}}/assets/frontend/js/classie.js"></script>

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '164222207587151');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=164222207587151&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<body>

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
    <div class="main-nav"></div>
        <ul class="main-nav">        	
            <li class="small-logo"><a href="http://s2.stiami.ac.id"><img src="{{url('/')}}/assets/frontend/img/small-logo-min.png" alt=""></a></li>
            
            <li style="font-size: 20px;font-weight: bold;"><a href="http://s2.stiami.ac.id">Pascasarjana Institut STIAMI</a></li>
        </ul>
        <!-- <a class="res-nav_click" href="#"><i class="fa-bars"></i></a> -->
    </div>
</nav><!--main-nav-end-->
@if(!\Request::route()->getName() == 'sukses')
<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2 style="margin-bottom: 20px;">@yield('header_title')</h2>
    </div>
</section><!--business-talking-end-->
@endif

	@yield('content')

<footer class="footer">
    <div class="container">        
      @if(\Auth::check())
      <span class="copyright"><a href="{{route('dashboard.index')}}">Ke halaman Dashboard</a></span>
      @endif
        <!-- <span class="copyright">&copy; Knight Theme. All Rights Reserved</span>
        <div class="credits">
            
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
           
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
</footer>

@yield('footer')
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>