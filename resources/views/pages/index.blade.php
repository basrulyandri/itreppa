@extends('layouts.frontend.master')
@section('og')
    <meta property="og:type" content="website" /> 
    <meta property="og:title" content="Pascasarjana Institut STIAMI" />
    <meta property="og:description" content="Institut STIAMI Berpengalaman 14 tahun dalam penyelenggaraan Pascasarjana" />
    <meta property="og:image" content="{{url('/')}}/assets/frontend/img/PASCA-STIAMI-OG-IMAGE-PROMO-RAMADHAN.jpg" />
    <meta property="title" content="Pascasarjana Institut STIAMI | Sekolah Tinggi Ilmu Administrasi" />
    <meta name="description" content="Institut STIAMI Berpengalaman 14 tahun dalam penyelenggaraan Pascasarjana" />
@stop

@section('header_title')
	Download Brosur
@stop
@section('content')
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 hidden-sm hidden-xs featured-work">
                <img style="width:100%; padding: 20px 0; " src="{{url('/')}}/assets/frontend/img/BANNER-STIAMI-DOWNLOAD-BROSUR-PROMO-RAMADHAN.jpg" alt="">            
                <!-- <hr>
                <div class="featured-box">                    
                    <div class="featured-box-col2 wow fadeInRight delay-02s animated" style="visibility: visible; animation-name: fadeInRight;">
                        <h3 class="text-center">Kampus dengan kurikulum perpajakan terbaik di Indonesia.</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>                 -->
            </div>
        	<div class="col-lg-6 col-sm-12 wow fadeInUp delay-05s">            
             <h2 class="hidden-lg hidden-md">FORMULIR DOWNLOAD BROSUR</h2>
             <h3 class="text-center hidden-lg hidden-md">BERKAH RAMADHAN, Potongan biaya kuliah 3 Jt dan bebas Biaya Pendaftaran.</h3>
            
            	<div class="form">
                    {!!Form::open(['route' =>'post.page.download.brosur', 'class' => 'contactForm'])!!}                    
                        <div class="form-group{{$errors->has('nama') ? ' has-error' : ''}}">
                            <input type="text" name="nama" class="form-control input-text" id="nama" placeholder="Nama Lengkap" value="{{old('nama')}}" required/>
                            @if($errors->has('nama'))
						      <span class="help-block">{{$errors->first('nama')}}</span>
						    @endif
                        </div>
                        <div class="form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">                        
                            {!!Form::select('jenis_kelamin',['' => 'Pilih Jenis kelamin','L' => 'Laki-laki','P' => 'Perempuan'],old('jenis_kelamin'),['class' => 'form-control input-text','required' => true])!!}
                            @if($errors->has('jenis_kelamin'))
						      <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
						    @endif
                        </div>
                        <div class="form-group{{$errors->has('email') ? ' has-error' : ''}}">
                            <input type="email" class="form-control input-text" name="email" id="email" placeholder="Alamat Email" value="{{old('email')}}" required/>
                            @if($errors->has('email'))
						      <span class="help-block">{{$errors->first('email')}}</span>
						    @endif
                        </div>
                        <div class="form-group{{$errors->has('telepon') ? ' has-error' : ''}}">
                            <input type="text" class="form-control input-text" name="telepon" id="telepon" placeholder="No. Telepon" value="{{old('telepon')}}" required />
                            @if($errors->has('telepon'))
						      <span class="help-block">{{$errors->first('telepon')}}</span>
						    @endif
                        </div>
                        
						@if(\Cookie::get('psr') == null AND \Cookie::get('sin') == null AND !\Request::has('psr') AND !\Request::has('sin'))
                            <div class="form-group{{$errors->has('sumber_informasi') ? ' has-error' : ''}}">
                                {!!Form::select('sumber_informasi',['' => 'Pilih sumber informasi','brosur' => 'Brosur','presentasi' => 'Presentasi','facebook' => 'Facebook','website' => 'Website','teman' => 'Teman','lainnya' => 'Lainnya'],old('sumber_informasi'),['class' => 'form-control input-text','id' => 'sumber_informasi','required' => true])!!}
                                <span class="help-block">
                                	Pilih dari mana sumber informasi anda mendapatkan info tentang Pascasarjana Intitut STIAMI. 
                                	@if($errors->has('sumber_informasi'))
    						      		{{$errors->first('sumber_informasi')}}
    						    	@endif
                                </span>
                            </div>
                        @elseif(\Cookie::get('psr') != null OR \Request::has('psr'))
                            <input type="hidden" name="user_id" value="{{\Cookie::get('psr')}}">
                            <input type="hidden" name="sumber_informasi" value="{{\Request::get('psr')}}">
                        @elseif(\Cookie::get('sin') !== null OR \Request::has('sin'))
                            <input type="hidden" name="sumber_informasi" value="{{\Request::get('sin')}}">
                        @endif                       
                        
                        <div class="form-group" id="sumberInformasiLainnya">
							@if(!$errors->isEmpty() AND !$errors->has('sumber_informasi'))
								<input type="text" class="form-control input-text" name="sumber_informasi_lainnya" placeholder="Tuliskan sumber informasi lainnya" value="{{old('sumber_informasi_lainnya')}}">
							@endif
                        </div>
                        <div class="text-center"><button type="submit" class="input-btn" style="background: #710000;">Kirim Brosur sekarang</button></div>
                    </form>
                </div>	
            </div>
        </div>
</section>
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