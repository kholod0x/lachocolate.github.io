<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();?>

	<html>
	<head>
		<title>Product</title>

		<link href="style1.css" type="text/css" rel="stylesheet" />
	</head>


	<!-- <title>White Chocolate</title>
  css file defintion-->


<body> 
<form action="cart.php" method="POST">
 <!--  header-->
<?php include 'header.php';?>

                  <!--  chocolates product detailes -->
              <div >



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






                              







	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM white ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>

	
		<div class="product-item">
			<table>
			<form method="POST" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="gallery"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<!--<div class="product-tile-footer">-->
			<div class="desc"><?php echo $product_array[$key]["name"]; ?></div>
			<div class="desc"><?php echo "SAR".$product_array[$key]["price"]; ?></div>
			<div class="cart-action"><center><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="button" /></center></div>
			</div>
			</form></table>
		</div>
		

	<?php
		}
	}
	?>
</div>

<!-- footer -->
<br> <br> <br> <br> 
      <footer>
         <p> CopyRight   &copy; 2019 CS Department . </p>
     </footer>
 </body>
</html>