<html>
   <head>
      <title>Functions1</title>
   </head>
   
   <body>
		
      <?php
      	// This program uses functions
         echo "<h1>Functions</h1>";
         function first(){
         	echo "Hello this is the first function without parameters";
         	return; //This statement insn't compulsory, but makes it easier
         }
         function compute_salestax($ordercost, $iva=21) {
         	$iva_factor = 1 + $iva/100;
         	return ($ordercost * $iva_factor);
         }	
			echo "We call the first function with no argument<br>";
			first();
			echo "<h2>Parameters and arguments</h2>";
			echo "The order cost is 200 and there are no iva argument, it's by default<br>";
			$temp = number_format(compute_salestax(1460.56), 2, ',', '.');
			echo "The amount of the order is: $temp<br>";
			
		?>
      
   </body>
</html>
