@extends('member.master')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit my account manager</h1>
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change username</div>
                <div class="panel-body">
                    <div class="col-lg-7">
                        @include('member.component.alertForm')
                        @include('member.component.alert')
                        <form class="form-horizontal" action="{!! route('myaccount.updatePassword', $user['id']) !!}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{ $user['id'] }}">
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">Old password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="txtOldPassword" name="txtOldPassword" placeholder="Please enter old password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">New password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword" placeholder="Please enter new password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtName" class="col-sm-3 control-label">New repassword</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="txtNewRepassword" name="txtNewRepassword" placeholder="Please enter new repassword">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('myaccount.index') }}" class="btn btn-default">Cancel</a>
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