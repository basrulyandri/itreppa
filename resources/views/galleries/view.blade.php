@extends('layouts.backend.master')
@section('header')
   <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/plugins/dropzone/dropzone.min.css')}}">

@endsection
@section('title')
  Gallery
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Album</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('galleries.index')}}">Galleries</a>
            </li>                
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Albums </h5>                
            </div>
            <div class="ibox-content">
                {!!Form::open(['route' =>'post.ajax.gallery.upload', 'class' => 'dropzone'])!!}
                    
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
    </div>
    </div>
 </div>
@stop


@section('footer')
  <script type="text/javascript" src="{{asset('assets/backend/js/plugins/dropzone/dropzone.min.js')}}"></script>
@stop



