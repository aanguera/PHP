<html>
   <head>
      <title>Operators2</title>
   </head>
   
   <body>
		
      <?php
      	// this program use the operators "+=", "-=", "/=", "*=" and "%=".
         echo "<h1>Operators += -= /= *= %=</h1>";
         $num = 10;
         echo "The initial value of <b>num</b> is '10' and after the assignement <b>\$num +=2</b> and the num's value is: ";
         echo $num +=2;
			echo "<br>Now the assignement is <b>\$num -=3</b> and the num's value is: ";
         echo $num -=3; 
         echo "<br>Now the assignement is <b>\$num /=2</b> and the num's value is: ";
         echo $num /=2;  
         echo "<br>Now the assignement is <b>\$num *=2</b> and the num's value is: ";
         echo $num *=2;      
         echo "<br>Now the assignement is <b>\$num %=2</b> and the num's value is: ";
         echo $num %=2;
      ?>
      
   </body>
</html>
