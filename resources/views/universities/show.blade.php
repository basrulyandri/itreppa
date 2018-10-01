@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>{{$university->name}}</h2>
         <ol class="breadcrumb">
            <li>
                <a href="{{route('universities.index')}}">Universities</a>
            </li>          
            <li>
                <a href="{{route('universities.show',$university)}}">Edit</a>
            </li>          
        </ol>
    </div>
    <div class="col-sm-8">
      <div class="title-action">
        <a href="{{route('universities.edit',$university)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
      </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Detail University</h5>          
      </div>
      <div class="ibox-content no-padding">
          <table class="table table-striped">
                    <tr>                        
                        <td>id</td>
                        <td>{{$university->id}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>name</td>
                        <td>{{$university->name}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>rektor_name</td>
                        <td>{{$university->rektor_name}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>phone</td>
                        <td>{{$university->phone}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>website_url</td>
                        <td>{{$university->website_url}}</td>
                        </tr>
                    
                    <tr>                        
                        <td>address</td>
                        <td>{{$university->address}}</td>
                        </tr>
                    </table>
      </div>
  </div>   
</div>

@stop