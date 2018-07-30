@extends('layouts.backend.master')
@section('header')
  
@endsection
@section('title')
  Users
@stop

@section('content')
  	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Users</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('users.index')}}">Users</a>
                </li> 
                <li class="active">
                    <a href="{{\Request::url()}}">add</a>
                </li>                
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{route('user.add')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">                            
                            <div class="ibox-tools">
                                <a class="collapse-link binded">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link binded">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            {!!Form::open(['route' =>'user.create', 'class' => 'form-horizontal','enctype' => 'multipart/form-data'])!!}
          <div class="box-body">
            <div class='form-group{{$errors->has('username') ? ' has-error' : ''}}'>
              {!!Form::label('username','Username',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('username',old('username'),['class' => 'form-control','placeholder' => 'Username'])!!}
                @if($errors->has('username'))
                  <span class="help-block">{{$errors->first('username')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
              {!!Form::label('first_name','First Name',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('first_name',old('first_name'),['class' => 'form-control','placeholder' => 'First Name'])!!}
                @if($errors->has('first_name'))
                  <span class="help-block">{{$errors->first('first_name')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
              {!!Form::label('last_name','Last Name',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('last_name',old('last_name'),['class' => 'form-control','placeholder' => 'Last Name'])!!}
                @if($errors->has('last_name'))
                  <span class="help-block">{{$errors->first('last_name')}}</span>
                @endif
              </div>
            </div>
            
            <div class='form-group{{$errors->has('email') ? ' has-error' : ''}}'>
              {!!Form::label('email','Email',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::email('email',old('email'),['class' => 'form-control','placeholder' => 'Email'])!!}
                @if($errors->has('email'))
                  <span class="help-block">{{$errors->first('email')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('role_id') ? ' has-error' : ''}}'>
              {!!Form::label('role_id','Role',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::select('role_id',$roles,old('role_id'),['class' => 'form-control'])!!}
                @if($errors->has('role_id'))
                  <span class="help-block">{{$errors->first('role_id')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('password') ? ' has-error' : ''}}'>
              {!!Form::label('password','Password',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::password('password',['class' => 'form-control','placeholder' => 'Password'])!!}
                @if($errors->has('password'))
                  <span class="help-block">{{$errors->first('password')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('password_confirmation') ? ' has-error' : ''}}'>
              {!!Form::label('password_confirmation','Password Confirmation',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Password Confirmation'])!!}
                @if($errors->has('password_confirmation'))
                  <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
                {!!Form::label('phone','Phone',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('phone',old('phone'),['class' => 'form-control','placeholder' => 'Phone','required' => 'true'])!!}
                  @if($errors->has('phone'))
                    <span class="help-block">{{$errors->first('phone')}}</span>
                  @endif
                </div>
            </div>

            <div class='form-group{{$errors->has('about') ? ' has-error' : ''}}'>
                {!!Form::label('about','About User',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::textarea('about',old('about'),['class' => 'form-control','placeholder' => 'About User'])!!}
                  @if($errors->has('about'))
                    <span class="help-block">{{$errors->first('about')}}</span>
                  @endif
                </div>
            </div>

            <div class='form-group{{$errors->has('facebook_url') ? ' has-error' : ''}}'>
                {!!Form::label('facebook_url','Facebook URL',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('facebook_url',old('facebook_url'),['class' => 'form-control','placeholder' => 'Facebook URL'])!!}
                  @if($errors->has('facebook_url'))
                    <span class="help-block">{{$errors->first('facebook_url')}}</span>
                  @endif
                </div>
            </div>

            <div class='form-group{{$errors->has('twitter_url') ? ' has-error' : ''}}'>
                {!!Form::label('twitter_url','Twitter URL',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('twitter_url',old('twitter_url'),['class' => 'form-control','placeholder' => 'Twitter URL'])!!}
                  @if($errors->has('twitter_url'))
                    <span class="help-block">{{$errors->first('twitter_url')}}</span>
                  @endif
                </div>
            </div>

            <div class='form-group{{$errors->has('google_plus_url') ? ' has-error' : ''}}'>
                {!!Form::label('google_plus_url','Google+ URL',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('google_plus_url',old('google_plus_url'),['class' => 'form-control','placeholder' => 'Google+ URL'])!!}
                  @if($errors->has('google_plus_url'))
                    <span class="help-block">{{$errors->first('google_plus_url')}}</span>
                  @endif
                </div>
            </div>
            
            <div class="form-group">
              {!!Form::label('photo','Photo',['class' => 'col-sm-2 control-label'])!!}
              <div class="input-group col-sm-10">
                 <span class="input-group-btn">
                   <a id="uploadPhoto" data-input="photo" data-preview="holder" class="btn btn-primary">
                     <i class="fa fa-picture-o"></i> Choose
                   </a>
                 </span>
                 <input id="photo" class="form-control" type="text" name="photo">
               </div>
              <div class="col-sm-2 col-sm-offset-2">
                <img src="{{url('assets/backend')}}/img/no-thumbnail.jpg" id="holder" style="margin-top:15px;width:100%"> 
              </div>
            </div>            
            

          </div><!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info pull-right">Save</button>
          </div><!-- /.box-footer -->
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
      $('#uploadPhoto').filemanager('image', {prefix: domain});
  });
</script>

@endsection
