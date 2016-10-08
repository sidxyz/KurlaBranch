@extends('frontend.layout')
@include('frontend.partials.header3')
@section('content')
    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-8" style="margin-top:-2.6%;margin-left:-2%;">
          <h3>My Profile/Edit</h3>
          <br>
        </div>
        <div class="col-md-6 text-center">
          <form class="form-horizontal">
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Fname">First Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Fname" name="Fname" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Lname">Last Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Lname" name="Lname" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Multiple Radios (inline) -->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="radios">Gender</label>
              </div>
              <div class=" col-md-7 col-md-pull-4">
                <label class="radio-inline col-md-push-1" for="radios-0">
                  <input name="radios" id="radios-0" value="male" checked="checked" style="font-size:15px;" type="radio">Male</label>
                <label class="radio-inline col-md-push-1" for="radios-1">
                  <input name="radios" id="radios-1" value="female" style="font-size:15px;" type="radio">Female</label>
              </div>
            </div>
            <div class="form-group col-md-12 ">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" for="date">Date Of Birth</label>
              </div>
              <div class=" col-md-7 col-md-pull-2">
                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text">
                <label class="input-group col-md-push-12 col-md-1" for="date">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="ContactNum">Contact Number</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="ContactNum" name="ContactNum" placeholder="" class="form-control input-md" type="text">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="email">Email Address</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="email" name="email" placeholder="" class="form-control input-md" type="email">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 ">
          <!--Text Area-->
          <div class="form-group">
            <div class="col-md-5 col-md-pull-1">
              <label class="control-label" style="font-size:15px;" for="radios">Permanent Address</label>
            </div>
            <div class="col-md-7 col-md-pull-2">
              <textarea rows="4" class="col-md-12" name="permanentaddress"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <!--Pincode-->
            <div class="form-group">
              <div>
                <br>
              </div>
              <div class="col-md-4 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="radios">Pincode</label>
              </div>
              <div class="col-md-8 col-md-pull-1">
                <input type="text" name="pincode" class="col-md-8 ">
              </div>
            </div>
          </div>
          <!-- Button -->
          <div class="col-md-12">
            <!--DoBreak-->
            <br>
            <div class="form-group col-md-7 col-md-pull-1 ">
              <button id="save" name="save" class="btn btn-success">Save</button>
            </div>
            <!-- Button -->
            <div class="form-group col-md-5 col-md-pull-4">
              <button id="cancle" name="cancle" class="btn btn-success">Cancle</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
  @endsection