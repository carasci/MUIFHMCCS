@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h1 class="page-header">
      Login
    </h1>

    {{ Form::open(array('route' => 'user.dologin', 'class' => 'form-horizontal')) }}
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember_me" value="true"> Remember me
            </label>
          </div>
        </div>
        <div class="col-sm-2" style="padding-top: 7px; text-align: right">
          <a href="{{ url('password/remind') }}">Forgot Password?</a>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
          <button type="submit" class="btn btn-default">Log In</button>
        </div>
      </div>
    {{ Form::close() }}
    
</div>
@endsection
