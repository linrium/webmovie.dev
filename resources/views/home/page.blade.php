@extends('home.master')
@section('content')
<div class="main__watch animated fadeInDown">
    <div class="row main__watch-header">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="main__watch-video">
                
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="frame" width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
                    <!--<iframe width="100%" height="100%" src="{!! $links[0]['link'] !!}" frameborder="0" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="main__watch-episode">
                <ul>
                    @foreach($episodes as $ep)
                    <li class="hvr-bounce-to-right list-episode-next {!! $ep['id'] == $episodeId ? 'active-episode' : '' !!}">
                        <a href="{{ route('page.index', ['id'=>$id, 'episodeId'=>$ep['id']]) }}">
                            <div class="list-video clearfix">
                                <img src="{{ url('public/img/'.$movie['thumb']) }}" width="100%" alt=""/>
                            </div>
                        </a>
                        <div class="main__watch-suggest-episode">
                            <a href="">Episode {!! $ep['name'] !!}</a>
                            <small>{{ Counter::show('episodes', $ep['id'] ) }} views</small> <br>
                            <small>{{ $ep['likes'] }} likes</small>
                        </div>
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
                    <div class="col-md-8" style="line-height: 50px;">
                        <span id="likes">
                            <i class="fa fa-heart"></i>
                            {{ $totalLiked }}
                            @if ($isLiked)
                                <form action="{{ route('episode.unlike', ['id' => $likeId, 'epsiode_id' => $episode['id'], 'movie_id' => $movie['id']]) }}" method="post" style="display: inline">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="{{ $likeId }}">
                                    <button style="background: none; border: none; padding: 0; cursor: pointer; margin-top: -5px" type="submit" class="btn btn-error" >Unlike</button>
                                </form>
                            @else
                                <form action="{{ route('episode.like', [ 'id' => $episode['id'], 'movie_id' => $movie['id']]) }}" method="post" style="display: inline">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button style="background: none; border: none; padding: 0; cursor: pointer; margin-top: -5px" type="submit" class="btn btn-error" >Like</button>
                                </form>
                            @endif
                        </span>
                    </div>
                    <div class="col-md-4"><span id="views" class="hvr-underline-from-left"> <span id="count-views" style="display: inline">{{ Counter::showAndCount('episodes', $episode['id'] ) }}</span> views</span></div>
                    {{ Counter::count('movies', $movie['id'] ) }}
                    <?php
                        $count = Counter::show('movies', $movie['id'] );
                        if($count !== $movie['views']) {
                            DB::table('movies')->where('id','=',$movie['id'])->update(['views' => $count ]);
                        }
                    ?>
                </div>
                <span class="span-inline"><i class="fa fa-list"></i> Genre: {!! $arrGenres !!}</span>
                <span class="span-inline"><i class="fa fa-building"></i> Producer: {!! $arrProducers !!}</span>
                <?php $year = DB::table('years')->where('id','=', $movie['id'])->get()->toArray() ?>
                <span class="span-inline"><i class="fa fa-clock-o"></i> Year: <span><a href="{!! route('yearpage.show', $movie['id']) !!}">{{ $year[0]->name }}</a></span></span>
                <span class="span-inline"><i class="fa fa-tags"></i> Tags: {!! $arrTags !!}</span>
                <span class="span-inline"><i class="fa fa-info-circle"></i> Description</span>

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
                            <?php $lastEp = DB::table('episodes')->where('movie_id', $m['id'])->orderBy('id', 'DESC')-> first() ?>
                            <a href="{{ route('page.index', ['id'=>$m['id'], 'episodeId'=>$lastEp->id]) }}">
                                <div class="list-video clearfix">
                                    <img src="{{ url('public/img/'.$m['thumb']) }}" alt="" width="100%"/>
                                </div>
                            </a>
                            <div class="main__watch-suggest-episode">
                                <a href="">{!! $m['name'] !!}</a>
                                <small>{{ Counter::show('movies', $m['id'] ) }} views</small> <br>
                                <small>{!! $m['likes'] !!} likes</small>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {
    window.document.title = "Webmovie - Xem anime online";
    var link = '<?php echo $links[0]['link'] ?>';
    var url = link.replace("watch?v=", "v/");
    $('#frame').attr('src', url);
  });
</script>
@endsection