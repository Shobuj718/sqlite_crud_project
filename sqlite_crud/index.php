
<?php 

	include "inc/header.php";
	include "conndb.php";


 ?>
 	<h2 style="text-align: center;">Create User</h2>

		<form action="insert.php" method="post">

		  <div class="form-group">
		    <label for="name">User Name:</label>
		    <input type="text" class="form-control" name="name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" name="email">
		  </div>

		  <div align="center">
		  	<button type="submit" class="btn btn-primary">Insert</button>
		  	<a href="list.php" class="btn btn-primary" role="button">User List</a>

		  </div>

		</form>

	<?php include "inc/footer.php"; $db->busyTimeout(5000);?>