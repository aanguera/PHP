<html>
   <head>
      <title>Operators1</title>
   </head>
   
   <body>
		
      <?php
      	// this program increment and decrement variables with the operators "++" and "--".
         echo "<h1>Operators ++ and --</h1>";
         $count = 0;
         echo "The initial value of <b>count</b> was '0' and now is: ";
         echo $count++;
	 		echo "<br> But now with no increment, the value of <b>count</b> is $count <br>";
	 		echo "<br>";
	 		echo "Now we decrement but the operator -- is on the left side of the variable and the value is: ";
	 		echo --$count;
	 		echo "<br>Like in the firts case, we print again the variable's value and still is: $count";
		?>
      
   </body>
</html>
