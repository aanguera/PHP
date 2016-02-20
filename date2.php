<html>
   <head>
      <title>Date2</title>
   </head>
   
   <body>
		
      <?php
      	// this program subtracts and adds time to date variables.
         echo "<h1>Date, subtract and add</h1>";
        	$temp = date('Y/m/d',strtotime('-3 days'));
    		echo "This one is the current date less three days: <b>$temp</b><br>";
    		$temp = date('Y/m/d',strtotime('+2 months'));
    		echo "This one is the current date plus two months: <b>$temp</b><br>";
    		$date = strtotime("+9 days", strtotime("2015/3/10"));
    		$date = date('Y,M,d',$date);
			echo "Add 9 days to the date 2015/3/10: <b>$date</b><br>";
			$date = strtotime("+1 week 3 days", strtotime("2015/3/10"));
    		$date = date('Y,M,d',$date);
			echo "Add 1 week and 3 days to the date 2015/3/10: <b>$date</b><br>";
			$date = strtotime("next Monday", strtotime("2015/3/10"));
    		$date = date('Y,M,d',$date);
			echo "Next Monday after the date 2015/3/10: <b>$date</b><br>";
		?>
      
   </body>
</html>
