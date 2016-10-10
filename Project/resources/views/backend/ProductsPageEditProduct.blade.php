@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="col-md-5">
            <label>
              <h4>Products/Edit Prodcuts</h4>
            </label>
          </div>
          <div class="form-group col-md-3 col-md-push-4">
            <div class="col-md-5">
              <button class="btn btn-success">Save</button>
            </div>
            <div class="col-md-4" style="margin-left:8%;">
              <button class=" btn btn-success">Cancel</button>
            </div>
          </div>
          <div class="col-md-12" style="border:1px solid; border-radius:0px;padding: 5%;">
            <div class="col-md-6 text-center">
              <form class="form-horizontal">
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Product Name</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text" value="Redmi Note 3" >
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Quantity in stock</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Quantityinstock" name="Quantityinstock" placeholder="" class="form-control input-md" type="text" value="5000">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Price per Unit</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Priceperunit" name="Priceperunit" placeholder="" class="form-control input-md" type="text" value="12000">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Category</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <select class="col-md-12" style="height: 5%;">
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
                    <input id="ram" name="ram" placeholder="" class="form-control input-md" type="text" value="2 GB">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Processors</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="processor" name="processor" placeholder="" class="form-control input-md" type="text" value="Snapdragon">
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
                    <input type="file" name="file" id="fileupload" name="image" class="img">
                    <span class="value"></span>
                    <span class="bt-value">Upload</span>
                  </div>
                </div> 

                </div>
                <!-- Text input-->
                <div class="form-group col-md-9">
                <div class="col-md-10 col-md-push-3">
                  <div id="dvPreview" style="border:1px solid; height:20%;">
                    
                    
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
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection 
@section('script')
<script type="text/javascript">
$(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:127px;width: 205px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
</script>
@stop