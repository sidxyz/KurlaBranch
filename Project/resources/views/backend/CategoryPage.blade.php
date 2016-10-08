@extends('backend.layout')
@include('backend.partials.header')
@section('content')
  <!-- Modal -->
  <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header" style="background-color:grey;">
                        <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Category</h4>
                      </div>
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <p>If You Delete This Category,you will no longer See it  in fornt end.</p>
                            <p>Are you sure you want to Delete this category?</p>
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
          
          <div class="col-md-3 col-md-push-2">
          	<label ><h3 class="col-md-4 col-md-pull-12">Categories</h3></label>
            </div>
          
            <div class="col-md-3 col-md-push-7">
               	<a href="CategoryPageAddCategory"><button type="button" class="btn btn-success col-md-8 btn-responsive">Add Categories</button></a>
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Category</th>
                    <th>Is Visible</th>
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
                    <td>Mobiles</td>
                    <td><input type="checkbox" checked="true"/>True</td>
                    <td><a href="CategoryPageEditCategory"><button class="btn tddata">Edit</button></a><button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Delete</button><a href="CategoryPageListattributes"><button class="btn tddata">List Attributes</button></a>
                    </td>
                  </tr>
                    
                    <tr>
	                    <td>2</td>
	                    <td>Tablets</td>
	                    <td><input type="checkbox" checked="true"/>True</td>
	                    <td><a href="CategoryPageEditCategory"><button class="btn tddata">Edit</button></a><button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Delete</button><a href="CategoryPageListattributes"><button class="btn tddata">List Attributes</button></a></td>
		         </tr>

                <tr>
	            	<td>3</td>
	            	<td>Laptops</td>
	            	<td><input type="checkbox" checked="true"/>True</td>
	            	<td><a href="CategoryPageEditCategory"><button class="btn tddata">Edit</button></a><button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Delete</button><a href="CategoryPageListattributes"><button class="btn tddata">List Attributes</button></a></td>
                </td>
                </tr>


                <tr>
	            	<td>4</td>
	            	<td>Motherboards</td>
	                <td><input type="checkbox" checked="true"/>True</td>
	            	<td><a href="CategoryPageEditCategory"><button class="btn tddata">Edit</button></a><button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Delete</button><a href="CategoryPageListattributes"><button class="btn tddata">List Attributes</button></a></td>      
                </tr>

                  
                <tr>
	            	<td>5</td>
	            	<td>Processors</td>
	            	<td><input type="checkbox" checked="true"/>True</td>
	            	<td><a href="CategoryPageEditCategory"><button class="btn tddata">Edit</button></a><button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Delete</button><a href="CategoryPageListattributes"><button class="btn tddata">List Attributes</button></a></td>      
                </tr>


                <tr>
	            	<td>6</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
                </tr>                  

                <tr>
	            	<td>7</td>
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
<script type="text/javascript" src="js/simpletable.js"></script>
@stop
       