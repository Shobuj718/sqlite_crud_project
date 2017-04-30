<?php

	include("conndb.php");

	$name  = $_POST['name'];
	$email = $_POST['email'];

	$query = "insert into user_table(user_name, user_email) values('$name', '$email')";

	if($db->exec($query)){
		header("Location:list1.php");
	}
	else{
		echo "error in query.... ";
	}

?>