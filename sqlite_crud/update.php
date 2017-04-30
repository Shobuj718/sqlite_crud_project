<?php

	include "conndb.php";

	//no validation for update user here...

	$uid = $_POST['id'];
	$uname = $_POST['name'];
	$uemail = $_POST['email'];

	$query = "update user_table
			  set
			  user_name = '$uname',
			  user_email = '$uemail'
			  where user_id = '$uid'";

    if($db->exec($query)){
    	header("Location:list.php");
    }
    else{
    	echo 'error in query...';
    }

?>