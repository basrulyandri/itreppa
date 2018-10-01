@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Universities</h2>
        <ol class="breadcrumb">
          <li>
              <a href="{{route('universities.index')}}">Universities</a>
          </li>          
      </ol>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#universityModal">Add university</button>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
        
        <div class="ibox-content">
            <table class="table">
                <thead>
                    <tr>
                    <th><input type="checkbox" id="checkAll"></th><th>id</th>
                <th>name</th>
                <th>rektor_name</th>
                <th>phone</th>
                <th>website_url</th>
                <th>address</th>
                <th>created_at</th>
                <th style="width:10%;">Actions</th>
        
                    </tr>
                </thead>
            <tbody>
            @foreach($universities as $university)
            <tr>
            <td><input type="checkbox" class="sub_chk" data-id="{{$university->id}}"></td>
            <td>{{$university->id}}</td>
                    <td>{{$university->name}}</td>
                    <td>{{$university->rektor_name}}</td>
                    <td>{{$university->phone}}</td>
                    <td>{{$university->website_url}}</td>
                    <td>{{$university->address}}</td>
                    <td>{{$university->created_at->format("d M Y")}}</td>
                <td>
                
                <form action="{{route('universities.destroy',$university)}}" method="post">
                    <a class="btn btn-xs btn-white" href="{{route("universities.show",$university)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                </a>

                <a class="btn btn-xs btn-warning" href="{{route("universities.edit",$university)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                </a>
                    {!! method_field('delete') !!}                    
                    {!! csrf_field() !!}
                    <button type="submit" value="Delete" class="btn btn-xs btn-danger" id="universityDelete"><i class="fa fa-trash"></i></button>
                    
                </form>                
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            {{ $universities->links() }}

            <button class="btn btn-danger pull-right" id="deleteAll">Delete</button>
        </div>
    </div>   
</div>

<div class="modal fade" id="universityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add University</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         {!!Form::open(['route' =>'universities.store', 'class' => 'form-horizontal'])!!}
         <div class="form-group{{$errors->has("name") ? " has-error" : ""}}">
                      {!!Form::label("name","Name",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("name",old("name"),["class" => "form-control","placeholder" => "Name"])!!}
                        @if($errors->has("name"))
                          <span class="help-block">{{$errors->first("name")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("rektor_name") ? " has-error" : ""}}">
                      {!!Form::label("rektor_name","Rektor_name",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("rektor_name",old("rektor_name"),["class" => "form-control","placeholder" => "Rektor_name"])!!}
                        @if($errors->has("rektor_name"))
                          <span class="help-block">{{$errors->first("rektor_name")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("phone") ? " has-error" : ""}}">
                      {!!Form::label("phone","Phone",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("phone",old("phone"),["class" => "form-control","placeholder" => "Phone"])!!}
                        @if($errors->has("phone"))
                          <span class="help-block">{{$errors->first("phone")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("website_url") ? " has-error" : ""}}">
                      {!!Form::label("website_url","Website_url",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("website_url",old("website_url"),["class" => "form-control","placeholder" => "Website_url"])!!}
                        @if($errors->has("website_url"))
                          <span class="help-block">{{$errors->first("website_url")}}</span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{$errors->has("address") ? " has-error" : ""}}">
                      {!!Form::label("address","Address",["class" => "col-sm-2 control-label"])!!}
                      <div class="col-sm-10">
                        {!!Form::text("address",old("address"),["class" => "form-control","placeholder" => "Address"])!!}
                        @if($errors->has("address"))
                          <span class="help-block">{{$errors->first("address")}}</span>
                        @endif
                      </div>
                    </div>
                             
      </div>
      <div class="modal-footer">        
        <input type="submit" class="btn btn-primary" value="Save">
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
 <script>
        $(document).ready(function() {            
            $('body').on('click','#universityDelete',function(e){
              e.preventDefault();
              var formElement = $(this).parent();
                swal({
                  title:'SURE ?',
                   text: "Want to delete ?",
                   type: "warning",
                   showCancelButton: true,
                   confirmButtonColor: "#DD6B55",
                   confirmButtonText: "Yes, delete it!",
                   closeOnConfirm: true,
                },function(isConfirm){
                  if (isConfirm) {
                    formElement.submit();
                  }
                });
              });   

              $('#checkAll').on('click', function(e) {
               if($(this).is(':checked',true))  
               {
                  $(".sub_chk").prop('checked', true);  
               } else {  
                  $(".sub_chk").prop('checked',false);  
               }  
              });
              $('#deleteAll').click(function(){
                var allVals = [];  
                  $(".sub_chk:checked").each(function() {  
                      allVals.push($(this).attr('data-id'));
                  });  


                  if(allVals.length <=0)  
                  {  
                    swal({
                      title:'Ooops !',
                       text: "Select row/s to delete.",
                       type: "info",                       
                       });

                  }  else {
                    swal({
                      title:'SURE ?',
                       text: "Want to delete ?",
                       type: "warning",
                       showCancelButton: true,
                       confirmButtonColor: "#DD6B55",
                       confirmButtonText: "Yes, delete it!",
                       closeOnConfirm: true,
                    },function(isConfirm){
                      if (isConfirm) {
                        var join_selected_values = allVals.join(",");
                        var _token = '{{\Session::token()}}';
                        $.ajax({
                            url: '{{route('universities.deleteAll')}}',
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {ids:join_selected_values,_token:_token},
                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function() {  
                                        $(this).parents("tr").remove();
                                    });
                                    toastr.success('Success', 'Data has been deleted.');                                    
                                } else if (data['error']) {
                                    console.log(data['error']);
                                } else {
                                    console.log('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                console.log(data.responseText);
                            }
                        });


                        $.each(allVals, function( index, value ) {
                            $('table tr').filter("[data-row-id='" + value + "']").remove();
                        });
                      }
                    });
                  }
              });
        });

    </script>
@endsection