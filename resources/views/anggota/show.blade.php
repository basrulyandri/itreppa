@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>{{$anggota->name}}</h2>
         <ol class="breadcrumb">
            <li>
                <a href="{{route('anggota.index')}}">Anggota</a>
            </li>          
            <li>
                <a href="{{route('anggota.show',$anggota)}}">Edit</a>
            </li>          
        </ol>
    </div>
    <div class="col-sm-8">
      <div class="title-action">
        <a href="{{route('anggota.edit',$anggota)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
      </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Detail Anggota</h5>          
      </div>
      <div class="ibox-content">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-center">Data Pribadi</h3>
                <table class="table table-striped">
                    <tr>                        
                        <td class="text-right">Nama :</td>
                        <td><strong>{{$anggota->profile->first_name}} {{$anggota->profile->last_name}}</strong></td>
                    </tr>              
                    
                    <tr>                        
                        <td class="text-right">Email :</td>
                        <td>{{$anggota->email}}</td>
                    </tr>
                    <tr>                        
                        <td class="text-right">Telpon :</td>
                        <td>{{$anggota->profile->phone}}</td>
                    </tr>

                    <tr>                        
                        <td class="text-right">Agama :</td>
                        <td>{{$anggota->profile->agama}}</td>
                    </tr>
                    <tr>                        
                        <td class="text-right">Alamat :</td>
                        <td>{{$anggota->profile->address}}</td>
                    </tr>
                </table>                
            </div>

            <div class="col-lg-6">
                <h3 class="text-center">Data Yayasan & Perguruan Tinggi</h3>
                <table class="table table-striped">
                    <tr>                        
                        <td class="text-right">Nama Yayasan :</td>
                        <td>{{$anggota->profile->university->yayasan_name}}</td>
                    </tr>              
                    
                    <tr>                        
                        <td class="text-right">Nama Perguruan Tinggi :</td>
                        <td>{{$anggota->profile->university->name}}</td>
                    </tr>
                    <tr>                        
                        <td class="text-right">Telpon :</td>
                        <td>{{$anggota->profile->university->phone}}</td>
                    </tr>

                    <tr>                        
                        <td class="text-right">Website :</td>
                        <td>{{$anggota->profile->university->website_url}}</td>
                    </tr>
                    <tr>                        
                        <td class="text-right">Alamat :</td>
                        <td>{{$anggota->profile->university->address}}</td>
                    </tr>
                </table>                
            </div>
        </div>
      </div>
  </div>   
</div>

@stop