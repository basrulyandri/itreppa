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
                        <h5>General Options</h5>                      
                    </div>
                    <div class="ibox-content">
                    {!!Form::open(['route' =>'theme.options.update', 'class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}
                    
                        <div class='form-group{{$errors->has('app_is_active') ? ' has-error' : ''}}'>
                          {!!Form::label('app_is_active','Aplikasi Aktif',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::select('app_is_active',['1' => 'Ya','0' =>'Tidak'],getOption('app_is_active'),['class' => 'form-control','placeholder' => 'Aplikasi Aktif','required' => 'true'])!!}                            
                            @if($errors->has('app_is_active'))
                              <span class="help-block">{{$errors->first('app_is_active')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('site_name') ? ' has-error' : ''}}'>
                         {!!Form::label('site_name','Site Name',['class' => 'col-sm-2 control-label'])!!}
                         <div class="col-sm-10">
                           {!!Form::text('site_name',getOption('site_name'),['class' => 'form-control','placeholder' => 'Site Name'])!!}
                           @if($errors->has('site_name'))
                             <span class="help-block">{{$errors->first('site_name')}}</span>
                           @endif
                         </div>
                       </div> 

                       <div class='form-group{{$errors->has('site_description') ? ' has-error' : ''}}'>
                           {!!Form::label('site_description','Site Description',['class' => 'col-sm-2 control-label'])!!}
                           <div class="col-sm-10">
                             {!!Form::text('site_description',getOption('site_description'),['class' => 'form-control','placeholder' => 'Site Description'])!!}
                             @if($errors->has('site_description'))
                               <span class="help-block">{{$errors->first('site_description')}}</span>
                             @endif
                           </div>
                         </div>                          
                        
                        <input type="submit" class="btn btn-primary" value="Save">
                    {!!Form::close()!!}
                        
                    </div>                    
                </div>
            </div>
        </div>
	</div>
@stop

@section('footer')   

<script>
        
    </script>
@endsection
