<?php
	$page_tittle = 'Main page';
	include('includes/header.html');
?>
<?php
if(!empty($_REQUEST['name'])){
	$name = $_REQUEST['name'];
}else {
	$name = NULL;
}

if(!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
}else {
	$email = NULL;
}

if(isset($_REQUEST['sex'])) {
	$sex = $_REQUEST['sex'];

	if($sex == "male") {
		echo "Hello Sir";
	}elseif($sex == "female") { //It's for safety reasons, because it's only available two options
		echo "Hello Madam";
	}else {
		echo "Enter the correct value";
	}
	echo "<br>";
	
}else {
	$sex = NULL;
}

if($name && $email && $sex) {
	echo "I'm glad you are interested in our newsletter. Here is a custom message from Toni: <br>";
	echo "Thank you, $name. We will email you shortly at $email !";
}else {
	echo 'Please go back and try the form again by clicking <a href="newsletter.php">Here</a>';
}
?>
<?php
	include('includes/footer.html');
?>
