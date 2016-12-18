@extends('home.master')
@section('content')
<div class="main__watch animated fadeInDown">
    <div class="row main__watch-header">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="main__watch-video">
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="100%" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="main__watch-episode">
                <ul>
                    @foreach($episodes as $ep)
                    <li class="hvr-bounce-to-right list-episode-next">
                        <a>
                            <div class="list-video clearfix">
                                <img src="{{ url('public/img/'.$movie['thumb']) }}" width="100%" alt=""/>
                            </div>
                        </a>
                        <div class="main__watch-suggest-episode"> <a href="">Episode {!! $ep['name'] !!}</a><small>5 views</small></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row main__watch-content">
        <div class="col-md-8">
            <div class="main__watch-info">
                <h1>{!! $movie['name'] !!}</h1>
                <div class="row">
                    <div class="col-md-8"><span id="follow"><i class="fa fa-heart"></i> {{ $episode['likes'] }} likes</span></div>
                    <div class="col-md-4"><span id="views" class="hvr-underline-from-left"> {{ $episode['views'] }} views</span></div>
                </div>
                <span class="span-inline"><i class="fa fa-list"></i> Genre: {!! $arrGenres !!}</span>
                <span class="span-inline"><i class="fa fa-building"></i> Producer: {!! $arrProducers !!}</span>
                
                <div class="description">{!! $movie['description'] !!}</div>
            </div>
            <div class="main__watch-comments">
                <div data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5" class="fb-comments"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main__watch-suggest">
                <div class="main__watch-episode">
                    <ul>
                        @foreach($movies as $m)
                        <li class="hvr-bounce-to-right">
                            <a>
                                <div class="list-video clearfix">
                                    <img src="{{ url('public/img/'.$m['thumb']) }}" alt="" width="100%"/>
                                </div>
                            </a>
                            <div class="main__watch-suggest-episode"> <a href="">{!! $m['name'] !!}</a><small>{!! $m['views'] !!} views</small></div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  window.document.title = "Webmovie - Xem anime online";
</script>
@endsection