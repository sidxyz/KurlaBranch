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
            <form class="form-horizontal" action="ProductsPage" method="POST">
              <!-- Text input-->
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Product Name</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Productname" name="name_pro" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Quantity in stock</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Quantityinstock" name="quantity" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Price per Unit</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="Priceperunit" name="price_pro" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Category</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <select class="col-md-12" style="height:5%;" name="category_name">
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
          <style>
          #imagePreview {
              width: 180px;
              height: 180px;
              background-position: center center;
              background-size: cover;
              -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
              display: inline-block;
          }
          </style>
          <div class="col-md-6 text-center" style=" margin-top:-1%;">
            <form class="form-horizontal">
              <div class="form-group col-md-12 ">
                <div class="col-md-3 col-md-pull-2;">
                  <label class="control-label" for="upload">Images</label>
                </div>
                
                <div class="col-md-7 col-md-pull-1">
                  <div class="file col-md-7">
                    <input type="file" name="file" id="uploadFile" name="image" class="img">
                    <span class="value"></span>
                    <span class="bt-value">Upload</span>
                  </div>
                </div> 
              
              </div>
              <!-- Text input-->
              <div class="form-group col-md-9">
                <div class="col-md-10 col-md-push-3">
                  <div id="imagePreview" style="border:1px solid; height:20%;">
                    
                    
                  </div>
                </div>
                <div class="col-md-2 col-md-push-2">
                  <span class="glyphicon glyphicon-trash"></span>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                
                <div class="col-md-8 col-md-push-3">
                  <input id="processor" name="processor" placeholder="" class="col-md-12 col-md-pull-2 form-control input-md" type="text">
                </div>
                <div class="col-md-1 col-md-push-1" style="margin-top:2%;">
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
                  <button class=" btn btn-success">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
</div>
@endsection    
@section('script')
<script type="text/javascript">
$(function() {
    $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>
@stop