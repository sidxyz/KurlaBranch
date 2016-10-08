@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-12">
          <h3>Reset Password</h3>
          <br>
        </div>
        <div class="col-md-5 " style="border:1px solid black; border-radius:2px;">
          <form class="form-horizontal col-md-12">
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-10">
                <label class="control-label" style="font-size:15px;" for="usernameL">New Password</label>
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
              <div class=" col-md-10">
                <label class="control-label" style="font-size:15px;" for="usernameL">Re-enter New Password</label>
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
              <div class=" col-md-8">
                <button id="resetlink" class="btn btn-success  btn-responsive col-md-12" name="resetlink"><a href="SignInPage" style="text-decoration: none;color:white;">Reset Password</a></button>
              </div>
            </div>
            <div class="form-group col-md-12">
              <div class=" col-md-10">
                <button id="canclelink" name="canclelink" class="btn btn-success btn-responsive col-md-5">Cancle</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection