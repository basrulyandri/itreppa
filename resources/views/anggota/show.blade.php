@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>{{$anggota->name}}</h2>
         <ol class="breadcrumb">
            <li>
                <a href="{{route('anggotas.index')}}">Anggota</a>
            </li>          
            <li>
                <a href="{{route('anggotas.show',$anggota)}}">Edit</a>
            </li>          
        </ol>
    </div>
    <div class="col-sm-8">
      <div class="title-action">
        <a href="{{route('anggotas.edit',$anggota)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
      </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Detail Anggota</h5>          
      </div>
      <div class="ibox-content no-padding">
          <table class="table table-striped">
                    <tr>                        
                        <td>id</td>
                        <td>{{$anggota->id}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>role_id</td>
                        <td>{{$anggota->role_id}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>username</td>
                        <td>{{$anggota->username}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>email</td>
                        <td>{{$anggota->email}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>password</td>
                        <td>{{$anggota->password}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>activated</td>
                        <td>{{$anggota->activated}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>activation_code</td>
                        <td>{{$anggota->activation_code}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>activated_at</td>
                        <td>{{$anggota->activated_at}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>last_login</td>
                        <td>{{$anggota->last_login}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>reset_password_code</td>
                        <td>{{$anggota->reset_password_code}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>remember_token</td>
                        <td>{{$anggota->remember_token}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>api_token</td>
                        <td>{{$anggota->api_token}}</td>
                        </tr>
                    </table>
      </div>
  </div>   
</div>

@stop