@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-12">
          <h3>Sign In</h3>
          <br>
        </div>
        <div class="col-md-5 " style="border:1px solid black; border-radius:2px;">
          <form class="form-horizontal col-md-12">
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-5 col-md-push-3">
                <label class="control-label" style="font-size:20px;" for="usernameL">Username</label>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-11">
                <input id="username" name="username" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-10 col-md-push-3">
                <label class="control-label" style="font-size:20px;" for="usernameL">Password</label>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-11">
                <input id="username" name="username" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-7 col-md-push-4">
                <button id="signin" class="btn btn-success  btn-responsive" name="resetlink">
                <a href="UserOrderHistoryPage" style="text-decoration: none; color:white;">Sign in</a></button>
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class="col-md-12 col-md-push-4">
                <a href="ResetPasswordPage" class="col-md-8 col-md-pull-2" style="font-size:17px; color:#1e88e5;text-decoration:underline;">Forget Password?</a>
              </div>
              <div class="col-md-12"> 
              <br/>
              </div>
            </div>
            	
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection