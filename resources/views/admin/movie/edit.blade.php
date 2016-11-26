@extends('admin.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Movies manager</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create new movie</div>
                <div class="panel-body">
                    <div class="col-lg-7">
                        @include('admin.component.alertForm')
                        <form class="form-horizontal" action="{!! route('movie.store') !!}" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">Movie name</label>
                                <div class="col-sm-9">
                                    <input type="txt" class="form-control" id="txtName" name="txtName" value="{!! $movie['name'] !!}" placeholder="Please enter movie name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtStatus" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="txtStatus" id="txtStatus" class="form-control">
                                        <option value="stoped" selected="{!! $movie['status'] === 'stoped' !!}">Stoped</option>
                                        <option value="continue" selected="{!! $movie['status'] === 'continue' !!}">Continue</option>
                                        <option value="completed" selected="{!! $movie['status'] === 'completed' !!}">Completed</option>
                                    </select>
                                    <!--<input type="text" class="form-control" name="txtStatus" id="">-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fileThumb" class="col-sm-3 control-label">Thumb</label>
                                <div class="col-sm-9">
                                    <div id="image-preview" style="background: url('/public/upload/<?php echo $movie['thumb'] ?>'); background-size: cover; background-position: center center">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" accept="image/*" name="fileThumb" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtNumber" class="col-sm-3 control-label">Total Episodes</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="txtNumber" value="{!! $movie['total_episodes'] !!}" name="txtNumber" placeholder="Please enter total episode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDescription" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="txtDescription" name="txtDescription" class="form-control" rows="5" id="comment" placeholder="Please enter description">{!! $movie['description'] !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtYear" class="col-sm-3 control-label">Year</label>
                                <div class="col-sm-9">
                                    <select name="txtYear" id="txtYear" class="selectpicker form-control" data-live-search="true">
                                        @foreach($years as $year)
                                            <option value="{!! $year['id'] !!}" selected="{!! $year['id'] === $movie['year_id'] !!}">{!! $year['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSeason" class="col-sm-3 control-label">Season</label>
                                <div class="col-sm-9">
                                    <select name="txtSeason" id="txtSeason" class="selectpicker form-control" data-live-search="true">
                                        @foreach($seasons as $season)
                                            <option value="{!! $season['id'] !!}" selected="{!! $season['id'] === $movie['season_id'] !!}">{!! $season['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtProducer" class="col-sm-3 control-label">Producer</label>
                                <div class="col-sm-9">
                                    <select name="txtProducer[]" id="txtProducer" class="selectpicker form-control" data-live-search="true" multiple>
                                        @foreach($producers as $key => $producer)
                                            <option value="{!! $producer['id'] !!}">{!! $producer['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtGenre" class="col-sm-3 control-label">Genre</label>
                                <div class="col-sm-9">
                                    <select name="txtGenre[]" id="txtGenre" class="selectpicker form-control" data-live-search="true" multiple>
                                        @foreach($genres as $genre)
                                            <option value="{!! $genre['id'] !!}">{!! $genre['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtFansub" class="col-sm-3 control-label">Fansub</label>
                                <div class="col-sm-9">
                                    <select name="txtFansub[]" id="txtFansub" class="selectpicker form-control" data-live-search="true" multiple>
                                        @foreach($fansubs as $fansub)
                                            <option value="{!! $fansub['id'] !!}">{!! $fansub['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtKeyword" class="col-sm-3 control-label">Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" name="txtKeyword" class="form-control tokenfield" id="tokenfield-typeahead" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
<?php
    $arrayKeywords = [];
    $arrayIds = [];
    $arrayProducers = [];
    $arrayGenres = [];
    $arrayFansubs = [];
?>
@foreach($keywords as $keyword)
    {!! array_push($arrayKeywords, $keyword['name']) !!}
    {!! array_push($arrayIds, $keyword['id']) !!}
@endforeach

@foreach($producer_movies as $producer_movie)
    {!! array_push($arrayProducers, $producer_movie['id']) !!}
@endforeach

@foreach($genre_movies as $genre_movie)
    {!! array_push($arrayGenres, $genre_movie['id']) !!}
@endforeach

@foreach($fansub_movies as $fansub_movie)
    {!! array_push($arrayFansubs, $fansub_movie['id']) !!}
@endforeach

<script>
    window.onload = function() {
        // tranform php data to js and pass to tokenfield
        var dataKeywords = <?php echo json_encode($arrayKeywords, JSON_UNESCAPED_UNICODE); ?>;
        var dataIds = <?php echo json_encode($arrayIds, JSON_UNESCAPED_UNICODE); ?>;
        var dataJS = [];
        for(let i = 0; i < dataKeywords.length; i++) {
            dataJS.push({value: dataIds[i], label: dataKeywords[i]});
        }
        tokenfield(dataJS);

        // upload file image preview
        $.uploadPreview({
            input_field: "#image-upload",
            preview_box: "#image-preview",
            label_field: "#image-label"
        });

        // producer seleted default
        var dataProducer = <?php echo json_encode($arrayProducers, JSON_UNESCAPED_UNICODE); ?>;
        $('#txtProducer').selectpicker('val', dataProducer);

        // genre seleted default
        var dataGenre = <?php echo json_encode($arrayGenres, JSON_UNESCAPED_UNICODE); ?>;
        $('#txtGenre').selectpicker('val', dataGenre);

        // fansub seleted default
        var dataFansub = <?php echo json_encode($arrayFansubs, JSON_UNESCAPED_UNICODE); ?>;
        $('#txtFansub').selectpicker('val', dataFansub);
    }
</script>
@endsection()