@extends('layouts.frontend.master')
@section('header_title')
Terima kasih
@stop
@section('content')

<!-- <div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">				
			<div class="description shadow-large text-center">
				<h3>Terima Kasih </h3>
				<h4>Atas permintaan download Brosur STIKES IMC</h4>
				<h4>Kami juga telah mengirimkan email yang berisi link downloadnya. Jika tidak ada di inbox biasanya masuk folder SPAM dan jangan lupa untuk memindahkan email tersebut ke folder inbox agar kami dapat mengirimkan info-info terkait program yang diadakan di STIKES IMC.</h4>
				<a href="{{url('/')}}{{getOption('file_brosur')}}" class="btn btn-success btn large">Download PDF</a>
			</div>
			</div>
		</div>
	</div>
</div> -->

<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
	<h2 style="color: #fff;">TERIMA KASIH {{$aplikan->nama}}</h2>
		<b class="quote-right wow fadeInDown delay-03 animated" style="visibility: visible; animation-name: fadeInDown;"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05 animated" style="visibility: visible; animation-name: fadeInDown;">Kami telah mengirimkan email yang berisi link downloadnya. </p>
            	<p class="client-part-haead wow fadeInDown delay-05 animated" style="visibility: visible; animation-name: fadeInDown;">Jika tidak ada di inbox biasanya masuk folder SPAM dan jangan lupa untuk memindahkan email tersebut ke folder inbox agar kami dapat mengirimkan info-info terkait program Pascasarjana Institut STIAMI.</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s animated" style="visibility: visible; animation-name: fadeIn;">
        	<div class="text-center"><a href="{{url('/')}}{{getOption('file_brosur')}}" class="link">Download Brosur</a></div>
        </ul>
    </div>
</section>
@stop

@section('footer')

@stop