<?php require_once 'controllers/add.controller.php'; ?>

<?php include_once 'header.php'; ?>




<div class="container">

	<h2>SAMPLE ADD RECORD!</h2>
  <p>By: Paul lorenz Buscano</p>  
    


	<form action="" class="form-horizontal" role="form" method="POST">

		<div class="form-group">
			<label for="firstname" class="control-label col-sm-2">FIRSTNAME:</label>
			
			 	<div class="col-sm-5">
	    		  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname">
	    		</div>
	
		</div>

		<div class="form-group">
			<label for="lastname" class="control-label col-sm-2">LASTNAME:</label>
			
			 	<div class="col-sm-5">
	    		  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname">
	    		</div>
	
		</div>

		<div class="form-group">
			<label for="address" class="control-label col-sm-2">ADDRESS:</label>
			
			 	<div class="col-sm-5">
	    		  <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
	    		</div>
	
		</div>

		<div class="form-group">
			<label for="age" class="control-label col-sm-2">AGE:</label>
			
			 	<div class="col-sm-2">
	    		  <input type="text" class="form-control" id="age" name="age" placeholder="Enter age">
	    		</div>
	
		</div>

		  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			    </div>
  		</div>
		


	</form>
	



</div>