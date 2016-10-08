@extends('backend.layout')
@include('backend.partials.header')
@section('content')
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="container col-md-12">
            <label class="col-md-1">DASHBOARD</label>
            <div class="col-md-3 col-md-push-5">
              <div class="col-md-12 col-md-pull-1">
                <label class="col-md-1 col-md-pull-1">TO</label>
                <input class="col-md-7" id="date" name="date" placeholder="/    /" type="text">
                <label class="input-group  col-md-1" for="date">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
            <div class="col-md-3 col-md-push-5">
              <div class="col-md-12 col-md-push-2">
                <label class="col-md-1 col-md-pull-2">FROM</label>
                <input class="col-md-7 " id="date1" name="date1" placeholder="/    /" type="text">
                <label class="input-group col-md-1" for="date1">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-12" style=" border:1px solid;">
            <div id="chart-container" class="col-md-12"></div>
          </div>
          
          <div class="container col-md-12 col-md-pull-1">
            
            <div class="col-md-3 col-md-push-1" style=" border:1px solid;margin-top:5%; width: 27%;height:30%;">
              <lable>
                <b>Most Sold Products</b>
              </lable>
              <p style="margin-top:10%;">List 10 Products</p>
            </div>
            
            <div class="col-md-3 col-md-push-2" style=" border:1px solid; margin-top: 5%; width:27% ;height:30%;">
              <lable>
                <b>Most Profitable Products</b>
              </lable>
              <p style="margin-top:10%;">List 10 Products</p>
            </div>
            
            <div class="col-md-3 col-md-push-3 " style=" border:1px solid; margin-top: 5%; width: 27%;height:30%;">
              <lable>
                <b>Most Important Clients</b>
              </lable>
              <p style="margin-top:10%;">List 10 Clients</p>
            </div>
          
          </div>

        </div>
      </div>
    </div>
    
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="js/charts.js"></script>
  @endsection    
  