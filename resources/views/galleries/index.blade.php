@extends('layouts.backend.master')
@section('header')
   

@endsection
@section('title')
  Gallery
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Galleries</h2>
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
    </div>
 </div>
@stop


@section('footer')
  
@stop



