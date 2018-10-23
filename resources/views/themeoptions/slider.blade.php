@extends('layouts.backend.master')
@section('header')

@endsection
@section('title')
Slider | Theme Options
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Theme Options</h2>
    <ol class="breadcrumb">
      <li class="active">
        <a href="{{route('posts.index')}}">Slider</a>
      </li>                
    </ol>
  </div>
  <div class="col-sm-8">

  </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
  @include('themeoptions.includes.menu')
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Slider Options</h5>                      
        </div>
        <div class="ibox-content">
          {!!Form::open(['route' =>'theme.options.update', 'class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}               

          <div class="row">
            <div class="col-lg-12">
              <div class="tabs-container">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#tab-1"> Slider 1</a></li>
                  <li class=""><a data-toggle="tab" href="#tab-2">Slider 2</a></li>
                </ul>

                <div class="tab-content">
                  <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                     <div class="row">
                       <div class="col-lg-8">
                        <div class='form-group'>
                          {!!Form::label('theme_option_slider_1_image','Gambar Slider',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a data-input="theme_option_slider_1_image" data-preview="theme_option_slider_1_image_holder" class="btn btn-primary uploadbutton">
                                 <i class="fa fa-picture-o"></i> Choose
                                </a>
                              </span>
                             <input id="theme_option_slider_1_image" class="form-control" type="text" name="theme_option_slider_1_image" value="{{getOption('theme_option_slider_1_image')}}">
                            </div>
                            <div class="alert alert-warning">                                          
                              Rekomendasi : Untuk gambar untuk slider berukuran 1920 x 445 px
                            </div>
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_1_title') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_1_title','Judul',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_1_title',old('theme_option_slider_1_title'),['class' => 'form-control','placeholder' => 'Judul'])!!}
                            @if($errors->has('theme_option_slider_1_title'))
                            <span class="help-block">{{$errors->first('theme_option_slider_1_title')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_1_subtitle') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_1_subtitle','Sub Judul',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_1_subtitle',old('theme_option_slider_1_subtitle'),['class' => 'form-control','placeholder' => 'Sub Judul'])!!}
                            @if($errors->has('theme_option_slider_1_subtitle'))
                            <span class="help-block">{{$errors->first('theme_option_slider_1_subtitle')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_1_button_text') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_1_button_text','Label Tombol',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_1_button_text',old('theme_option_slider_1_button_text'),['class' => 'form-control','placeholder' => 'Label Tombol'])!!}
                            @if($errors->has('theme_option_slider_1_button_text'))
                            <span class="help-block">{{$errors->first('theme_option_slider_1_button_text')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_1_button_link') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_1_button_link','Link URL',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_1_button_link',old('theme_option_slider_1_button_link'),['class' => 'form-control','placeholder' => 'Link URL'])!!}
                            @if($errors->has('theme_option_slider_1_button_link'))
                            <span class="help-block">{{$errors->first('theme_option_slider_1_button_link')}}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <img src="{{getOption('theme_option_slider_1_image')}}" id="theme_option_slider_1_image_holder" style="width:100%;">
                      </div>
                        </div>
                    </div>
                  </div>
                  <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                     <div class="row">
                       <div class="col-lg-8">
                        <div class='form-group'>
                          {!!Form::label('theme_option_slider_2_image','Gambar Slider',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            <div class="input-group">
                              <span class="input-group-btn">
                                <a data-input="theme_option_slider_2_image" data-preview="theme_option_slider_2_image_holder" class="btn btn-primary uploadbutton">
                                 <i class="fa fa-picture-o"></i> Choose
                                </a>
                              </span>
                             <input id="theme_option_slider_2_image" class="form-control" type="text" name="theme_option_slider_2_image" value="{{getOption('theme_option_slider_2_image')}}">
                            </div>
                            <div class="alert alert-warning">                                          
                              Rekomendasi : Untuk gambar untuk slider berukuran 1920 x 445 px
                            </div>
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_2_title') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_2_title','Judul',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_2_title',old('theme_option_slider_2_title'),['class' => 'form-control','placeholder' => 'Judul'])!!}
                            @if($errors->has('theme_option_slider_2_title'))
                            <span class="help-block">{{$errors->first('theme_option_slider_2_title')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_2_subtitle') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_2_subtitle','Sub Judul',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_2_subtitle',old('theme_option_slider_2_subtitle'),['class' => 'form-control','placeholder' => 'Sub Judul'])!!}
                            @if($errors->has('theme_option_slider_2_subtitle'))
                            <span class="help-block">{{$errors->first('theme_option_slider_2_subtitle')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_2_button_text') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_2_button_text','Label Tombol',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_2_button_text',old('theme_option_slider_2_button_text'),['class' => 'form-control','placeholder' => 'Label Tombol'])!!}
                            @if($errors->has('theme_option_slider_2_button_text'))
                            <span class="help-block">{{$errors->first('theme_option_slider_2_button_text')}}</span>
                            @endif
                          </div>
                        </div>

                        <div class='form-group{{$errors->has('theme_option_slider_2_button_link') ? ' has-error' : ''}}'>
                          {!!Form::label('theme_option_slider_2_button_link','Link URL',['class' => 'col-sm-2 control-label'])!!}
                          <div class="col-sm-10">
                            {!!Form::text('theme_option_slider_2_button_link',old('theme_option_slider_2_button_link'),['class' => 'form-control','placeholder' => 'Link URL'])!!}
                            @if($errors->has('theme_option_slider_2_button_link'))
                            <span class="help-block">{{$errors->first('theme_option_slider_2_button_link')}}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <img src="{{getOption('theme_option_slider_2_image')}}" id="theme_option_slider_2_image_holder" style="width:100%;">
                      </div>
                        </div>
                    </div>
                  </div>
                </div>

              </div>
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
<script src="{{url('assets/backend')}}/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{url('/')}}/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
  $(document).ready(function() {   
    var domain = "{{url('/')}}/admin/rollo-filemanager";         
    $('.uploadbutton').filemanager('image', {prefix: domain});
  });
</script>
@endsection
