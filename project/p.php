
<?php 
// call the form element by name
$a= $_POST['t1'];//name
$c= $_POST['g1'];//username
$d= $_POST['g2'];//e-mail
$e= $_POST['n1'];//pas1
$f= $_POST['n2'];//pas2
$j= $_POST['e1'];//Gender

if(strlen($a)>0)
{
	if(strlen($c)>2)
{

	if($e==$f)
	{
	
			if(isset($j))
			{

// connection to server
$con=mysqli_connect('localhost','root','','la chocolate');
//to check connection
if (!$con) {
	die('no connect');
}
 else{
 	//inseting to the database
    $s="INSERT INTO `users` (`Full name`, `Username`, `E-mail`, `password`, `Sex`) VALUES('$a','$c','$d','$e','$j')";
 mysqli_query($con,$s);

}
 }
 else{
				
				?>
				<script type="text/javascript">
				alert("please, enter your Gender");
				history.go(-1);
				</script>
				<?php
			}}
			else{
				
				?>
				<script type="text/javascript">
				alert("password dosen't match");
				history.go(-1);
				</script>
				<?php
			}
		}
		else{
			?>
			<script type="text/javascript">
			alert(" userName must be grater than 3");
			history.go(-1);
			</script>
			<?php
		}
	}


	else{
			?>
			<script type="text/javascript">
			alert("name must be grater than 3 ");
			history.go(-1);
			</script>
			<?php
		}
	
	
?>

 <script type="text/javascript">
 	//to go to the home page after register
window.location.assign("index.php");
</script>