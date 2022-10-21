@extends('frontend.layouts.auth_layout')
@section('title') Login @parent @endsection

@section('content')
    <div class="login-logo">
      <a href="#"><b>ระบบ มคอ.3, มคอ.5</b>Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form action="{{url('backend/dashboard')}}" method="get">
          <div class="mb-3 input-group">
            <input type="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="mb-3 input-group">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="mb-3 text-center social-auth-links">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="mr-2 fab fa-facebook"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="mr-2 fab fa-google-plus"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
  
        <p class="mb-1 text-center">
          <a href="{{url('forgotpass')}}">I forgot my password</a>
        </p>
        <p class="mb-0 text-center">
          <a href="{{url('register')}}" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  <!-- /.login-box -->
  @endsection
