@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Edit {{$university->name}}</h2>
       <ol class="breadcrumb">
          <li>
              <a href="{{route('universities.index')}}">Universities</a>
          </li>          
          <li>
              <a href="{{route('universities.edit',$university)}}">Edit</a>
          </li>          
      </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Edit University</h5>          
      </div>
      <div class="ibox-content no-padding">        
            {!!Form::open(['route' =>['universities.update',$university],'method' => 'PATCH', 'class' => 'form-horizontal'])!!}
              <div class="form-group{{$errors->has("name") ? " has-error" : ""}}">
                      {!!Form::label("name","Name",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("name",$university->name,["class" => "form-control","placeholder" => "Name"])!!}
                        @if($errors->has("name"))
                          <span class="help-block">{{$errors->first("name")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("rektor_name") ? " has-error" : ""}}">
                      {!!Form::label("rektor_name","Rektor_name",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("rektor_name",$university->rektor_name,["class" => "form-control","placeholder" => "Rektor_name"])!!}
                        @if($errors->has("rektor_name"))
                          <span class="help-block">{{$errors->first("rektor_name")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("phone") ? " has-error" : ""}}">
                      {!!Form::label("phone","Phone",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("phone",$university->phone,["class" => "form-control","placeholder" => "Phone"])!!}
                        @if($errors->has("phone"))
                          <span class="help-block">{{$errors->first("phone")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("website_url") ? " has-error" : ""}}">
                      {!!Form::label("website_url","Website_url",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("website_url",$university->website_url,["class" => "form-control","placeholder" => "Website_url"])!!}
                        @if($errors->has("website_url"))
                          <span class="help-block">{{$errors->first("website_url")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("address") ? " has-error" : ""}}">
                      {!!Form::label("address","Address",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("address",$university->address,["class" => "form-control","placeholder" => "Address"])!!}
                        @if($errors->has("address"))
                          <span class="help-block">{{$errors->first("address")}}</span>
                        @endif
                      </div>
                    </div>
                    
              <input type="submit" class="btn btn-primary" value="Update">
            {!!Form::close()!!}          
      </div>
  </div>   
</div>

@stop