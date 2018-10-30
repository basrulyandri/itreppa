@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Anggota</h2>
        <ol class="breadcrumb">
          <li>
              <a href="{{route('anggota.index')}}">Anggota</a>
          </li>          
      </ol>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <button href="#" class="btn btn-primary" data-toggle="modal" data-target="#anggotaModal">Tambah anggota</button>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="ibox float-e-margins">
        
        <div class="ibox-content">
            <table class="table">
                <thead>
                    <tr>
                      <th><input type="checkbox" id="checkAll"></th>                      
                      <th>Nama</th>
                      <th>email</th>  
                      <th>Telpon</th>
                      <th>Yayasan</th>
                      <th>Perguruan Tinggi</th>
                      <th style="width:10%;">Actions</th>        
                    </tr>
                </thead>
            <tbody>
            @foreach($anggota as $angg)
            <tr>
              <td><input type="checkbox" class="sub_chk" data-id="{{$angg->id}}"></td>              
              <td>{{$angg->fullName()}}</td>
              <td>{{$angg->email}}</td> 
              <td>{{$angg->profile->phone}}</td>
              <td>{{$angg->profile->university->yayasan_name}}</td>
              <td>{{$angg->profile->university->name}}</td>             
              <td>
                
                <form action="{{route('anggota.destroy',$anggota)}}" method="post">
                    <a class="btn btn-xs btn-white" href="{{route("anggota.show",$angg)}}" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i>
                </a>

                <a class="btn btn-xs btn-warning" href="{{route("anggota.edit",$angg)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i>
                </a>
                    {!! method_field('delete') !!}                    
                    {!! csrf_field() !!}
                    <button type="submit" value="Delete" class="btn btn-xs btn-danger" id="anggotaDelete"><i class="fa fa-trash"></i></button>
                    
                </form>                
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            {{ $anggota->links() }}

            <button class="btn btn-danger pull-right" id="deleteAll">Delete</button>
        </div>
    </div>   
</div>

<div class="modal fade" id="anggotaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 80%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <h3 class="text-center">Data Pribadi</h3>
           {!!Form::open(['route' =>'anggota.store', 'class' => 'form-horizontal'])!!}
           <input type="hidden" name="role_id" value="3">
           <div class='form-group{{$errors->has('first_name') ? ' has-error' : ''}}'>
            {!!Form::label('first_name','Nama Depan',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('first_name',old('first_name'),['class' => 'form-control','placeholder' => 'Nama Depan','required' => 'true'])!!}
              @if($errors->has('first_name'))
              <span class="help-block">{{$errors->first('first_name')}}</span>
              @endif
            </div>
          </div>

          <div class='form-group{{$errors->has('last_name') ? ' has-error' : ''}}'>
            {!!Form::label('last_name','Nama Belakang',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('last_name',old('last_name'),['class' => 'form-control','placeholder' => 'Nama Belakang','required' => 'true'])!!}
              @if($errors->has('last_name'))
              <span class="help-block">{{$errors->first('last_name')}}</span>
              @endif
            </div>
          </div>
          <div class='form-group{{$errors->has('jenis_kelamin') ? ' has-error' : ''}}'>
            {!!Form::label('jenis_kelamin','Jenis Kelamin',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::select('jenis_kelamin',['L' => 'Laki-laki','P' => 'Perempuan'],old('jenis_kelamin'),['class' => 'form-control'])!!}
              @if($errors->has('jenis_kelamin'))
              <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
              @endif
            </div>
          </div>

          <div class="form-group{{$errors->has("email") ? " has-error" : ""}}">
            {!!Form::label("email","Email",["class" => "col-sm-2 control-label"])!!}
            <div class="col-sm-10">
              {!!Form::text("email",old('email'),["class" => "form-control","placeholder" => "Email"])!!}
              @if($errors->has("email"))
              <span class="help-block">{{$errors->first("email")}}</span>
              @endif
            </div>
          </div>

          <div class='form-group{{$errors->has('phone') ? ' has-error' : ''}}'>
            {!!Form::label('phone','Telpon',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('phone',old('phone'),['class' => 'form-control','placeholder' => 'Telpon'])!!}
              @if($errors->has('phone'))
              <span class="help-block">{{$errors->first('phone')}}</span>
              @endif
            </div>
          </div>  

          <div class='form-group{{$errors->has('agama') ? ' has-error' : ''}}'>
            {!!Form::label('agama','Agama',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('agama',old('agama'),['class' => 'form-control','placeholder' => 'Agama','required' => 'true'])!!}
              @if($errors->has('agama'))
              <span class="help-block">{{$errors->first('agama')}}</span>
              @endif
            </div>
          </div>



          <div class='form-group{{$errors->has('address') ? ' has-error' : ''}}'>
            {!!Form::label('address','Alamat',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::textarea('address',old('address'),['class' => 'form-control','placeholder' => 'Alamat'])!!}
              @if($errors->has('address'))
              <span class="help-block">{{$errors->first('address')}}</span>
              @endif
            </div>
          </div>

        </div>

        <div class="col-md-6 form-horizontal">
          <h3 class="text-center">Data Perguruan tinggi</h3>
          <div class='form-group{{$errors->has('university_name') ? ' has-error' : ''}}'>
           {!!Form::label('university_name','Nama Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
           <div class="col-sm-10">
             {!!Form::text('university_name',old('university_name'),['class' => 'form-control','placeholder' => 'Nama Perguruan Tinggi','required' => 'true'])!!}
             @if($errors->has('university_name'))
               <span class="help-block">{{$errors->first('university_name')}}</span>
             @endif
           </div>
         </div>

         <div class='form-group{{$errors->has('rektor_name') ? ' has-error' : ''}}'>
            {!!Form::label('rektor_name','Nama Rektor',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('rektor_name',old('rektor_name'),['class' => 'form-control','placeholder' => 'Nama Rektor','required' => 'true'])!!}
              @if($errors->has('rektor_name'))
                <span class="help-block">{{$errors->first('rektor_name')}}</span>
              @endif
            </div>
          </div>                     

          <div class='form-group{{$errors->has('university_name') ? ' has-error' : ''}}'>
            {!!Form::label('university_name','Telpon',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::text('university_name',old('university_name'),['class' => 'form-control','placeholder' => 'Telpon','required' => 'true'])!!}
              @if($errors->has('university_name'))
                <span class="help-block">{{$errors->first('university_name')}}</span>
              @endif
            </div>
          </div>

          <div class='form-group{{$errors->has('university_address') ? ' has-error' : ''}}'>
            {!!Form::label('university_address','Alamat Perguruan Tinggi',['class' => 'col-sm-2 control-label'])!!}
            <div class="col-sm-10">
              {!!Form::textarea('university_address',old('university_address'),['class' => 'form-control','placeholder' => 'Alamat Perguruan Tinggi'])!!}
              @if($errors->has('university_address'))
                <span class="help-block">{{$errors->first('university_address')}}</span>
              @endif
            </div>
          </div>
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
            $('body').on('click','#anggotaDelete',function(e){
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
                            url: '{{route('anggota.deleteAll')}}',
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