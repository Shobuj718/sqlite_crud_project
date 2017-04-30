<?php 

include "inc/header.php"; 
include "conndb.php"; 
$query = "select * from user_table";
$result = $db->query($query);

?>

<h2 style="text-align: center;">User List</h2>
    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User Id</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

  <?php 
    while($row = $result->fetchArray()){
  ?>

      <tr>
        <td><?php echo $row['user_id'];  ?></td>
        <td><?php echo $row['user_name'];  ?></td>
        <td><?php echo $row['user_email'];  ?></td>

        <td>
          <a href="edit.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-info" role="button">Edit</a>
          <a onclick="return confirm('Are you sure to delete'); " href="delete.php?u_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" role="button">Delete</a>
        </td>

      </tr>

  <?php } ?>
      
    </tbody>
  </table>
<div align="center">
        <a href="index.php" class="btn btn-primary" role="button">Home</a>

      </div>

  <?php include "inc/footer.php"; ?>