@extends('admin.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Years manager</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update year</div>
                <div class="panel-body">
                    <div class="col-lg-7">
                        @include('admin.component.alertForm')
                        <form class="form-horizontal" action="{!! route('year.update', $year['id']) !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{ $year['id'] }}">
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">Year name</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="txtName" name="txtName" value="{!! old('txtName', isset($year) ? $year['name'] : null) !!}" placeholder="Please enter year name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('year.index') }}" class="btn btn-default">Cancel</a>
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