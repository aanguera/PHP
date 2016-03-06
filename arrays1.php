<html>
   <head>
      <title>Arrays1</title>
   </head>
   
   <body>
		
      <?php
      	// This program define 2 arrays, the firts is an index array and the second an associative one
         echo "<h1>Using arrays 1</h1>";
         echo "<h2>This is an index array</h2>";
	 		$users = array("John", "Huang", "Douglas", "Tony", "Charles", "Smith", "George");
	 		$capitals = array("FR" => "Paris", "IT" => "Rome", "GE" => "Berlin");
			$k = 0;	 		
	 		while ($k<sizeof($users)){
	 			echo "The index <b>$k</b> is the user: <b>$users[$k]</b><br>";
	 			$k++;	
	 		}
	 		echo "<h2>This is an associative array printed by \"print_r\"</h2>";
	 		echo "<h3>Printed by \"print_r\"</h3>";
	 		print_r($capitals);
			echo "<h3>Printed using the associative names</h3>";
			echo "In this case using the instruction <b>\$capitals['GE'], </b>print the value: <b> ";	
			echo $capitals['GE']; 		
			echo "</b>";
	 		 
		?>
      
   </body>
</html>
