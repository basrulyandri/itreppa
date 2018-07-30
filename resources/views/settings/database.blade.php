@extends('layouts.backend.master')
@section('header')
    <style>
        .progress {
            display: block;
            text-align: center;
            width: 0;
            height: 3px;
            background: red;
            transition: width .3s;
        }
        .progress.hide {
            opacity: 0;
            transition: opacity 1.3s;
        }
    </style>
@endsection
@section('title')
  Setting
@stop

@section('content')
<div class="progress"></div>
  	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Setting</h2>
            <ol class="breadcrumb">
                <li class="active">
                    <a href="{{route('posts.index')}}">General</a>
                </li>                
            </ol>
        </div>
        <div class="col-sm-8">
            
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        @include('settings.includes.menu')
        <div class="row">
        <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Database Setting</h5>                      
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                         Sample Database
                                    </div>
                                    <div class="panel-body">
                                        <p>Sample database untuk demo. Sample berisi data aplikan, dan transaksinya.</p>
                                        <a id="installSampleDatabase" href="#" class="btn btn-info"><i class="fa fa-database"></i> Install sample database</a>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                         Reset Database
                                    </div>
                                    <div class="panel-body">
                                        <p>Reset database adalah fitur untuk menghapus seluruh data aplikan dan transaksi.</p>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset Database</a>
                                    </div>                                    
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
<script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.css" rel="stylesheet">
<script>
        $(document).ready(function() {            
            $('body').on('click','.btn-danger',function(){
                //alert('test');
                var id = $(this).attr('id');
                swal({
                  title:'YAKIN ?',
                   text: "Mau Reset Database ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Ya, Reset Database!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    window.location = "{{url('/')}}/setting/database/reset";
                  }
                });
              });  

            $('#installSampleDatabase').click(function(){
                //$.busyLoadLoad("show");
                var data = [];
                for (var i = 0; i < 100000; i++) {
                    var tmp = [];
                    for (var i = 0; i < 100000; i++) {
                        tmp[i] = 'hue';
                    }
                    data[i] = tmp;
                };

                var _token = "{{\Session::token()}}";
                $.ajax({
                  xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                console.log(percentComplete);
                                $('.progress').css({
                                    width: percentComplete * 100 + '%'
                                });
                                if (percentComplete === 1) {
                                    $('.progress').addClass('hide');
                                }
                            }
                        }, false);
                        xhr.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                console.log(percentComplete);
                                $('.progress').css({
                                    width: percentComplete * 100 + '%'
                                });
                            }
                        }, false);
                        return xhr;
                    },
                  method:"POST",
                  url: "{{route('setting.database.install')}}",
                  data: { _token: _token}
                }).success(function(data){
                    toastr.success('Database sample telah terinstall.','Berhasil.');
                });
            }); 

            $.busyLoadSetup({
                animation: "slide",
                spinner:"accordion",
                background: "rgba(64, 115, 158, 0.86)",
                text: "Menginstall Database Sample. Proses ini mungkin memakan waktu, jangan tutup window ini sampai proses selesai.",
                textPosition:"bottom",

            });
        });  

        $(document)
            .ajaxStart(function(){
                $.busyLoadFull("show");
            })
            .ajaxStop(function(){
                $.busyLoadFull("hide");
            });      
    </script>
@endsection
