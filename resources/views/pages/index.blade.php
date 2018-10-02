@extends('layouts.frontend.master')
@section('og')
    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="Rollo ITC" name="author">

    <meta property="og:site_name" content="{{getOption('site_name')}}">
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="{{getOption('site_name')}}" />
    <meta property="og:description" content="{{getOption('site_description')}}" />
    <meta property="og:image" content="{{asset('/photos/apperti-image.jpg')}}" />
    <meta property="title" content="{{getOption('site_name')}}" />
    <meta name="description" content="{{getOption('site_description')}}" />
@stop
@section('header')
<link href="{{asset('assets/frontend')}}/pages/css/slider.css" rel="stylesheet">
@stop

@section('header_title')
	{{getOption('site_name')}}
@stop
@section('content')
    
    
    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green"></i></em>
              <span>PENGELOLAAN</span>
            </div>
            <p>Mengelola lembaga pendidikan tinggi harus dilakukan dengan prinsip profesionalitas dan memiliki integritas sehingga mampu bersaing di era global..</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red"></i></em>
              <span>PEMBINAAN</span>
            </div>
            <p>Membina lembaga pendidikan agar menjadi institusi terdepan dalam menghasilkan sumberdaya manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span>PENGEMBANGAN</span>
            </div>
            <p>Upaya pengembangan dan pengamalan ilmu pengetahuan, teknologi, seni dan budaya berdasarkan nilai-nilai luhur Pancasila.</p>
          </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9">
            <span>Menjadi anggota APPERTI dan berkontribusi untuk bangsa</span>
          </div>
          <div class="col-md-3 text-right">
            <a class="btn-transparent" href="{{route('page.register')}}"><i class="fa fa-user margin-right-10"></i>DAFTAR</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2><a href="portfolio.html">Agenda Kegiatan</a></h2>
            <p>Kumpulan kegiatan yang diselenggarakan oleh APPERTI bekerjasama dengan pihak-pihak terkait seperti Institusi Pemerintah, Lembaga swasta dan intansi terkait lainnya..</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              @foreach(latestPosts(5,5) as $lp)
              <div class="recent-work-item">
                <em>
                  <img src="{{$lp->thumbnail}}" alt="{{$lp->title}}" class="img-responsive">                  
                </em>
                <a class="recent-work-description" href="{{route('page.single',$lp->slug)}}">
                  <h4>{{$lp->title}}</h4>
                  <b>{{$lp->created_at->format('d M Y')}}</b>
                </a>
              </div>
              @endforeach              
            </div>       
          </div>
        </div>   
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row mix-block margin-bottom-40">
          <!-- TABS -->
          <div class="col-md-7 tab-style-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">Berita</a></li>
              <li><a href="#tab-2" data-toggle="tab">Info Pendidikan</a></li>              
            </ul>
            <div class="tab-content">
              <div class="tab-pane row fade in active" id="tab-1">
                @foreach(latestPosts(1,1) as $berita)
                <div class="col-md-3 col-sm-3">
                  <a href="{{route('page.single',$berita->slug)}}" class="fancybox-button" title="Image Title" data-rel="fancybox-button">
                    <img class="img-responsive" src="{{$berita->thumbnail}}" alt="{{$berita->title}}">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                <a href="#"><h4>{{$berita->title}}</h4></a>
                  <p class="margin-bottom-10">{{$berita->excerpt}}</p>
                  <p><a class="more" href="{{route('page.single',$berita->slug)}}">Selengkapnya <i class="icon-angle-right"></i></a></p>
                </div>
                @endforeach
              </div>
              <div class="tab-pane row fade" id="tab-2">
                <div class="col-md-9 col-sm-9">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                </div>                
              </div>
              <div class="tab-pane fade" id="tab-3">
                <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
              </div>            
            </div>
          </div>
          <!-- END TABS -->
        
          <!-- TESTIMONIALS -->
          <div class="col-md-5 testimonials-v1">
            <div id="myCarousel" class="carousel slide">
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="item">
                  <blockquote><p>APPERTI seperti membawa oase baru di tengah dahaga akademisi terhadap tantangan era digital yang terus menggerus peran perguruan tinggi.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="{{asset('assets/frontend')}}/pages/img/people/rizal-ramli.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">DR. Rizal Ramli</span>
                      <span class="testimonials-post">Mantan Menteri Kemaritiman RI</span>
                    </div>
                  </div>
                </div>               
                <div class="active item">
                  <blockquote><p>APPERTI saya harapkan menjadi motor bagi peningkatan kualitas pendidikan tinggi di Indonesia dengan pengurus yang kompeten dan memiliki komitmen di bidang pendidikan.</p></blockquote>
                  <div class="carousel-info">
                    <img class="pull-left" src="{{asset('assets/frontend')}}/pages/img/people/ary-ginanjar.jpg" alt="">
                    <div class="pull-left">
                      <span class="testimonials-name">Ary Ginanjar</span>
                      <span class="testimonials-post">Pendiri ESQ</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Carousel nav -->
              <a class="left-btn" href="#myCarousel" data-slide="prev"></a>
              <a class="right-btn" href="#myCarousel" data-slide="next"></a>
            </div>
          </div>
          <!-- END TESTIMONIALS -->
        </div>                
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->
       <!--  <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1">
              <h2>Goal definition</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step2">
              <h2>Analyse</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step3">
              <h2>Implementation</h2>
              <p>Lorem ipsum dolor sit amet sit consectetur adipisicing eiusmod tempor.</p>
            </div>
          </div>
        </div> -->
        <!-- END STEPS -->

        <!-- BEGIN CLIENTS -->
        <div class="row margin-bottom-40 our-clients">
          <div class="col-md-3">
            <h2><a href="javascript:;">Mitra APPERTI</a></h2>
            <p>Bekerjasama dengan instansi dan lembaga terkait bidang pendidikan.</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel6-brands">
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/ristekdikti-gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/ristekdikti.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/kemdikbud-gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/kemdikbud.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/aptisi-gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/aptisi.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/sgs-gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/sgs.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/kemnaker-gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/kemnaker.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_6_gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_6.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_7_gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_7.png" class="color-img img-responsive" alt="">
                </a>
              </div>
              <div class="client-item">
                <a href="javascript:;">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_8_gray.png" class="img-responsive" alt="">
                  <img src="{{asset('assets/frontend')}}/pages/img/clients/client_8.png" class="color-img img-responsive" alt="">
                </a>
              </div>                  
            </div>
          </div>          
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>
@stop

@section('footer')
<script>
	$(document).ready(function(){
		$('#sumber_informasi').change(function(){
            alert(1);
			if($(this).val() == 'lainnya'){
				$('#sumberInformasiLainnya').html('<input type="text" class="form-control input-text" name="sumber_informasi_lainnya" placeholder="Tulisakan sumber informasi lainnya">');
			}else{
				$('#sumberInformasiLainnya').html('');
			}
		});
	});
</script>
@stop