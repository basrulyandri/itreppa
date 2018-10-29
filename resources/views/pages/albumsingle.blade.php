@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="Gallery Album {{$album->name}}| {{config('app.name')}}" />
    <meta property="og:description" content="Gallery Album {{$album->name}}| {{config('app.name')}}" />
    <meta property="og:image" content="" />
    <meta name="description" content="" />
@stop
@section('header_title')
  Album Foto  {{$album->name}}
@stop
@section('header')
  <link href="{{asset('/assets/frontend/pages/css/gallery.css')}}" rel="stylesheet">
@stop
@section('content')

<div class="main">
	<div class="container">
		<div class="row margin-bottom-40">
			<div class="col-md-12 col-sm-12">
            	<div class="col-md-12">
            <h1>Album {{$album->name}}</h1>
            <div class="content-page">
              <div class="row margin-bottom-40">
              	@foreach($album->images as $image)
                <div class="col-md-3 col-sm-4 gallery-item">                  
                  <a data-rel="fancybox-button" title="{{$image->name}}" href="{{$image->path}}" class="fancybox-button">
                    <img alt="" src="{{$image->thumbnail()}}" class="img-responsive">
                    <div class="zoomix"><i class="fa fa-search"></i></div>                    
                  </a> 
                </div>                     
                @endforeach  
              </div>
            </div>
          </div>
          	</div>				
		</div>
	</div>
</div>
@stop

@section('footer')

@stop