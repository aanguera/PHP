<html>
   <head>
      <title>Date1</title>
   </head>
   
   <body>
		
      <?php
      	// this program gets the date and comeback on several formats.
         echo "<h1>Date</h1>";
	 		$temp = date("l F jS Y", $timestamp);
	 		echo "The first system day is: <b>$temp</b><br>";
	 		$temp = date("l F jS Y");
	 		echo "This is the actual date with English ordinal suffix: <b>$temp</b><br>";
	 		$temp = date('l \, F \t\h\e jS Y');
	 		echo "In this case we are using some escaping characters: <b>$temp</b><br>";
	 		$temp = date("Y/m/d");
	 		echo "This is the actual with short format (Year, month, day): <b>$temp</b><br>";
	 		$temp = date("H:i:s");
	 		echo "This is the actual time in a short format (hour, minute, second): <b>$temp</b><br>";
		?>
      
   </body>
</html>
