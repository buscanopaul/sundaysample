<?php require_once 'controllers/home.controller.php'; ?>

<?php include_once 'header.php'; ?>


<div class="container">


	<h2>SAMPLE TABLE</h2>
  <p>By: Paul lorenz Buscano</p>  
  <a href="add.php" name="add.php" class="btn  btn-info">ADD NEW!</a>    

  <table class="table table-striped">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>address</th>
        <th>age</th>
      </tr>
    </thead>
    <tbody>
     <?php if(empty($user)): ?>
			    	<?php foreach ($users as $user): ?>

			<form action="" method="POST">
			      <tr>
			        <td><?php echo $user['id']; ?></td>
			        <td><input required   type="text" class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>"</td>
			        <td><input required    type="text" class="form-control" name="lastname" value="<?php echo $user['lastname']; ?>"</td>
			         <td><input required    type="text" class="form-control" name="address" value="<?php echo $user['address']; ?>"</td>
			        <td><input required  type="text" class="form-control" name="age" value="<?php echo $user['age']; ?>"</td>



					 <td><button type="submit" onclick="return confirm('Are you sure you want to update record ?');" name="update" class="btn btn-raised btn-warning">EDIT</button></td>
			  
			  		<td><button type="submit" onclick="return confirm('Are you sure you want to delete record ?');" name="delete" class="btn btn-raised btn-danger">DELETE</button></td>

			      </tr>

			       <input type="hidden"  name="id" value="<?php  echo $user['id']; ?>">

			 


			  </form>

			  <?php endforeach; ?>
			<?php endif; ?>
     
    
    </tbody>
  </table>




</div>