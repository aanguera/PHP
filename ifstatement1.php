<html>
   <head>
      <title>Ifstatement1</title>
   </head>
   
   <body>
		
      <?php
      	// this program gets the hour and says good morning, good evening ...
         echo "<h1>Hour and if statement</h1>";
	 		$temp = date("H");
	 		echo "This is the actual time in a short format (hour): <b>$temp</b><br>";
	 		if ($temp < "12") {
	 			echo "Good morning";
	 		}
	 		elseif($temp < "17") {
	 			echo "Good afternoon";
	 		}
	 		elseif($temp < "23") {
	 			echo "Good evening";
	 		}
	 		else {
	 			echo "Good night";
	 		}
		?>
      
   </body>
</html>
