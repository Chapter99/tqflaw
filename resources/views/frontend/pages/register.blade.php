@extends('frontend.layouts.auth_layout')
@section('title') Register @parent @endsection

@section('content')
    <div class="login-logo">
      <a href="#"><b>ระบบ มคอ.3, มคอ.5</b>STOCK</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>
    
          <form action="#" method="post">
            <div class="mb-3 input-group">
              <input type="text" class="form-control" placeholder="Full name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
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
            <div class="mb-3 input-group">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                  <label for="agreeTerms">
                   I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <div class="text-center social-auth-links">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
              <i class="mr-2 fab fa-facebook"></i>
              Sign up using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
              <i class="mr-2 fab fa-google-plus"></i>
              Sign up using Google+
            </a>
          </div>
    
          <p class="mt-3 text-center"><a href="{{url('login')}}" class="text-center">I already have a membership</a></p>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->

  @endsection
