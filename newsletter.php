<?php
	$page_tittle = 'News letter signup';
	include('includes/header.html');
?>
	<form action="handle.php" method="post">
	<fieldset><legend>Enter your information below</legend>
	<p><label>Name: <input type="text" name="name" size="30" maxlength="50"</label></p>
	<p><label>Email: <input type="text" name="email" size="30" maxlength="50"</label></p>
	<p><label for="sex">Sex: </label> <input type="radio" name="sex" value="rarely"> Rarely 
	<input type="radio" name="sex" value="never"> Never</p>	
	</fieldset>
	<p align="center"><input type="submit" name="submit" value="Submit button"</p>
	</form>
<?php
	include('includes/footer.html');
?>
