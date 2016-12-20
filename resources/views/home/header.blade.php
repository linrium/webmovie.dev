<header id="home" class="row header">
    <div class="col-md-12">
        <div class="wrapper">
        <div class="header__search row">
            <div class="col-md-4 header__search--center">
                <form action="{{ route('search.show') }}" method="get">
                    <input type="search" placeholder="What are you looking for ?" name="q" id="search-bar" class="form-control"/>
                </form>
            
            </div>
        </div>
        <div class="header__album">
            <h2>Dragon Ball Super</h2><small>new episode</small>
            <div class="header__album--btn">
            <button class="btn btn-outline-primary btn-active" >Play</button>
            <button class="btn btn-outline-primary">follow</button>
            </div>
        </div>
        </div>
    </div>
</header>
