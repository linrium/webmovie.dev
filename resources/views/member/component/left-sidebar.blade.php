<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="{!! route('myaccount.index') !!}">{{$currentUser['username']}}</a></li>
        <li><a href="{!! route('home.index') !!}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
        <li><a href="{!! route('myaccount.index') !!}"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"/></svg> My Account</a></li>
    </ul>

</div><!--/.sidebar-->