<html>
   <head>
      <title>Whilestatement1</title>
   </head>
   
   <body>
		
      <?php
      	// This program looks for a name inside an array
         echo "<h1>While and if statement</h1>";
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
		?>
      
   </body>
</html>
