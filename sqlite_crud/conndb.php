<?php

	$dbname = "userdb.db";
	
	$db = new SQlite3($dbname);
	if(!$db){
		die("database not created......");
	}
	

	//create table in sqlite database

	$query = "create table if not exists user_table(user_id integer primary key, user_name text, user_email text)";
	$db->exec($query);
	

?>