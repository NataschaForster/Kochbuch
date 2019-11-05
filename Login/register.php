<?php 

require_once 'connect_db.php';
 
$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

echo ($username.$email.$password1.$password2);

if ($password1 == $password2){
	$sql = "INSERT INTO user(username, password, email) VALUES ($username, $password1, $email)"; 
	
	$test = $mysqli->prepare($sql);
	if (!$test) {
	 echo $mysqli->error;
	 }
	else {
	 $mysqli->query($sql);
	 }
	
	$mysqli->query($sql);
}

?>