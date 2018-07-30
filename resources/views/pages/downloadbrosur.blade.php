@extends('layouts.frontend.master')

@section('content')

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="page-header">
					<h1 class="text-center rollo-page-header-full">FORMULIR DOWNLOAD BROSUR</h1>
				</div>

				<form method="POST" action="{{route('post.page.download.brosur')}}" class="form-horizontal">
				{{csrf_field()}}
				<div class="control-group">
				    <label class="control-label" for="nama">Nama</label>
				    <div class="controls">
				      <input type="text" name="nama" class="input-block-level rollo-form" placeholder="Nama Lengkap" required>
				    </div>
				</div>

				  <div class="control-group">
				    <label class="control-label" for="email">E-mail</label>
				    <div class="controls">
				      <input type="email" name="email" class="input-block-level rollo-form" placeholder="E-mail" required>
				    </div>
				  </div>
				<div class="control-group">
				    <label class="control-label" for="telepon">Telepon</label>
				    <div class="controls">
				      <input type="text" id="telpon" name="telepon" class="input-block-level rollo-form" placeholder="Telpon" required>
				    </div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="telpon">Jenis Kelamin</label>
				    <div class="controls">
					    <label class="radio inline">
						  <input type="radio" name="jenis_kelamin" class="input-block-level rollo-form" value="P">
						  Pria
						</label>
						<label class="radio inline">
						  <input type="radio" name="jenis_kelamin" class="input-block-level rollo-form" value="W">
						  Wanita
						</label>	
				    </div>
				</div>
				<div class="control-group">
				    <div class="controls">				      
				      <button type="submit" class="btn btn-info btn-large pull-right">Download</button>
				    </div>
				</div>
				</form>

			</div>
		</div>
	</div>
</div>
@stop

@section('footer')

@stop