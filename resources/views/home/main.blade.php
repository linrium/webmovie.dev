@extends('home.master')
@section('content')
<div id="newEpisodes" class="main__citem animated fadeInDown">
  <div class="row main__header">
    <div class="col-md-9 col-sm-7 col-xs-5">
      <h3>New Episodes Release For You</h3>
    </div>
    <div class="col-md-3 col-sm-5 col-xs-7 main__header--right"><a href="#">view all</a><a href="#"><i class="fa fa-chevron-left"></i></a><a href="#"><i class="fa fa-chevron-right"></i></a></div>
  </div>

  <div class="row main__citem-content">
    @foreach($newEpisodes as $episode)
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" >
      <div class="main__citem-item">
        <?php $movie = DB::table('movies')->where('id', $episode['movie_id'])->select('id', 'name', 'thumb', 'current_episodes')->get(); ?>
        <a href="{{ route('page.index', ['id'=>$movie[0]->id, 'episodeId'=>$episode['id']]) }}">
          <div class="overlay"><img src="{{ url('public/img/play.png')}}" /></div><img src="{{ url('public/img/'.$movie[0]->thumb)}}" alt="" class="img-responsive" />
        </a>
        <div class="main__citem-des">
          <h2>{{ $movie[0]->name }}</h2><span># {{ $episode['name'] }}</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div id="trending" class="row animated fadeInDown">
  <div class="main__ritem col-sm-12 col-md-6">
    <div class="row main__header">
      <div class="col-md-10 col-sm-7 col-xs-5">
        <h3>Most Views</h3>
      </div>
    </div>
    <div class="row main__ritem-content">
      <?php $i = 1; ?>
      @foreach($moviesMostViews as $movie)
      <div class="col-md-12 col-sm-12 col-xs-12" >
        <div class="row main__ritem-item">
          <div class="col-md-1 col-sm-1 col-xs-1 main__ritem-numberic"><span>{!! $i++ !!}</span></div>
          <div class="col-md-2 col-sm-2 col-xs-2 main__ritem-thumb"><img src="{{ url('public/img/'.$movie['thumb']) }}" alt="" /></div>
          <div class="col-md-7 col-sm-7 col-xs-5 main__ritem-title">
            <h2>{!! $movie['name'] !!}</h2><span>{{ Counter::show('movies', $movie['id'] ) }} views</span>
          </div>
          <div class="col-md-2 col-sm-2 main__ritem-icon">
            <?php $lastEp = DB::table('episodes')->where('movie_id', $movie['id'])->orderBy('id', 'DESC')-> first() ?>
            <a class="btn btn-nooutline-primary" href="{{ route('page.index', ['id'=>$movie['id'], 'episodeId'=>$lastEp->id]) }}">PLAY</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="main__ritem-showall col-md-12 col-sm-12 col-xs-12"><span>view all </span><i class="fa fa-chevron-down"></i></div>
    </div>
  </div>

  <div class="main__ritem col-sm-12 col-md-6">
    <div class="row main__header">
      <div class="col-md-10 col-sm-7 col-xs-5">
        <h3>Most Likes</h3>
      </div>
    </div>
    <div class="row main__ritem-content">
      <?php $i = 1; ?>
      @foreach($moviesMostLikes as $movie)
      <div class="col-md-12 col-sm-12 col-xs-12" >
        <div class="row main__ritem-item">
          <div class="col-md-1 col-sm-1 col-xs-1 main__ritem-numberic"><span>{!! $i++ !!}</span></div>
          <div class="col-md-2 col-sm-2 col-xs-2 main__ritem-thumb"><img src="{{ url('public/img/'.$movie['thumb']) }}" alt="" /></div>
          <div class="col-md-7 col-sm-7 col-xs-5 main__ritem-title">
            <h2>{!! $movie['name'] !!}</h2><span>{{ $movie['likes'] }} likes</span>
          </div>
          <div class="col-md-2 col-sm-2 main__ritem-icon">
            <?php $lastEp = DB::table('episodes')->where('movie_id', $movie['id'])->orderBy('id', 'DESC')-> first() ?>
            <a class="btn btn-nooutline-primary" href="{{ route('page.index', ['id'=>$movie['id'], 'episodeId'=>$lastEp->id]) }}">PLAY</a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="main__ritem-showall col-md-12 col-sm-12 col-xs-12"><span>view all </span><i class="fa fa-chevron-down"></i></div>
    </div>
  </div>
</div>

<div id="newanime" class="main__citem animated fadeInDown">
  <div class="row main__header">
    <div class="col-md-9 col-sm-7 col-xs-5">
      <h3>New Anime Release For You</h3>
    </div>
    <div class="col-md-3 col-sm-5 col-xs-7 main__header--right"><a href="#">view all</a><a href="#"><i class="fa fa-chevron-left"></i></a><a href="#"><i class="fa fa-chevron-right"></i></a></div>
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

<div id="random" class="main__citem animated fadeInDown">
  <div class="row main__header">
    <div class="col-md-9 col-sm-7 col-xs-5">
      <h3>Random Anime For You</h3>
    </div>
    <div class="col-md-3 col-sm-5 col-xs-7 main__header--right"><a href="#">view all</a><a href="#"><i class="fa fa-chevron-left"></i></a><a href="#"><i class="fa fa-chevron-right"></i></a></div>
  </div>

  <div class="row main__citem-content">
    @foreach($moviesRandom as $movie)
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