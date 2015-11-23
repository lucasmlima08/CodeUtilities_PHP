<?php
	error_reporting(0);
	
	$data1	 	= $_GET['data1'];
	$data2		= $_GET['data2'];

	$host 		= "mysql.host.com";
	$database 	= "database";
	$user 		= "user";
	$password 	= "password";

	$table		= "table";
	
	$connection = mysql_connect($host, $user, $password) or die (mysql_error());
	mysql_select_db($database, $connection) or die (mysql_error());
	
	$command = "SELECT data1,data2 FROM $table;";
	$result = mysql_query($command) or die (mysql_error());
	
	while ($read = mysql_fetch_row($result)) {
		echo "$read[0] - $read[1]<br>";
	}
	
	mysql_free_result($result);
	mysql_close();
?>