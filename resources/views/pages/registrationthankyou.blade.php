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
	Pendaftaran Anggota APPERTI
@stop
@section('content')
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('page.index')}}">Home</a></li>            
            <li class="active">Daftar</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1 class="text-center">TERIMA KASIH</h1>
            <div class="content-page">
              	<div class="row" style="margin-top: 60px;">
                	<h3 class="text-center">Pendaftaran anda berhasil dikirim.</h3>
	            </div>
	        </div>
			</div>
		</div>
		
                 
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