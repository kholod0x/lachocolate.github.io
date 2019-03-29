<html>
<!-- student name / seham matter -->

<html>
<head>
<title>Regesertion  </title>
<!--  decleration of the external css file -->
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
<!--  header-->
  <?php include 'header.php';?>


    <div class="table1">  
      <!-- start of form -->
      <form class="form"name="f" action="p.php" method="POST" >

<table align="center" cellpadding="10px">
<tr><td>FirstName:</td><td><input type ="text" name = "t1" placeholder="enter your Name " ></td> <br> </tr></td></tr>
<tr>  <td> User ID:  </td> <td> <input type ="text" name = "g1" placeholder="enter your Username" > <br> </td></tr>
<tr>  <td>  E-mail:  </td>  <td><input type ="Email" name = "g2" placeholder="Enter Your Email" > <br></td></tr>
<tr>  <td>  Password:  </td>  <td><input type ="password" name = "n1" placeholder="create password" > <br> </td></tr>
<tr>  <td>  Confirm Password: </td> <td><input type ="password" name = "n2" placeholder="Confirm password"> <br> </td></tr>
<tr>  <td>Gender : </td> <br></tr>
<tr>  <td><input type ="radio" name = "e1" value = "Male" align="center"> Male<br></td> 
      <td> <input type ="radio" name = "e1"  value = "Female" > Female<br> </td> </tr> <br><br>
<tr>  <td> <input type="Submit" id="butt" value="SignUp"> </td>
      <td> <input type="Reset" id="butt" value="Reset"></td></tr> </table></form>
    <!-- to login-->
<p id="in">Already have an Account ?<a href="index.php" id="inn"> Sign in</a> </p> </div> </div> </font><br><br>
<!-- footer-->
      <footer>

         <p> CopyRight   &copy; 2019 CS Department . </p>
     </footer>
  </body>
</html>
