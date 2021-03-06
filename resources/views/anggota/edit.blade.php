@extends('layouts.backend.master')
@section('title')
Edit Anggota
@stop
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Edit {{$anggota->fullName()}}</h2>
       <ol class="breadcrumb">
          <li>
              <a href="{{route('anggota.index')}}">Anggota</a>
          </li>          
          <li>
              <a href="{{route('anggota.edit',$anggota)}}">Edit</a>
          </li>          
      </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content">
  <div class="col-md-6">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Edit data pribadi Anggota</h5>          
        </div>
        <div class="ibox-content">        
              {!!Form::open(['route' =>['anggota.update',$anggota],'method' => 'PATCH', 'class' => 'form-horizontal'])!!}
                      <div class="form-group{{$errors->has("email") ? " has-error" : ""}}">
                        {!!Form::label("email","Email",["class" => "col-sm-2 control-label"])!!}
                        <div class="col-sm-10">
                          {!!Form::text("email",$anggota->email,["class" => "form-control","placeholder" => "Email"])!!}
                          @if($errors->has("email"))
                            <span class="help-block">{{$errors->first("email")}}</span>
                          @endif
                        </div>
                      </div>
                      <div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
                        {!!Form::label('first_name','Nama Depan',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::text('first_name',$anggota->profile->first_name,['class' => 'form-control','placeholder' => 'Nama Depan','required' => 'true'])!!}
                          @if($errors->has('first_name'))
                            <span class="help-block">{{$errors->first('first_name')}}</span>
                          @endif
                        </div>
                      </div>

                      <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
                        {!!Form::label('last_name','Nama Belakang',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::text('last_name',$anggota->profile->last_name,['class' => 'form-control','placeholder' => 'Nama Belakang','required' => 'true'])!!}
                          @if($errors->has('last_name'))
                            <span class="help-block">{{$errors->first('last_name')}}</span>
                          @endif
                        </div>
                      </div>

                      <div class='form-group{{$errors->has('agama') ? ' has-error' : ''}}'>
                        {!!Form::label('agama','Agama',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::text('agama',$anggota->profile->agama,['class' => 'form-control','placeholder' => 'Agama','required' => 'true'])!!}
                          @if($errors->has('agama'))
                            <span class="help-block">{{$errors->first('agama')}}</span>
                          @endif
                        </div>
                      </div>

                      <div class='form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}'>
                        {!!Form::label('jenis_kelamin','Jenis Kelamin',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::select('jenis_kelamin',['L' => 'Laki-laki','P' => 'Perempuan'],$anggota->profile->jenis_kelamin,['class' => 'form-control'])!!}
                          @if($errors->has('jenis_kelamin'))
                            <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                          @endif
                        </div>
                      </div>
                      <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
                        {!!Form::label('phone','Telpon',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::text('phone',$anggota->profile->phone,['class' => 'form-control','placeholder' => 'Telpon'])!!}
                          @if($errors->has('phone'))
                            <span class="help-block">{{$errors->first('phone')}}</span>
                          @endif
                        </div>
                      </div>  
                      <div class='form-group{{$errors->has('address') ? ' has-error' : ''}}'>
                        {!!Form::label('address','Alamat',['class' => 'col-sm-2 control-label'])!!}
                        <div class="col-sm-10">
                          {!!Form::textarea('address',$anggota->profile->address,['class' => 'form-control','placeholder' => 'Alamat'])!!}
                          @if($errors->has('address'))
                            <span class="help-block">{{$errors->first('address')}}</span>
                          @endif
                        </div>
                      </div>

                      
        </div>
    </div>       
  </div>

  <duv class="col-md-6">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Edit data Yayasan dan Perguruan tinggi</h5>          
        </div>
        <div class="ibox-content form-horizontal">        
          <div class='form-group{{$errors->has('yayasan_name') ? ' has-error' : ''}}'>
                {!!Form::label('yayasan_name','Nama Yayasan',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('yayasan_name',$anggota->profile->university->yayasan_name,['class' => 'form-control','placeholder' => 'Nama Yayasan','required' => 'true'])!!}
                  @if($errors->has('yayasan_name'))
                    <span class="help-block">{{$errors->first('yayasan_name')}}</span>
                  @endif
                </div>
              </div>

              <div class='form-group{{$errors->has('jabatan_di_yayasan') ? ' has-error' : ''}}'>
                {!!Form::label('jabatan_di_yayasan','Jabatan di Yayasan',['class' => 'col-sm-2 control-label'])!!}
                <div class="col-sm-10">
                  {!!Form::text('jabatan_di_yayasan',$anggota->profile->jabatan_di_yayasan,['class' => 'form-control','placeholder' => 'Jabatan di Yayasan'])!!}
                  @if($errors->has('jabatan_di_yayasan'))
                    <span class="help-block">{{$errors->first('jabatan_di_yayasan')}}</span>
                  @endif
                </div>
              </div>

              <div class='form-group{{$errors->has('university_name') ? ' has-error' : ''}}'>
               {!!Form::label('university_name','Nama Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
               <div class="col-sm-10">
                 {!!Form::text('university_name',$anggota->profile->university->name,['class' => 'form-control','placeholder' => 'Nama Perguruan Tinggi','required' => 'true'])!!}
                 @if($errors->has('university_name'))
                 <span class="help-block">{{$errors->first('university_name')}}</span>
                 @endif
               </div>
             </div>

             <div class='form-group{{$errors->has('rektor_name') ? ' has-error' : ''}}'>
              {!!Form::label('rektor_name','Nama Rektor',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('rektor_name',$anggota->profile->university->rektor_name,['class' => 'form-control','placeholder' => 'Nama Rektor','required' => 'true'])!!}
                @if($errors->has('rektor_name'))
                <span class="help-block">{{$errors->first('rektor_name')}}</span>
                @endif
              </div>
            </div>                     

            <div class='form-group{{$errors->has('university_phone') ? ' has-error' : ''}}'>
              {!!Form::label('university_phone','Telpon',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('university_phone',$anggota->profile->university->phone,['class' => 'form-control','placeholder' => 'Telpon','required' => 'true'])!!}
                @if($errors->has('university_phone'))
                <span class="help-block">{{$errors->first('university_phone')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('website_url') ? ' has-error' : ''}}'>
              {!!Form::label('website_url','Website',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::text('website_url',$anggota->profile->university->website_url,['class' => 'form-control','placeholder' => 'Website'])!!}
                @if($errors->has('website_url'))
                  <span class="help-block">{{$errors->first('website_url')}}</span>
                @endif
              </div>
            </div>

            <div class='form-group{{$errors->has('university_address') ? ' has-error' : ''}}'>
              {!!Form::label('university_address','Alamat Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
              <div class="col-sm-10">
                {!!Form::textarea('university_address',$anggota->profile->university->address,['class' => 'form-control','placeholder' => 'Alamat Perguruan Tinggi'])!!}
                @if($errors->has('university_address'))
                <span class="help-block">{{$errors->first('university_address')}}</span>
                @endif
              </div>
            </div>      
                <input type="submit" class="btn btn-primary" value="Update">
              {!!Form::close()!!}          
        </div>
    </div>       
  </duv>
</div>

@stop