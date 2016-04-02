<html>
   <head>
      <title>Basic form result</title>
   </head>
   
   <body>
		
      <?php
      	// This program shows the content's form
         echo "<h1>Basic form</h1>";
         echo "<h3>Hello ";
         if($_POST['gender']=="M") {
         	echo "Mr. ";
         }
         else {
         	echo "Mrs. ";
         }
         echo $_POST["name"];
      ?>
      
   </body>
</html>
