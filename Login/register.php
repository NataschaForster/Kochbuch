<?php 

require_once 'connect_db.php';
 
$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if(isset($_POST[username]) && $_POST[password1] != ""){
	if ($password1 == $password2){
		$sql = "INSERT INTO user(username, password, email) VALUES ('$username', '$password1', '$email')"; 
		
		$test = $mysqli->prepare($sql);
		if (!$test) {
		 echo $mysqli->error;
		 }
		else {
		 $mysqli->query($sql);
		 }
		
		$mysqli->query($sql);
		
		function urlRequest($url, $setUserAgent=false, $usePost=false, $additionalHeaders='', $content='') {
		return file_get_contents($url, false, stream_context_create(array('http' => array('method' => (($usePost) ? 'POST' : 'GET'), 'header' => "User-Agent: ".(($setUserAgent) ? $setUserAgent : $_SERVER['HTTP_USER_AGENT'])."\r\n"."Content-Type: application/x-www-form-urlencoded;charset=UTF-8\r\n".$additionalHeaders, 'content' => $content))));
	
		echo urlRequest('../Frontend/homepage.html');
		}
	}	
}
		
?>