@extends('layouts.frontend.master')
@section('og')
    <meta content="Rollo ITC" name="author">

    <meta property="og:site_name" content="{{getOption('site_name')}}">
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="{{getOption('site_name')}}" />
    <meta property="og:description" content="{{getOption('site_description')}}" />
    <meta property="og:image" content="{{asset('/photos/apperti-image.jpg')}}" />
    <meta property="title" content="{{getOption('site_name')}}" />
    <meta name="description" content="{{getOption('site_description')}}" />
@stop
@section('header')
<link href="{{asset('assets/frontend')}}/pages/css/slider.css" rel="stylesheet">
@stop

@section('header_title')
	Pendaftaran Anggota APPERTI
@stop
@section('content')
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('page.index')}}">Home</a></li>            
            <li class="active">Daftar</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1 class="text-center">Pendaftaran Anggota</h1>
            <div class="content-page">
              	<div class="row" style="margin-top: 60px;">
                <!-- BEGIN LEFT SIDEBAR -->            
	                <div class="col-md-6 col-sm-6 blog-item">	                	
	                	{!!Form::open(['route' =>'post.page.register', 'role' => 'form','class' => 'form-horizontal'])!!}
							<fieldset>
	                			<legend>Data Pribadi</legend>	                			
		                		<div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
		                		  {!!Form::label('first_name','Nama Depan',['class' => 'col-sm-4 control-label'])!!}
		                		  <div class="col-sm-8">
		                		    {!!Form::text('first_name',old('first_name'),['class' => 'form-control','placeholder' => 'Nama Depan','required' => 'true'])!!}
		                		    @if($errors->has('first_name'))
		                		      <span class="help-block">{{$errors->first('first_name')}}</span>
		                		    @endif
		                		  </div>
		                		</div>
			                    
			                    <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
			                      {!!Form::label('last_name','Nama Belakang',['class' => 'col-sm-4 control-label'])!!}
			                      <div class="col-sm-8">
			                        {!!Form::text('last_name',old('last_name'),['class' => 'form-control','placeholder' => 'Nama Belakang','required' => 'true'])!!}
			                        @if($errors->has('last_name'))
			                          <span class="help-block">{{$errors->first('last_name')}}</span>
			                        @endif
			                      </div>
			                    </div>

			                    
								<div class='form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}'>
								  {!!Form::label('jenis_kelamin','Jenis Kelamin',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::select('jenis_kelamin',['L' => 'Laki-laki','P' => 'Perempuan'],old('jenis_kelamin'),['class' => 'form-control'])!!}
								    @if($errors->has('jenis_kelamin'))
								      <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
								    @endif
								  </div>
								</div>

								<div class='form-group{{$errors->has('email') ? ' has-error' : ''}}'>
								  {!!Form::label('email','Email',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::email('email',old('email'),['class' => 'form-control','placeholder' => 'Email','required' => 'true'])!!}
								    @if($errors->has('email'))
								      <span class="help-block">{{$errors->first('email')}}</span>
								    @endif
								  </div>
								</div>
			                    
			                    <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
			                      {!!Form::label('phone','No. Handphone',['class' => 'col-sm-4 control-label'])!!}
			                      <div class="col-sm-8">
			                        {!!Form::text('phone',old('phone'),['class' => 'form-control','placeholder' => 'No. Handphone','required' => 'true'])!!}
			                        @if($errors->has('phone'))
			                          <span class="help-block">{{$errors->first('phone')}}</span>
			                        @endif
			                      </div>
			                    </div>
								
								<div class='form-group{{$errors->has('agama') ? ' has-error' : ''}}'>
								  {!!Form::label('agama','Agama',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::text('agama',old('agama'),['class' => 'form-control','placeholder' => 'Agama','required' => 'true'])!!}
								    @if($errors->has('agama'))
								      <span class="help-block">{{$errors->first('agama')}}</span>
								    @endif
								  </div>
								</div>

								<div class='form-group{{$errors->has('address') ? ' has-error' : ''}}'>
								  {!!Form::label('address','Alamat',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::textarea('address',old('address'),['class' => 'form-control','placeholder' => 'Alamat'])!!}
								    @if($errors->has('address'))
								      <span class="help-block">{{$errors->first('address')}}</span>
								    @endif
								  </div>
								</div>
			                    
		                  	</fieldset>		                    		                    		                  
	                </div>
	                  
	                <div class="col-md-6 col-sm-6 blog-sidebar">
	                	<div class="form-horizontal">
	                		<fieldset>
	                			<legend>Data Yayasan & Perguruan Tinggi</legend>	                			
								<div class='form-group{{$errors->has('yayasan_name') ? ' has-error' : ''}}'>
								  {!!Form::label('yayasan_name','Nama Yayasan',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::text('yayasan_name',old('yayasan_name'),['class' => 'form-control','placeholder' => 'Nama Yayasan','required' => 'true'])!!}
								    @if($errors->has('yayasan_name'))
								      <span class="help-block">{{$errors->first('yayasan_name')}}</span>
								    @endif
								  </div>
								</div>

								<div class='form-group{{$errors->has('jabatan_di_yayasan') ? ' has-error' : ''}}'>
								  {!!Form::label('jabatan_di_yayasan','Jabatan di Yayasan',['class' => 'col-sm-4 control-label'])!!}
								  <div class="col-sm-8">
								    {!!Form::text('jabatan_di_yayasan',old('jabatan_di_yayasan'),['class' => 'form-control','placeholder' => 'Jabatan'])!!}
								    @if($errors->has('jabatan_di_yayasan'))
								      <span class="help-block">{{$errors->first('jabatan_di_yayasan')}}</span>
								    @endif
								  </div>
								</div>
	                			<div class='form-group{{$errors->has('university_name') ? ' has-error' : ''}}'>
	                			  {!!Form::label('university_name','Nama Perguruan Tinggi',['class' => 'col-sm-4 control-label'])!!}
	                			  <div class="col-sm-8">
	                			    {!!Form::text('university_name',old('university_name'),['class' => 'form-control','placeholder' => 'Nama Universitas','required' => 'true'])!!}
	                			    @if($errors->has('university_name'))
	                			      <span class="help-block">{{$errors->first('university_name')}}</span>
	                			    @endif
	                			  </div>
	                			</div>

	                			<div class='form-group{{$errors->has('rektor_name') ? ' has-error' : ''}}'>
	                			  {!!Form::label('rektor_name','Nama Rektor',['class' => 'col-sm-4 control-label'])!!}
	                			  <div class="col-sm-8">
	                			    {!!Form::text('rektor_name',old('rektor_name'),['class' => 'form-control','placeholder' => 'Nama Rektor','required' => 'true'])!!}
	                			    @if($errors->has('rektor_name'))
	                			      <span class="help-block">{{$errors->first('rektor_name')}}</span>
	                			    @endif
	                			  </div>
	                			</div>
	                			<div class='form-group{{$errors->has('university_phone') ? ' has-error' : ''}}'>
	                			  {!!Form::label('university_phone','Telpon ',['class' => 'col-sm-4 control-label'])!!}
	                			  <div class="col-sm-8">
	                			    {!!Form::text('university_phone',old('university_phone'),['class' => 'form-control','placeholder' => 'Telpon','required' => 'true'])!!}
	                			    @if($errors->has('university_phone'))
	                			      <span class="help-block">{{$errors->first('university_phone')}}</span>
	                			    @endif
	                			  </div>
	                			</div>

	                			<div class='form-group{{$errors->has('website') ? ' has-error' : ''}}'>
	                				  {!!Form::label('website','Alamat Website',['class' => 'col-sm-4 control-label'])!!}
	                				  <div class="col-sm-8">
	                				    {!!Form::text('website',old('website'),['class' => 'form-control','placeholder' => 'Website'])!!}
	                				    @if($errors->has('website'))
	                				      <span class="help-block">{{$errors->first('website')}}</span>
	                				    @endif
	                				  </div>
	                				</div>	

	                			<div class='form-group{{$errors->has('university_address') ? ' has-error' : ''}}'>
	                			  {!!Form::label('university_address','Alamat',['class' => 'col-sm-4 control-label'])!!}
	                			  <div class="col-sm-8">
	                			    {!!Form::textarea('university_address',old('university_address'),['class' => 'form-control','placeholder' => 'Alamat'])!!}
	                			    @if($errors->has('university_address'))
	                			      <span class="help-block">{{$errors->first('university_address')}}</span>
	                			    @endif
	                			  </div>
	                			</div>                			
	                		</fieldset>

	                		<div class="row">
	                			<div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">                        
	                				<button type="submit" class="btn btn-primary">Kirim</button>	                				
	                			</div>
	                		</div>
	                	</form>
	                	</div>
	                </div>
	            </div>
	        </div>
			</div>
		</div>
		
                 
      </div>
    </div>
@stop

@section('footer')
<script>
	$(document).ready(function(){
		$('#sumber_informasi').change(function(){
            alert(1);
			if($(this).val() == 'lainnya'){
				$('#sumberInformasiLainnya').html('<input type="text" class="form-control input-text" name="sumber_informasi_lainnya" placeholder="Tulisakan sumber informasi lainnya">');
			}else{
				$('#sumberInformasiLainnya').html('');
			}
		});
	});
</script>
@stop