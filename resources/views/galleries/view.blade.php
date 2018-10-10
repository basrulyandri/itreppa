@extends('layouts.backend.master')
@section('header')
   <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/css/plugins/dropzone/dropzone.min.css')}}">

@endsection
@section('title')
  Gallery
@stop

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Album {{$album->name}}</h2>
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
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add Images to Album {{$album->name}} </h5>                
            </div>
            <div class="ibox-content">
                {!!Form::open(['route' =>'post.image.upload','class' => 'form-inline','id' => 'formCreate'])!!}
                    <input type="hidden" name="album_id" value="{{$album->id}}">
                    <div id="formListImages">
                        <div class="row form-inline">
                            <div class="form-group">
                              <label for="name" class="sr-only">Name</label>                      
                                <input class="form-control" placeholder="Name" required="true" name="name[]" type="text">
                            </div> 
                            <div class="form-group">
                              <label for="description" class="sr-only">Name</label>                      
                                <input class="form-control" placeholder="Description" name="description[]" type="text">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                   <span class="input-group-btn">
                                     <a id="uploadbutton" data-input="thumbnail" data-preview="holder" class="uploadbutton btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                   <input id="thumbnail" class="form-control" type="text" name="path[]">
                                 </div>                            
                            </div>
                            <div class="form-group">
                                <img src="{{url('assets/backend')}}/img/no-thumbnail.jpg" id="holder" style="width:60px;">
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <button id="addForm" class="btn btn-block btn-sm btn-info"><i class="fa fa-plus"></i> Add form</button>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn btn-primary pull-right" value="Submit">                        
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>

     <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Images of Album ({{$album->name}}) </h5>                
            </div>
            <div class="ibox-content">
                <div class="row">
                @foreach($album->images as $image)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{$image->path}}">
                            <div class="card-body">
                              <p class="card-text">{{$image->description}}</p>                         
                            </div>
                          </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        
    </div>
    </div>
 </div>
@stop


@section('footer')
  <script type="text/javascript" src="{{asset('assets/backend/js/plugins/dropzone/dropzone.min.js')}}"></script>
  <script src="{{url('/')}}/vendor/laravel-filemanager/js/lfm.js"></script>
  <script>
    function strRandom(lengthNumber) {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for (var i = 0; i < lengthNumber; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    }
    $(document).ready(function() {               
        var domain = "{{url('/')}}/admin/rollo-filemanager";    
        $('body').on('mousedown','.uploadbutton',function(){
            $(this).filemanager('image', {prefix: domain});
        });
        $('#addForm').click(function(e){
            e.preventDefault();
            var str = strRandom(45);
            var thum = strRandom(15);
            var html = '<div class="row form-inline"><div class="form-group"><label for="name" class="sr-only">Name</label><input class="form-control" placeholder="Name" required="true" name="name[]" type="text"></div><div class="form-group"><label for="description" class="sr-only">Name</label><input class="form-control" placeholder="Description" name="description[]" type="text"></div><div class="form-group"><div class="input-group"><span class="input-group-btn"><a id="uploadbutton" data-input="'+thum+'" data-preview="'+str+'" class="uploadbutton btn btn-primary"><i class="fa fa-picture-o"></i> Choose</a></span><input id="'+thum+'" class="form-control" type="text" name="path[]"></div></div><div class="form-group"><img src="/assets/backend/img/no-thumbnail.jpg" id="'+str+'" style="width:60px;"></div><hr></div>';
            $('#formListImages').append(html);
        });
    });
  </script>
@stop



