<html>
   <head>
      <title>Test DB connection</title>
   </head>
   
   <body>
<?php

	$hostname = "localhost";
	$username = "testphp";
	$password = "testphp";
	$databaseName = "testphp";
	
	echo "<h3>Wrong password, connection failed</h3>";

//	$link = mysql_connect($hostname, $username, $password);
	//mysql_select_db("noneexistdb", $link);
	$link = mysql_connect($hostname, $username, "testphp2");
	if (!$link) {
		echo"Could not connect: " . mysql_error() . "<br>";	
	}
	else {
		echo 'Connected successfully';
	}
	echo mysql_error();
	mysql_close($link);
	

	echo "<h3>Password OK, connection OK</h3>";

	//	$link = mysql_connect($hostname, $username, $password);
	//mysql_select_db("noneexistdb", $link);
	$link = mysql_connect($hostname, $username, "testphp");
	if (!$link) {
		echo"Could not connect: " . mysql_error() . "<br>";	
	}
	else {
		echo "Connected successfully" . mysql_error();
	}	
	mysql_close($link);
	
	
//	echo mysql_errno($link2) . ": " . mysql_error($link2);
	
//	echo "<h4> No error in this case. </h4>";
	
//	$link = mysql_connect($hostname, $username, $password);
//	echo mysql_errno($link) . ": " . mysql_error($link);
	
?>	
      
      
   </body>
</html>
