<html>
<head>
	<title>Home</title>
	<!-- css page difintion  -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--  This means that the browser will (probably) render the width of the page at the width of its own screen  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- this script is to show password chick box -->
	<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("end");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</head>

<body>
	<!--  header-->
		<?php include 'header.php';?>


                  
               <!-- slideshow -->
            <div class="slideshow-container">
					   <div class="mySlides1">
						   <img src="images/milk chocolate.jpg" style="width:100%">	</div>
						
					    <div class="mySlides1">
						    <img src="images/Chocolate1.jpg" style="width:100%"></div>
  

					    <div class="mySlides1">
						    <img src="images/all.jpg" style="width:100%"></div>
					  

						  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a> 
						  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
			</div>			

					<div style="text-align:center">
						  <span class="dot"></span> 
						  <span class="dot"></span> 
						  <span class="dot"></span>
						  
						</div>
						<!-- slideshow script -->
			<script>
			var slideIndex = 0;
			showSlides();
			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides1");
				var dots = document.getElementsByClassName("dot");
				//to change the photo
				for (i = 0; i < slides.length; i++) {
				   slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
			</script>
		<!-- login form -->
		<table class="bo1">
			<form class="formm" method="POST" action="log.php" >
		   <tr>  <td> User ID:  </td> <td> <input type ="text"  placeholder="enter your User id"  name="user"> <br> </td></tr>
		   <tr>  <td>  Password:  </td>  <td>   <input type ="password" id="end"  placeholder="enter your password" name="pas" > </td>
		   	<td><input type="checkbox" onclick="myFunction()"> Show Password </td></tr> <br>
         <tr>  <td> <input type="Submit" id="butt" value="Log In"></td>
		     <td> <input type="reset" id="butt" value="reset"> </td>
			</tr>

			</form> <tr>  <td>  <p>Don't have an accaunt?</p></td><td><font decoration="none"> <a href="registertion.php">Register  </a></font></p> </td></table>
<!-- footer -->

      <footer>
         <p> CopyRight   &copy; 2019 CS Department . </p>
     </footer>
</html>