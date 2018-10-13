
<!-- BEGIN RECENT NEWS -->                            
<h2>Terbaru</h2>
<div class="recent-news margin-bottom-10">
  @foreach(latestPosts(5) as $sidebarpost)
  <div class="row margin-bottom-10">
    <div class="col-md-3">
      <img class="img-responsive" alt="" src="{{$sidebarpost->thumbnail}}">                        
    </div>
    <div class="col-md-9 recent-news-inner">
      <h3><a href="{{route('page.single',$sidebarpost->slug)}}">{{$sidebarpost->title}}</a></h3>
      <p>{{substr($sidebarpost->excerpt,0,100)}}</p>
    </div>                        
  </div>
  @endforeach
</div>
<!-- END RECENT NEWS -->