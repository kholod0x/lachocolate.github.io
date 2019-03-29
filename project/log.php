<?php

$a=$_POST['user'];

$b=$_POST['pas'];

$con=mysqli_connect('localhost','root','','la chocolate');

if(!$con)
{
	die("no connect");
}

$sql="SELECT * FROM `users` ";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	if($a==$row['Username'] && $b==$row['password'])
	{
		session_start();
		$_SESSION['Username']=$a;
		?>
		<script type="text/javascript">
		window.location.assign("userhome.php");
		</script>
		
		<?Php
	}
	
}


?>




		<script type="text/javascript">
		alert("username or password incorrect");
		history.go(-1);
		</script>
		
