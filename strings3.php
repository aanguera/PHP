<html>
   <head>
      <title>Strings3</title>
   </head>
   
   <body>
		
      <?php
      	// this program concats two variables and one string.
      	$F_name = 'Toni';
      	$L_name = 'Anguera';
      	$Full_name = $F_name . ' ' . $L_name;
         echo "<h1>String's concat</h1>";
	 		echo "The variable <b>F_name</b>'s content will be: $Full_name <br>";
	 		$Full_name = $F_name . $L_name;
	 		echo "In other case, if we concat without ' ', The content of the <b>F_name</b>'s variable will be: $Full_name <br>";
		?>
      
   </body>
</html>
