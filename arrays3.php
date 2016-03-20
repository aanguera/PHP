<html>
   <head>
      <title>Arrays3</title>
   </head>
   
   <body>
		
      <?php
      	// This program define a multidimesional array
         echo "<h1>Multidimensional array</h1>";
         $food = array(
         	'fruits' => array('banana', 'orange', 'apple'),
         	'dark_green_vegetables' => array('spinach', 'swiss chard'),
         );
	 		
			echo "<h3>In this case we use it to print all the array content</h3>";			
			echo $food[0][1]."<br>";
#			print_r($food);
			echo "<ul>";			
			foreach ($food as $key => $value){
				echo "<li>$key";
				echo "<ul>";
  				for ($col = 0; $col < sizeof($food[$key]); $col++) {
    				echo "<li>".$food[$key][$col]."</li>";
  				}
  				echo "</ul>";		
			}			
			echo "</ul>";
			$k = 0;	 		
	 		while ($k<sizeof($food)){
	 			echo "The index <b>$k</b><br>";
	 			echo "<ul>";
  				for ($col = 0; $col < 2; $col++) {
    				echo "<li>".$food[$k][$col]."</li>";
  				}
  				echo "</ul>";
	 			$k++;	
	 		}
	 			 		
		?>
      
   </body>
</html>
