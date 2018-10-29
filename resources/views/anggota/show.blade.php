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
                        <td>{{$anggota->profile->first_name}} {{$anggota->profile->last_name}}</td>
                    </tr>              
                    
                    <tr>                        
                        <td class="text-right">Email :</td>
                        <td>{{$anggota->email}}</td>
                    </tr>
                    <tr>                        
                        <td class="text-right">Telpon :</td>
                        <td>{{$anggota->profile->phone}}</td>
                    </tr>
                </table>                
            </div>
        </div>
      </div>
  </div>   
</div>

@stop