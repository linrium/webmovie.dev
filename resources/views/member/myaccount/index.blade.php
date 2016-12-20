@extends('member.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Account manager</h1>
            @include('member.component.alert')
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn btn-success" href="{!! route('myaccount.edit', $user['id']) !!}">Change username</a>
                    <a class="btn btn-success" href="{!! route('myaccount.editPassword', $user['id']) !!}">Change password</a>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="txtUsername" value="{!! old('txtUsername', isset($user) ? $user['username'] : '') !!}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Email address</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputPassword3" placeholder="Email" name="txtEmail" value="{!! old('txtEmail', isset($user) ? $user['email'] : '') !!}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Role" name="txtRole" value="{!! old('txtRole', isset($user) ? $user['role'] : '') !!}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
@endsection()