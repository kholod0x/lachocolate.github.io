<?php 
// call the form element by name
$a= $_POST['t1'];
$c= $_POST['g1'];
$d= $_POST['g2'];
$e= $_POST['n1'];
$h= $_POST['r1'];

// connection to server
$con=mysqli_connect('localhost','root','','la chocolate');
//to check connection
if (! $con) {
	die("no connect");
}
 else{
 	session_start();
	$s=$_SESSION['Username'];
	$sql="UPDATE `users` SET `Full name`='$a',`Username`='$c',`E-mail`='$d',`password`='$e',`Sex`='$h' WHERE  `users`.`Username` = '$s';";
		mysqli_query($con,$sql);
}


?>
<script type="text/javascript">
		window.location.assign("userhome.php");
		</script>