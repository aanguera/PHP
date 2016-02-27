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
         echo "<h1>String's concat and constants</h1>";
	 		echo "The variable <b>F_name</b>'s content is: <b><i>$F_name</i></b><br>";
	 		echo "The variable <b>L_name</b>'s content is: <b><i>$L_name</i></b><br>";
	 		echo 'Now we concat these variables like: <b>$Full_name . \' \' . $L_name;</b> and it\'s: ';
	 		echo "<b><i>$Full_name</i></b><br>";
	 		$Full_name = $F_name . $L_name;
	 		echo "In other case, if we concat without ' ', The content of the <b>F_name</b>'s variable will be: <b><i>$Full_name</b></i><br><br>";
	 		echo "<h2>Using constants</h2>";
	 		echo "In this case, we could use constants instead variables due it's content doesn't change.<br>";
	 		define(FNAME,"Toni");
	 		define(LNAME,"Anguera");
	 		echo "The constants defined in these way: <br>";
	 		echo '<b>define(FNAME,"Toni");</b><br>';
	 		echo '<b>define(LNAME,"Anguera");</b><br>';
	 		echo 'We can also concat constants like: <b>FNAME . \' \' . LNAME;</b><br>';
	 		echo "And the result is: ";
	 		echo "<b><i>";
	 		echo FNAME . ' ' . LNAME;
	 		echo "</b></i>";
		?>
      
   </body>
</html>
