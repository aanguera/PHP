<html>
   <head>
      <title>Basic form</title>
   </head>
   
   <body>
		<h1>Basic form</h1>
		<form action="handle_form.php" method="post">
		<fieldset>
			<legend>Enter your name</legend>
			<p><label>Name: <input type="text" name="name" size="30" maxlength="50" </label></p>
			<p><label for="type">Gender</label>
			<input type="radio" name="gender" value="M" /> Male
			<input type="radio" name="gender" value="F" /> Female
			</p>		
		</fieldset>
		<p><input type="submit" name="submit" value="Submit for testing"</p>
		
		</form>
      <?php
      	                  			
		?>
      
   </body>
</html>
