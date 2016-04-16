<html>
   <head>
      <title>Test DB connection</title>
   </head>
   
   <body>
<?php

	$hostname = "localhost";
	$username = "testphp4";
	$password = "testphp";
	$databaseName = "testphp";

	$dbConnected = mysql_connect($hostname, $username, $password);
	$dbSelected = mysql_select_db($databaseName, $dbConnected);

	if ($dbConnected) { //check the connection to mysqlserver
		echo "MySQL connection OK <br>";
		if ($dbSelected) {
			echo "DB connection OK<br>";		
		} else {
			echo "DB connection FAILED<br>";	
		}
	} else {
		echo "MySQL connection FAILED";
	}
?>	
      
      
   </body>
</html>
