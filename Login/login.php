<?php 

require_once 'connect_db.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

echo($username.$password);

/*$qry = "SELECT id, username, oauth FROM usermeta WHERE username='".$uName."' AND pass='".$pWord."' AND status='active'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);
if( $num_row == 1 ) {
 echo $_SESSION;
 $_SESSION['uName'] = $row['username'];
 $_SESSION['oId'] = $row['orgid'];
 $_SESSION['auth'] = $row['oauth'];
 }
else {
 echo 'false';
}*/

?>