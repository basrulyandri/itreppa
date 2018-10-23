@extends('layouts.backend.master')
@section('header')
<link href="{{url('assets/backend')}}/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="{{url('assets/backend')}}/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
@endsection
@section('title')
  Gallery
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Galleries</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('gallery.index')}}">Album</a>
            </li>                
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
   
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Edit Album {{$album->name}}</h5>                
            </div>
            <div class="ibox-content">
                 {!!Form::open(['route' =>['gallery.update',$album], 'class' => 'form-horizontal'])!!}
                    <div class='form-group{{$errors->has('name') ? ' has-error' : ''}}'>
                      <div class="col-sm-12">
                        {!!Form::text('name',$album->name,['class' => 'form-control','placeholder' => 'Album Name','required' => 'true'])!!}
                        @if($errors->has('name'))
                          <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                      </div>
                    </div>  
                    <div class='form-group{{$errors->has('description') ? ' has-error' : ''}}'>                      
                      <div class="col-sm-12">
                        {!!Form::textarea('description',$album->description,['class' => 'form-control','placeholder' => 'Description'])!!}
                        @if($errors->has('description'))
                          <span class="help-block">{{$errors->first('description')}}</span>
                        @endif
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update">
                 {!!Form::close()!!}
            </div>
        </div>
    </div>
    </div>
 </div>
@stop


@section('footer')


<script type="text/javascript">
    $(document).ready(function() {
           
    });
</script>
@stop



