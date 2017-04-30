
<?php 

	include "inc/header.php";
	include "conndb.php";

	$id = $_GET['u_id'];

	$query = "select * from user_table where user_id = '$id'";
	$result = $db->query($query);

 ?>
 	<h2 style="text-align: center;">Update User</h2>
		<form action="update.php" method="post">

	<?php

		while($row = $result->fetchArray()){

	?>

			<input type="hidden" name="id" value="<?php echo $row['user_id'] ?>">

		  <div class="form-group">
		    <label for="name">User Name:</label>
		    <input type="text" class="form-control" name="name" value="<?php echo $row['user_name'] ?>">
		  </div>

		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email" value="<?php echo $row['user_email'] ?>">
		  </div>

		  <div align="center">
		  	<button type="submit" class="btn btn-success">Update</button>
		  </div>
	<?php } ?>
		</form>

	<?php include "inc/footer.php"; ?>