<?php  
$con=mysqli_connect('localhost','root','','la chocolate');
if(!$con)
{
die('Error'.mysql_error());	
}


session_start();
$s=$_SESSION['Username'];

$sql="SELECT * FROM `users` WHERE `Username` ='$s'";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
   
	echo"<html>
<head>
<title>UserUpdate </title>
<!-- css page difintion  -->
<link rel='stylesheet' type='text/css' href='css/style.css'>

</head>

<body>
<!-- -->";
 include 'header.php';

		echo"<form  method='POST' action='update.php'>";

                echo"<table align='center' cellpadding='10px'>";



echo"<tr><td>FullName:</td><td><input type='text' name='t1'  value='".$row[0]."'></td><br> </tr>";

 echo"<tr><td>noUserName:  </td> <td> <input type ='text' name = 'g1'  value='".$row[1]."' > <br> </td></tr>";

 echo"<tr>  <td>  E-mail:  </td>  <td><input type ='Email' name = 'g2' value='".$row[2]."'> <br></td></tr>";

echo"<tr>  <td>  Password:  </td>  <td><input type ='password' name = 'n1' value='".$row[3]."' > <br> </td></tr>";

echo"<tr>  <td>  Confirm Password: </td><td><input type ='password' name = 'n2' value= '".$row[3]."'> <br> </td></tr>";


if($row[4]=='male')
{
echo "<tr><td>Gender:</td> <br></tr><tr><td><input type='radio' name='r1' value='male' checked allign='center'>Male<br></td> <td><input type='radio' name='r1' value='female'>Female</td></tr>";
}
else
{
echo "<tr><td>Gender:</td> <br></tr><tr><td><input type='radio' name='r1' value='Male' checked align='center'>Male<br></td> <td><input type='radio' name='r1' value='female' checked >Female</td></tr>";
}
echo"<tr>  <td> <input type='Submit' id='butt' value='Update'> </td>
      <td> <input type='Reset' id='butt' value='Reset'></td></tr> </table></form>
 </div> </div> </font><br><br>";}

echo "<!--  footer-->
      <footer>
         <p> CopyRight   &copy;2019 CS Department . </p>
     </footer> 
  </body>
</html>";
?>