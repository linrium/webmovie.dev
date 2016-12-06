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
            <h1 class="page-header">Users manager</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create new user</div>
                <div class="panel-body">
                    <div class="col-lg-7">
                        @include('admin.component.alertForm')
                        <form class="form-horizontal" action="{!! route('user.store') !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="txt" class="form-control" id="txtName" value="{!! old('txtName') !!}" name="txtName" placeholder="Please enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtEmail" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="txtEmail" value="{!! old('txtEmail') !!}" name="txtEmail" placeholder="Please enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtPassword" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Please enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtRepassword" class="col-sm-3 control-label">Repassword</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="txtRepassword" name="txtRepassword" placeholder="Please enter user name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtRepassword" class="col-sm-3 control-label">Role</label>
                                <div class="col-sm-9">
                                    <input type="radio" class="" id="radioRole" value="admin" name="radioRole"> Admin
                                    <input type="radio" class="" checked id="radioRole" value="member" name="radioRole"> Member
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
@endsection()