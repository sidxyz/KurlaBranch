@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="modal fade" id="myModalDele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class="modal-content">
		                  <!-- Modal Header -->
		                  <div class="modal-header" style="background-color:grey;">
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Product</h4>
		                  </div>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
		                      <div class="form-group">
		                        <p>If You Delete This Product,you will no longer See it  in front end or backend.</p>
                            <p> Are you sure you want to Delete this product?</p>
		                      </div>
		                      <div class="form-group">
		                        <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Delete</button>
		                        <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancle</button>
		                      </div>
		                    </form>
		                  </div>
		                </div>
		              </div>
</div>

<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          
          <div class="col-md-9">
          	<label ><h4 class="col-md-12">Products</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
               	<a href="ProductsPageAddProduct"><button type="button" class="btn btn-success col-md-8 btn-responsive">Add Products</button></a>
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price Per Unit</th>
                    <th>Units in Inventory</th>
                    <th>Added On</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th id="FooterHidden"></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Redmi Note 3</td>
                    <td>Mobiles</td>
                    <td>12000</td>
                    <td>5000</td>
                    <td>1/02/15</td>
                    <td>
                    <button class="btn tddata"><a href="ProductsPageEditProduct" style="text-decoration:none;color:blue;">Edit</a></button><button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>
                   </td>
                  </tr>
                    
                  <tr>
                    <td>2</td>
                    <td>Samsung Galaxy J5</td>
                    <td>Mobiles</td>
                    <td>15000</td>
                    <td>4500</td>
                    <td>15/09/15</td>
                    <td>
                    <button class="btn tddata"><a href="ProductsPageEditProduct" style="text-decoration:none;color:blue;">Edit</a></button><button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>
                   </td>
                  </tr>
                    
                	<td>3</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>      
	            	<td></td>
	            	<td></td>
                  </tr>  

                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
@endsection    

@section('script')
<script type="text/javascript" src="js/simpletableuser.js"></script>
@stop
