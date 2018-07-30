@extends('layouts.backend.master')
@section('header')
    
@endsection
@section('title')
  Setting
@stop

@section('content')
  	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Setting</h2>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="{{route('posts.index')}}">General</a>
                </li>                
            </ol>
        </div>
        <div class="col-sm-8">
            
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        @include('settings.includes.menu')
        <div class="row">
        <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Aplikan Options</h5>                      
                    </div>
                    <div class="ibox-content">
                    {!!Form::open(['route' =>'theme.options.update', 'class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}

                        <div class='form-group{{$errors->has('limit_take_aplikan_per_day') ? ' has-error' : ''}}'>
                        
                          {!!Form::label('limit_take_aplikan_per_day','Maksimal Take Aplikan per Hari',['class' => 'col-sm-4 control-label'])!!}
                          <div class="col-sm-8 input-group m-b">
                            {!!Form::input('number','limit_take_aplikan_per_day',getOption('limit_take_aplikan_per_day'),['class' => 'form-control','placeholder' => 'Maksimal Take Aplikan per Hari','required' => 'true'])!!}
                            <span class="input-group-addon">Aplikan</span>
                            @if($errors->has('limit_take_aplikan_per_day'))
                              <span class="help-block">{{$errors->first('limit_take_aplikan_per_day')}}</span>
                            @endif
                          </div>
                        </div>

                         <div class='form-group{{$errors->has('is_presenter_can_take_aplikan') ? ' has-error' : ''}}'>
                        
                          {!!Form::label('is_presenter_can_take_aplikan','Aplikan bisa ditake presenter',['class' => 'col-sm-4 control-label'])!!}
                          <div class="col-sm-8 input-group m-b">
                            {!!Form::select('is_presenter_can_take_aplikan',['1' => 'Ya','0' =>'Tidak'],getOption('is_presenter_can_take_aplikan'),['class' => 'form-control','placeholder' => 'Aplikan bisa ditake presenter','required' => 'true'])!!}                            
                            @if($errors->has('is_presenter_can_take_aplikan'))
                              <span class="help-block">{{$errors->first('is_presenter_can_take_aplikan')}}</span>
                            @endif
                          </div>
                        </div>                                            
                        <input type="submit" class="btn btn-primary" value="Save">
                    {!!Form::close()!!}
                        
                </div>
            </div>
        </div>
	</div>
@stop

@section('footer')   

<script>
        
    </script>
@endsection
