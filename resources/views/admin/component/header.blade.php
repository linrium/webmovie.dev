<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>WebMovie</span>Admin</a>
            <ul class="user-menu">
                
                <li>
                    <form action="{!! route('logout') !!}" method="post">
                        <button type="submit" style="background: none; border: none"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</button>
                    </form>
                </li>
            </ul>
        </div>
                        
    </div><!-- /.container-fluid -->
</nav>