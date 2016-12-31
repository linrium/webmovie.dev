@extends('home.master')
@section('content')
<div id="newEpisodes" class="main__citem animated fadeInDown">
  <div class="row main__header">
    <div class="col-md-9 col-sm-7 col-xs-5">
      <h3>All Fansubs</h3>
    </div>
  </div>

  <div class="row main__citem-content">
    @foreach($fansubs as $fansub)
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" >
      <div class="main__citem-item">
        <a href="{!! route('fansubpage.show', $fansub['id']) !!}">
          <div class="main__citem-des">
            <h2>{{ $fansub['name'] }}</h2>
          </div>
        </a>
        
      </div>
    </div>
    @endforeach
  </div>
</div>

<script>
  window.document.title = "Webmovie - Trang xem anime online";
</script>
@endsection()