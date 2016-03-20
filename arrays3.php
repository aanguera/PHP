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
         	'dark green vegetables' => array('spinach', 'swiss chard'),
         	'orange vegetables' => array('pumpkin', 'carots'),
         );
	 		
			echo "<h3>This is a associative and index multidimensional array</h3>";			
			echo "<ul>";			
			foreach ($food as $key => $value){
				echo "<li>$key";
				echo "<ul>";
  				for ($col = 0; $col < sizeof($food[$key]); $col++) {
    				echo "<li>".$food[$key][$col]."</li>";
  				}
  				echo "</ul><br>";		
			}			
			echo "</ul>";
				 			 		
		?>
      
   </body>
</html>
