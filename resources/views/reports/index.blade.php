@extends('layouts.backend.master')
@section('header')
  <link href="{{url('assets/backend')}}/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
@endsection
@section('title')
  Global Reports
@stop

@section('content')
  	<div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Reports</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('users.index')}}">Reports</a>
                </li>                 
            </ol>
        </div>        
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">                        
                <div class="ibox-content">
                        <form class="form-horizontal">                    
                            <div class="form-group">                        
                                <label class="font-normal">Rentang waktu</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="tanggal_dari" value="{{\Request::input('tanggal_dari')}}">
                                    <span class="input-group-addon">s/d</span>
                                    <input type="text" class="input-sm form-control" name="tanggal_sampai" value="{{\Request::input('tanggal_sampai')}}">
                                </div>
                            </div>                                        
                                <input type="submit" class="btn btn-sm btn-primary" value="OK">
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox float-e-margins">                        
                    <div class="ibox-content">
                      <div id="pendapatanMahasiswa"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                              <div id="pieAplikanJenisKelamin"></div>
                            </div>
                        </div>                        
                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">                        
                            <div class="ibox-content">
                              <div id="pieAplikanSumberInformasi"></div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Presenter</h5>                    
                </div>
                <div class="ibox-content">
                    <div>
                        <!-- Kabag Marketing -->
                        <?php $kabag_marketing = \App\User::whereRoleId(7)->first();?>
                        <div class="feed-activity-list">
                            <div class="feed-element">
                                <a href="{{route('user.profile',$kabag_marketing->username)}}" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{$kabag_marketing->getAvatarUrl()}}">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">{{$kabag_marketing->role->name}}</small>
                                    <strong><a href="{{route('user.profile',$kabag_marketing->username)}}">{{$kabag_marketing->getNameOrEmail(true)}}</strong></a><br>
                                    <small class="text-muted">{{$kabag_marketing->about or 'no description'}}</small>
                                    <div class="actions">                                        
                                            <div class="col-md-4">
                                                <h5><strong>{{$kabag_marketing->aplikan()->count()}}</strong> Aplikan</h5>
                                            </div>
                                            <div class="col-md-4">                                        
                                                <h5><strong>{{$kabag_marketing->followup()->count()}}</strong> Follow Up</h5>
                                            </div>
                                            <div class="col-md-4">                                        
                                                <h5><strong>{{$kabag_marketing->register()->count()}}</strong> Closing</h5>
                                            </div>                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End Kabag Marketing -->

                            @foreach($presenters as $presenter)
                            <div class="feed-element">
                                <a href="{{route('user.profile',$presenter->username)}}" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{$presenter->getAvatarUrl()}}">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">{{$presenter->role->name}}</small>
                                    <strong><a href="{{route('user.profile',$presenter->username)}}">{{$presenter->getNameOrEmail(true)}}</strong></a><br>
                                    <small class="text-muted">{{$presenter->about or 'no description'}}</small>
                                    <div class="actions">
                                        <div class="col-md-4">
                                                <h5><strong>{{$presenter->aplikan()->count()}}</strong> Aplikan</h5>
                                            </div>
                                            <div class="col-md-4">                                        
                                                <h5><strong>{{$presenter->followup()->count()}}</strong> Follow Up</h5>
                                            </div>
                                            <div class="col-md-4">                                        
                                                <h5><strong>{{$presenter->register()->count()}}</strong> Closing</h5>
                                            </div>                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach                                                
                        </div>
                    </div>
                </div>
            </div> 
            </div>           
    </div>
    
@stop

@section('footer')
<script src="{{url('assets/backend/js/plugins/highcharts')}}/highcharts.js"></script>
<script src="{{url('assets/backend/js/plugins/highcharts')}}/modules/exporting.js"></script>
<script src="{{url('assets/backend')}}/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('.input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format:'yyyy-mm-dd'
    });
});
Highcharts.chart('pendapatanMahasiswa', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Perolehan Mahasiswa'
    },
    subtitle: {
        text: '{{$perTanggal}}'
    },
    xAxis: {
        categories: {!!json_encode($aplikanStatus)!!},
        crosshair: true,
        title: {
            text: 'Status Aplikan'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah aplikan (Orang)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">Status : {point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: {!!json_encode($pendapatanMahasiswa)!!}
});

Highcharts.chart('pieAplikanJenisKelamin', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aplikan berdasarkan Jenis Kelamin'
    },
    setOption:{

    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: {!!json_encode($aplJenisKelaminSeries)!!}
});

Highcharts.chart('pieAplikanSumberInformasi', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Aplikan berdasarkan Sumber Informasi'
    },
    setOption:{

    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: {!!json_encode($aplSumberInformasiSeries)!!}
});
    </script>
@endsection
