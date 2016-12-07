<div id="navmenu" class="row topmenu" ng-controller="NavController">
    <div class="col-md-12">
        <div class="wrapper">
            <nav class="navbar topmenu__nav">
                <button type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation" class="navbar-toggler hidden-lg-up"><i class="fa fa-bars"></i></button>
                <div id="navbarResponsive" class="collapse navbar-toggleable-md">
                    <ul class="nav navbar-nav"> 
                        <li class="nav-item active hvr-underline-from-left"><a href="" ui-sref="home" ui-sref-active="active" class="nav-link">Home<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="#newanime" target="_self" class="nav-link" >Tập mới</a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="#trending" target="_self" class="nav-link">Xếp hạng</a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="#popular" target="_self" class="nav-link">Nhiều người xem</a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="" ui-sref="lab" ui-sref-active="active" class="nav-link">Bài TH</a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="" ui-sref="about" ui-sref-active="active" class="nav-link">Về website</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<script>
        // scroll fixed menu
    let nav = $('#navmenu');
    $(document).scroll(function (event) {
        if ($(this).scrollTop() >= 400) {
            nav.addClass('fix-nav');
            $('#search-bar').addClass('fix-search');
        } else {
            nav.removeClass('fix-nav');
            $('#search-bar').removeClass('fix-search');
        }
    });
</script>
