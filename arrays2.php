<html>
   <head>
      <title>Arrays2</title>
   </head>
   
   <body>
		
      <?php
      	// This program define 2 arrays, the firts is an index array and the second an associative one
         echo "<h1>Walking through arrays 1</h1>";
         echo "<h2>foreach instruction</h2>";
         $users = array("John", "Huang", "Douglas", "Tony", "Charles", "Smith", "George");
	 		$capitals = array("FR" => "Paris", "IT" => "Rome", "GE" => "Berlin");
			echo "<h3>In this case we use it to print all the array content</h3>";			
			foreach ($users as $value){
				echo "$value<br>";			
			}
			echo "<h3>In this case we use it to print the index value</h3>";			
			foreach ($users as $key => $value){
				echo "$key<br>";			
			}	
	 			 		
		?>
      
   </body>
</html>
