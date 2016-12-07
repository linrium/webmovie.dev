@extends('home.master')
@section('content')
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
        <div class="overlay"><img src="{{ url('public/img/play.png')}}" /></div><img src="{{ url('public/img/'.$movie['thumb'])}}" alt="" class="img-responsive" />
        <div class="main__citem-des">
          <h2>{{ $movie['name'] }}</h2><span>#700</span>
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