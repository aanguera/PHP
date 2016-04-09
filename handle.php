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
}else {
	$sex = NULL;
}

if($name && $email && $sex) {
	echo "We will email you shortly!";
}else {
	echo 'Please go back and try the form again by clicking <a href="newsletter.php">Here</a>';
}
?>
<?php
	include('includes/footer.html');
?>
