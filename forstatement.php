<html>
   <head>
      <title>Forstatement</title>
   </head>
   
   <body>
		
      <?php
      	// This program test the loop for
         echo "<h1>For loop statement</h1>";
         echo "This is the content of thr array user<br><br>";
	 		$users = array("John", "Huang", "Douglas", "Tony", "Charles", "Smith", "George");
	 		for($k=0;$k<sizeof($users);$k++) {	 		
	 			echo "$users[$k]<br>";
	 		}	 		
		?>
      
   </body>
</html>
