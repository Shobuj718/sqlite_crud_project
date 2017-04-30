<?php

	include("conndb.php");

	$id = $_GET['u_id'];

	$query = "delete from user_table where user_id = '$id'";

	if($db->exec($query)){
		header("Location:list.php");
	}
	else{
		echo "error in query";
	}

?>