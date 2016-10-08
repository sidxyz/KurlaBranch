@extends('backend.layout')
@include('backend.partials.header')
@section('content')
  <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class="modal-content">
		                  <!-- Modal Header -->
		                  <div class="modal-header" style="background-color:grey;">
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Add Attribute</h4>

		                  </div>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
		                    	<div>
		                    		<label>Attribute Name</label>
		                          <br/>
		                    	</div>
		                      <div class="form-group">
		          				<input type="text" name="" class="col-md-9 col-md-push-1">
		                      </div>

		                      <div class="form-group">
		                      	<div class="col-md-12"><br/></div>
		          				<input type="text" name="" class="col-md-9 col-md-push-1"> <span class="glyphicon glyphicon-trash col-md-push-1"></span>
		                      </div>

		                      <div class="form-group">
		                      	<div class="col-md-12"><br/></div>
		          				<input type="text" name="" class="col-md-9 col-md-push-1"> <span class="glyphicon glyphicon-trash col-md-push-1"></span>
		                      </div> 

		                     <div class="form-group">
		                      	<div class="col-md-12"><br/></div>
		          				 <span class="col-md-push-2 glyphicon glyphicon-plus"></span><label class="col-md-4 col-md-push-6">Add an attributes</label> 
		                      </div> 
		                      
		                      <div class="form-group">
		                        <div class="col-md-12"><br/></div>
		                        <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Save</button>
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
          	<label ><h4 class="col-md-12">List Attributes for Category &nbsp;&nbsp;&nbsp;{Name of the category selected}</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
               	<button type="button" class="btn btn-success col-md-8 btn-responsive" data-toggle="modal" data-target="#myModalNorm">Add Attribute</button>     
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Attribute Name</th>
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
                    <td>Ram</td>
                    <td>
                      <button class="btn tddata">Edit</button><button class="btn tddata">Delete</button>
                    </td>
                  </tr>
                    
                <tr>
	            	<td>2</td>
	            	<td> Processor</td>
	            	<td>
	           			<button class="btn tddata">Edit</button><button class="btn tddata">Delete</button>       
	            	</td>
                </tr>                  

                <tr>
	            	<td>3</td>
	            	<td></td>
	            	<td></td>      
                </tr>  

                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
    <script type="text/javascript" src="js/simpletable.js"></script>
@endsection

@section('script')
<script type="text/javascript" src="js/simpletable.js"></script>
@stop
