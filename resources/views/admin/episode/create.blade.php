@extends('admin.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create {{ $movie->name }} episode</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create new episode</div>
                <div class="panel-body">
                    <div class="col-lg-7">
                        @include('admin.component.alertForm')
                        <form class="form-horizontal" action="{!! route('episode.store') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="txtMovieId" value="{!! $id !!}">
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">Episode name</label>
                                <div class="col-sm-9">
                                    <input type="txt" class="form-control" id="txtName" name="txtName" placeholder="Please enter episode name">
                                </div>
                            </div>
                            @for($i = 0; $i < 5; $i++)
                            <div class="form-group">
                                <label for="txtLink" class="col-sm-3 control-label">Episode link {{$i + 1}}</label>
                                <div class="col-sm-9">
                                    <input type="txt" class="form-control" id="txtLink" name="txtLink[]" placeholder="Please enter episode link">
                                </div>
                            </div>
                            @endfor
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success">Create</button>
                                    <a type="button" class="btn btn-default" href="{!! route('episode.index', $id) !!}">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
@endsection()