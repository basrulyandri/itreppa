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
                <a href="{{route('galleries.index')}}">Album</a>
            </li>                
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Albums </h5>                
            </div>
            <div class="ibox-content">
                <table class="table table-striped" id="albums">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($albums as $album)
                        <tr>
                            <td>{{$album->id}}</td>
                            <td><a href="{{route('album.view',$album)}}"><strong class="text-navy">{{$album->name}}</strong></a><br/>
                            <small>{{$album->description}}</small></td>
                            <td>
                                @foreach($album->images()->limit(5)->get() as $image)
                                    <a href="#"><img alt="image" class="img-circle" src="https://placeimg.com/60/60/people" style="width: 32px; height: 32px;"></a>
                                @endforeach
                            </td>
                            <td></td>
                        </tr> 
                    @endforeach                                             
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Create New Album</h5>                
            </div>
            <div class="ibox-content">
                 {!!Form::open(['route' =>'album.store', 'class' => 'form-horizontal'])!!}
                    <div class='form-group{{$errors->has('name') ? ' has-error' : ''}}'>
                      <div class="col-sm-12">
                        {!!Form::text('name',old('name'),['class' => 'form-control','placeholder' => 'Album Name','required' => 'true'])!!}
                        @if($errors->has('name'))
                          <span class="help-block">{{$errors->first('name')}}</span>
                        @endif
                      </div>
                    </div>  
                    <div class='form-group{{$errors->has('description') ? ' has-error' : ''}}'>                      
                      <div class="col-sm-12">
                        {!!Form::textarea('description',old('description'),['class' => 'form-control','placeholder' => 'Description'])!!}
                        @if($errors->has('description'))
                          <span class="help-block">{{$errors->first('description')}}</span>
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
<script src="{{url('assets/backend')}}/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/dataTables/dataTables.responsive.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
            $('#albums').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',                
            });
    });
</script>
@stop



