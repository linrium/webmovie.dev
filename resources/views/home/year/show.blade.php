@extends('home.master')
@section('content')

<div id="random" class="main__citem animated fadeInDown">
  <div class="row main__header">
    <div class="col-md-9 col-sm-7 col-xs-5">
      <h3>{{ $year['name'] }} year</h3>
    </div>
  </div>

  <div class="row main__citem-content">
    @foreach($movies as $movie)
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" >
      <div class="main__citem-item">
        <?php $lastEp = DB::table('episodes')->where('movie_id', $movie['id'])->orderBy('id', 'DESC')-> first() ?>
        <a href="{{ route('page.index', ['id'=>$movie['id'], 'episodeId'=>$lastEp->id]) }}">
          <div class="overlay"><img src="{{ url('public/img/play.png')}}" /></div><img src="{{ url('public/img/'.$movie['thumb'])}}" alt="" class="img-responsive" />
        </a>
        <div class="main__citem-des">
          <h2>{{ $movie['name'] }}</h2><span># {{ $movie['current_episodes'] }}/{{ $movie['total_episodes'] === 0 ? '???' : $movie['total_episodes'] }}</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<script>
  window.document.title = "Webmovie - Trang xem anime online";
</script>
@endsection()