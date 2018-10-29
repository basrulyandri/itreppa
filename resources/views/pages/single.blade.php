@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="{{$post->title}} | Pascasarjana Institut STIAMI" />
    <meta property="og:description" content="{{$post->excerpt}}" />
    <meta property="og:image" content="{{url('/')}}{{$post->thumbnail}}" />
    <meta name="description" content="{{$post->excerpt}}" />
@stop
@section('content')

<div class="main">
	<div class="container">
		<div class="row margin-bottom-40">
			<div class="col-md-12 col-sm-12">
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-item">
            		<h1>{{$post->title}}</h1>
                  @if($post->type == 'post')
                  <ul class="blog-info">
                    <li><i class="fa fa-user"></i>oleh {{$post->user->username}}</li>
                    <li><i class="fa fa-calendar"></i> {{$post->published_at->format('d M Y')}}</li>
                  </ul>                  
                  <div class="blog-item-img">
                   <img src="{{$post->thumbnail}}" alt="">        
                  </div>
                  @endif
                  
                  {!!$post->body!!}
                </div>                                                      
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
                  
					       @include('layouts.frontend.sidebar')
                </div>
                <!-- END RIGHT SIDEBAR -->            
              </div>
            </div>
          </div>

				
				</div>
	</div>
</div>
@stop

@section('footer')

@stop