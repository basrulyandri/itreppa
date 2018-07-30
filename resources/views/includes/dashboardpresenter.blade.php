<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-2">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">                                
                            <a href="{{route('aplikan.saya')}}"><h5>Aplikan Saya</h5></a>
                        </div>
                        <div class="ibox-content">
                            <h1 class="no-margins">{{jmlAplikanSaya()}}</h1>                                
                            <small>Orang</small>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">Bulan Ini</span>
                                <h5>Aplikan</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{\App\Aplikan::count()}}</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Orang</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">Bulan Ini</span>
                                <h5>Daftar</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">{{\App\Aplikan::whereAplikanStatusId(3)->count()}}</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>Sudah bayar</small>
                            </div>
                        </div>
                    </div>                  
            </div>
        </div>
    </div>
</div>
