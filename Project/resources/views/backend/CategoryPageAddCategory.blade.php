@extends('backend.layout')
@include('backend.partials.header')
@section('content')
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px; padding-bottom:5%;">
          <div class="col-md-12">
            <label>
              <h4>Categories/Add Category</h4>
            </label>
          </div>
          <div class="col-md-6 text-center">
            <form class="form-horizontal">
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Category Title</label>
                </div>
                <div class="col-md-7 col-md-pull-2">
                  <input id="ctitle" name="title" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Multiple Radios (inline) -->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="radios">Is Visible</label>
                </div>
                <div class=" col-md-7 col-md-pull-4">
                  <label class="radio-inline col-md-push-1" for="radios-0">
                    <input name="radios" id="radios-0" value="true" checked="checked" style="font-size:15px;" type="radio">Ture</label>
                  <label class="radio-inline col-md-push-1" for="radios-1">
                    <input name="radios" id="radios-1" value="false" style="font-size:15px;" type="radio">False</label>
                </div>
              </div>
              <div class="form-group col-md-12 ">
              
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" for="upload">Icon</label>
                </div>
				
			         	<div class="col-md-7 col-md-pull-2">
                  <div class="file col-md-7">
                    <input type="file" name="file" id="id_media">
                    <span class="value"></span>
                    <span class="bt-value">Upload</span>
                  </div>
                </div>
              
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-7 col-md-push-3">
                  <div contenteditable="true" style="border: 1px solid; height: 10%;width:40%; ">
                    <img src="">
                  </div>
                  <label class="col-md-9 col-md-push-4" style="margin-top:-20%">Thumbnail of icon.</label>
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-md-5 ">
                   <button class="btn btn-success col-md-5">
                      <a href="CategoryPageProductListing" style="text-decoration:none; color: white;">Add</a>
                   </button>
                </div>
                <div class="col-md-7 col-md-push-2">
                  <button class="btn btn-success col-md-5">Cancle</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

