<html>
<head>
	<title>UserHome</title>
	<!-- css file defintion-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<!--  header-->
			<div id="mainHeader">
				<!-- logo -->
                       <img src="images/photo1.jpg" align="left" width="270"></div>
               <!--  navpar-->
            <div id="navpar">
                  <ul> <li> <a href="#" >Home </a>  </li>
                  <li> <a href="product.php">Products </a></li>
                  <li><a href="ContactUs.php" >Content Us </a></li> 
               <li><a href="UserUpdate.php" >Edit Profile</a></li>
               <li><a href="logout.php" >Logout</a></li>
                  <li> <a href="cart.php"><i class="fa fa-shopping-basket" style="color: white;" aria-hidden="true" ></i></a></li></ul></div>
               <!--  slideshow-->
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
						  <span class="dot"></span> 
						</div>
						<!--  slideshow script-->
			<script>
			var slideIndex = 0;
			showSlides();
			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides1");
				var dots = document.getElementsByClassName("dot");
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
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<!--  footer-->
      <footer>
      	<br>
         <p> CopyRight   &copy;2019 CS Department . </p>
     </footer>
</html>