<html>
   <head>
      <title>Switchstatement1</title>
   </head>
   
   <body>
		
      <?php
      	// this program gets the day of the week and says good Monday, good Tuesday ...
         echo "<h1>Day and switch statement</h1>";
	 		$temp = date("l");
	 		echo "Some sentences about the week's days. Today is: <b>$temp</b><br>";
	 		switch($temp) {
	 			case 'Monday' :
	 				echo "<br><b>Monday</b> is like a math problem. Add the irritation, subtract the sleep, multiplie the problems, divide the happiness.";
	 				break;
	 			case 'Tuesday' :
	 				echo "<br>I'm not the kind of actor that would know what my character had for breakfast last <b>Tuesday.</b>";
	 				break;
	 			case 'Wednesday' :
	 				echo "<br>It's <b>Wednesday</b>, and I just made a fresh batch of Thursdays.";
	 				break;
	 			case 'Thursday' :
	 				echo "<br>Happy <b>Thursday</b> my friends! we are heading closer to the Weekend!";
	 				break;
	 			default:
	 				echo "No sentence.";
	 				break;
	 		}
		?>
      
   </body>
</html>
