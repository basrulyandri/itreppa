@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Tambah data anggota</h2>
       <ol class="breadcrumb">
          <li>
              <a href="{{route('anggota.index')}}">Anggota</a>
          </li>   
      </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Edit data pribadi Anggota</h5>          
        </div>
        <div class="ibox-content">        
            

          <div class="row">
            <div class="col-md-6">
              <h3 class="text-center">Data Pribadi</h3>
              {!!Form::open(['route' =>'anggota.store', 'class' => 'form-horizontal'])!!}
              <input type="hidden" name="role_id" value="3">
              <div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
                {!!Form::label('first_name','Nama Depan',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('first_name',old('first_name'),['class' => 'form-control','placeholder' => 'Nama Depan','required' => 'true'])!!}
                  @if($errors->has('first_name'))
                  <span class="help-block">{{$errors->first('first_name')}}</span>
                  @endif
                </div>
              </div>

              <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
                {!!Form::label('last_name','Nama Belakang',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('last_name',old('last_name'),['class' => 'form-control','placeholder' => 'Nama Belakang','required' => 'true'])!!}
                  @if($errors->has('last_name'))
                  <span class="help-block">{{$errors->first('last_name')}}</span>
                  @endif
                </div>
              </div>
              <div class='form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}'>
                {!!Form::label('jenis_kelamin','Jenis Kelamin',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::select('jenis_kelamin',['L' => 'Laki-laki','P' => 'Perempuan'],old('jenis_kelamin'),['class' => 'form-control'])!!}
                  @if($errors->has('jenis_kelamin'))
                  <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                  @endif
                </div>
              </div>

              <div class="form-group{{$errors->has("email") ? " has-error" : ""}}">
                {!!Form::label("email","Email",["class" => "col-sm-2 control-label"])!!}
                <div class="col-sm-10">
                  {!!Form::text("email",old('email'),["class" => "form-control","placeholder" => "Email"])!!}
                  @if($errors->has("email"))
                  <span class="help-block">{{$errors->first("email")}}</span>
                  @endif
                </div>
              </div>

              <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
                {!!Form::label('phone','Telpon',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('phone',old('phone'),['class' => 'form-control','placeholder' => 'Telpon'])!!}
                  @if($errors->has('phone'))
                  <span class="help-block">{{$errors->first('phone')}}</span>
                  @endif
                </div>
              </div>  

              <div class='form-group{{$errors->has('agama') ? ' has-error' : ''}}'>
                {!!Form::label('agama','Agama',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('agama',old('agama'),['class' => 'form-control','placeholder' => 'Agama','required' => 'true'])!!}
                  @if($errors->has('agama'))
                  <span class="help-block">{{$errors->first('agama')}}</span>
                  @endif
                </div>
              </div>



              <div class='form-group{{$errors->has('address') ? ' has-error' : ''}}'>
                {!!Form::label('address','Alamat',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::textarea('address',old('address'),['class' => 'form-control','placeholder' => 'Alamat'])!!}
                  @if($errors->has('address'))
                  <span class="help-block">{{$errors->first('address')}}</span>
                  @endif
                </div>
              </div>

            </div>

            <div class="col-md-6 form-horizontal">
              <h3 class="text-center">Data Yayasan dan Perguruan tinggi</h3>
              <div class='form-group{{$errors->has('yayasan_name') ? ' has-error' : ''}}'>
                {!!Form::label('yayasan_name','Nama Yayasan',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('yayasan_name',old('yayasan_name'),['class' => 'form-control','placeholder' => 'Nama Yayasan','required' => 'true'])!!}
                  @if($errors->has('yayasan_name'))
                    <span class="help-block">{{$errors->first('yayasan_name')}}</span>
                  @endif
                </div>
              </div>

              <div class='form-group{{$errors->has('university_name') ? ' has-error' : ''}}'>
               {!!Form::label('university_name','Nama Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
               <div class="col-sm-10">
                 {!!Form::text('university_name',old('university_name'),['class' => 'form-control','placeholder' => 'Nama Perguruan Tinggi','required' => 'true'])!!}
                 @if($errors->has('university_name'))
                 <span class="help-block">{{$errors->first('university_name')}}</span>
                 @endif
               </div>
             </div>

             <div class='form-group{{$errors->has('rektor_name') ? ' has-error' : ''}}'>
              {!!Form::label('rektor_name','Nama Rektor',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('rektor_name',old('rektor_name'),['class' => 'form-control','placeholder' => 'Nama Rektor','required' => 'true'])!!}
                @if($errors->has('rektor_name'))
                <span class="help-block">{{$errors->first('rektor_name')}}</span>
                @endif
              </div>
            </div>                     

            <div class='form-group{{$errors->has('university_phone') ? ' has-error' : ''}}'>
              {!!Form::label('university_phone','Telpon',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('university_phone',old('university_phone'),['class' => 'form-control','placeholder' => 'Telpon','required' => 'true'])!!}
                @if($errors->has('university_phone'))
                <span class="help-block">{{$errors->first('university_phone')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('website_url') ? ' has-error' : ''}}'>
              {!!Form::label('website_url','Website',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('website_url',old('website_url'),['class' => 'form-control','placeholder' => 'Website'])!!}
                @if($errors->has('website_url'))
                  <span class="help-block">{{$errors->first('website_url')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('university_address') ? ' has-error' : ''}}'>
              {!!Form::label('university_address','Alamat Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::textarea('university_address',old('university_address'),['class' => 'form-control','placeholder' => 'Alamat Perguruan Tinggi'])!!}
                @if($errors->has('university_address'))
                <span class="help-block">{{$errors->first('university_address')}}</span>
                @endif
              </div>
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-md-12">
              <input type="submit" class="btn btn-primary pull-right" value="Simpan">            
          </div>
          </div>
    </div>       
  </div>
</div>

@stop