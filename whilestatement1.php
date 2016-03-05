<html>
   <head>
      <title>Whilestatement1</title>
   </head>
   
   <body>
		
      <?php
      	// This program looks for a name inside an array
         echo "<h1>While, do while and if statement</h1>";
	 		$users = array("John", "Huang", "Douglas", "Tony", "Charles", "Smith", "George");
	 		$testvar = "no";
	 		$k = 0;
	 		while ($testvar != "yes"){
	 			if ($users [$k] == "Smith") {
	 				$testvar = "yes";
	 				echo "Smith <br>";
	 			}
	 			else {
	 				echo "$users[$k] isn't Smith<br>";
	 			}
	 			$k++;
	 		}
	 		echo "<h2> Do while statement</h2>";
	 		echo "The loop condition is <= 5, but we can see 6 because it's a do while loop<br>";
			echo "Firts it executes the loop, then it test the condition.<br>";	 		
	 		$k = 6;
	 		do {
	 			echo "The index number is: <b>$k</b><br>";
	 			$k++;
	 		} while ($k <= 5);
		?>
      
   </body>
</html>
