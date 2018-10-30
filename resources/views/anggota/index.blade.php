@extends('layouts.backend.master')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Data Anggota</h2>
        <ol class="breadcrumb">
          <li>
              <a href="{{route('anggota.index')}}">Anggota</a>
          </li>          
      </ol>
       
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="{{route('anggota.create')}}" class="btn btn-primary">Tambah anggota</a>
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
                
                <form action="{{route('anggota.destroy',$angg)}}" method="post">
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