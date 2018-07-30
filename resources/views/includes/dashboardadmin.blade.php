<div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">
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
                    

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Aktivitas Aplikan & User</h5>                        
                            </div>
                            <div class="ibox-content">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Tanggal</th>                                        
                                        <th>Aplikan</th>
                                        <th>Process</th>
                                        <th>User</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(\App\AplikanTrack::orderBy('created_at','desc')->paginate(30) as $track)
                                    <tr>           
                                        <td>{{$track->created_at->format('d M Y, h:i')}}</td>                             
                                        <td><a href="{{route('aplikan.detail',$track->aplikan->id)}}">{{$track->aplikan->nama}}</a></td>
                                        <td>{{$track->nama_proses}}</td>
                                        <td><a href="{{route('user.profile',$track->user->username)}}">{{$track->user->username}}</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>  
            </div>
        </div>
    </div>