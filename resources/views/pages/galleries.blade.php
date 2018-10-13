@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="Gallery | {{config('app.name')}}" />
    <meta property="og:description" content="Gallery | {{config('app.name')}}" />
    <meta property="og:image" content="" />
    <meta name="description" content="" />
@stop
@section('content')

<div class="main">
	<div class="container">
		<div class="row margin-bottom-40">
			<div class="col-md-12 col-sm-12">
            	<div class="col-md-12">
            <h1>Gallery</h1>
            <div class="content-page">
              <div class="row margin-bottom-40">
              	@foreach($albums as $album)
              	@if(!$album->images->isEmpty())
                <div class="col-md-3 col-sm-4 gallery-item">
                  <a href="{{route('page.album.single',$album->slug)}}" title="Project Name" href="assets/pages/img/works/img1.jpg" class="fancybox-button">
                    <img alt="" src="{{$album->thumbnail()}}" class="img-responsive" alt="{{$album->name}}">
                    <h3>{{$album->name}}</h3>                    
                  </a> 
                </div>                     
                @endif
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