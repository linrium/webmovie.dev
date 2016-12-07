<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li><a href="{!! route('home') !!}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
        <li><a href="{!! route('year.index') !!}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Years</a></li>
        <li><a href="{!! route('season.index') !!}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Seasons</a></li>
        <li><a href="{!! route('genre.index') !!}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Genres</a></li>
        <li><a href="{!! route('keyword.index') !!}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Keywords</a></li>
        <li><a href="{!! route('producer.index') !!}"><svg class="glyph stroked monitor"><use xlink:href="#stroked-monitor"></use></svg> Producers</a></li>
        <li><a href="{!! route('fansub.index') !!}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Fansubs</a></li>
        <li><a href="{!! route('movie.index') !!}"><svg class="glyph stroked video"><use xlink:href="#stroked-video"/></svg> Movies</a></li>
        <li><a href="{!! route('user.index') !!}"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg> Users</a></li>
    </ul>

</div><!--/.sidebar-->