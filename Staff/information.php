<?php
include 'connect.php';
?>
<style type="text/css">
	.form-control{
		height: 4em;
		border-radius: 1em
	}
	textarea{
		border:1px solid black;
		height: 4em;
		border-radius: 0.5em
	}
	td{
		padding: 0.5em;
	}
</style>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="continer-fluid" style="width: 100%">
	  <div class="modal fade" id="myModal">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	      
	        <!-- Modal Header -->
	        <div class="modal-header">
	          <h4 class="modal-title">Write your Information</h4>
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	         <table>
	         	<tr>
	         		<td>Name</td>
	         		<td>Title</td>
	         		<td>Details</td>
	         	</tr>

	         	<tr>
	         		<td><input type="text" name="" class="form-control" placeholder="Name"></td>
	         		<td><input type="text" name="" class="form-control" placeholder="Title heading"></td>
	         		<td><textarea  style="width: 160%" placeholder="Information"></textarea></td>
	         	</tr>
	         </table>
	        </div>
	        
	        <!-- Modal footer -->
	        <div class="modal-footer">
	          <button type="submit" class="btn btn-danger" value="Submit">Submit</button>
	        </div>
	        
	      </div>
	    </div>
	  </div>
  
</div>
