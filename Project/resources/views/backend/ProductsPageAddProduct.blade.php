@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="col-md-12">
            <label>
              <h4>Products/Add Products</h4>
            </label>
          </div>
          <div class="col-md-12" style="border:1px solid; border-radius:0px; padding: 5%;">
          <div class="col-md-6 text-center">
            <form class="form-horizontal">
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Product Name</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Quantity in stock</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Quantityinstock" name="Quantityinstock" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Price per Unit</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Priceperunit" name="Priceperunit" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Category</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <select class="col-md-12">
                    <option selected="" value="mobiles">Mobiles</option>
                    <option value="tablets">Tablets</option>
                    <option value="laptops">Laptops</option>
                    <option value="motherboards">Motherboards</option>
                    <option value="processors">Processors</option>
                  </select>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Ram</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="ram" name="ram" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Processor</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="processor" name="processor" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 text-center" style=" margin-top:-1%;">
            <form class="form-horizontal">
              <div class="form-group col-md-12 ">
                <div class="col-md-3 col-md-pull-2;">
                  <label class="control-label" for="upload">Images</label>
                </div>
                
                <div class="col-md-7 col-md-pull-1">
                  <div class="file col-md-7">
                    <input type="file" name="file" id="id_media">
                    <span class="value"></span>
                    <span class="bt-value">Upload</span>
                  </div>
                </div> 
              
              </div>
              <!-- Text input-->
              <div class="form-group col-md-9">
                <div class="col-md-10 col-md-push-3">
                  <div contenteditable="true" style="border:1px solid; height:20%;">
                    <img src="">
                    <label class="col-md-12" style="margin-top:15%">Thumbnail of the First Image</label>
                  </div>
                </div>
                <div class="col-md-2 col-md-push-2">
                  <span class="glyphicon glyphicon-trash"></span>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-4">
                  <label class="control-label" style="font-size:15px;" for="Title">Processor</label>
                </div>
                <div class="col-md-6">
                  <input id="processor" name="processor" placeholder="" class="col-md-12 col-md-pull-2 form-control input-md" type="text">
                </div>
                <div class="col-md-1 col-md-pull-1" style="margin-top:2%;">
                  <span class="glyphicon glyphicon-trash"></span>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12 col-md-push-1">
                <div class="col-md-5">
                  <span class="glyphicon glyphicon-plus"></span>
                </div>
                <div class="col-md-8 col-md-push-1" style="margin-top:-4.2%;">
                  <label class="col-md-12">Add more images</label>
                </div>
              </div>
              <div class="form-group col-md-7 col-md-push-1">
                <div class="col-md-7">
                  <button class="btn btn-success">Add Product</button>
                </div>
                <div class="col-md-5 col-md-push-2">
                  <button class=" btn btn-success">Cancle</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
</div>
@endsection    