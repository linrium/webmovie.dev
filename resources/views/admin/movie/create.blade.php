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
                                    <input type="txt" class="form-control" id="txtName" name="txtName" placeholder="Please enter movie name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtStatus" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <select name="txtStatus" id="txtStatus" class="form-control">
                                        <option value="stoped">Stoped</option>
                                        <option value="continue">Continue</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                    <!--<input type="text" class="form-control" name="txtStatus" id="">-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fileThumb" class="col-sm-3 control-label">Thumb</label>
                                <div class="col-sm-9">
                                    <div id="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="fileThumb" id="image-upload" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtNumber" class="col-sm-3 control-label">Total Episodes</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="txtNumber" name="txtNumber" placeholder="Please enter total episode">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtDescription" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="txtDescription" name="txtDescription" class="form-control" rows="5" id="comment" placeholder="Please enter description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtYear" class="col-sm-3 control-label">Year</label>
                                <div class="col-sm-9">
                                    <select name="txtYear" id="txtYear" class="selectpicker form-control" data-live-search="true">
                                        @foreach($years as $year)
                                            <option value="{!! $year['id'] !!}">{!! $year['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtSeason" class="col-sm-3 control-label">Season</label>
                                <div class="col-sm-9">
                                    <select name="txtSeason" id="txtSeason" class="selectpicker form-control" data-live-search="true">
                                        @foreach($seasons as $season)
                                            <option value="{!! $season['id'] !!}">{!! $season['name'] !!}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtProducer" class="col-sm-3 control-label">Producer</label>
                                <div class="col-sm-9">
                                    <select name="txtProducer[]" id="txtProducer" class="selectpicker form-control" data-live-search="true" multiple>
                                        @foreach($producers as $producer)
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
                                    <!--<input type="text" name="txtKeyword" class="form-control tokenfield" id="tokenfield-typeahead" value="" />-->
                                    <select name="txtKeyword[]" data-selected-text-format="count > 3" id="txtKeyword" class="selectpicker form-control" data-live-search="true" multiple>
                                        @foreach($keywords as $keyword)
                                            <option value="{!! $keyword['id'] !!}">{!! $keyword['name'] !!}</option>
                                        @endforeach
                                    </select>
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

<script>
    window.onload = function() {
        // upload file image preview
        $.uploadPreview({
            input_field: "#image-upload",
            preview_box: "#image-preview",
            label_field: "#image-label"
        });
    }
</script>
@endsection()