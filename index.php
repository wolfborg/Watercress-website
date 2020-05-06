<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<?php include 'header.php'; ?>
<div class="container">
	<div class="slideshow-container">
		<div class="mySlides fade">
			<a href="https://store.steampowered.com/app/674580/Fare_Thee_Well/?curator_clanid=6547500" target="_blank">
				<img src="img/FTW_1000x500.png">
			</a>
		</div>

		<div class="mySlides fade">
			<a href="https://watercress.itch.io/whenthewarwashome" target="_blank">
				<img src="img/WTWWH_1000x500.png">
			</a>
		</div>

		<div class="mySlides fade">
			<a href="https://store.steampowered.com/app/1067930/this_was_for_you/" target="_blank">
				<img src="img/TWFY_1000x500.png">
			</a>
		</div>
		
		<div class="mySlides fade">
			<a href="https://watercress.itch.io/our-home" target="_blank">
				<img src="img/OURHOME_1000x500.png">
			</a>
		</div>

		<div class="mySlides fade">
			<a href="https://watercress.itch.io/afofas-demo" target="_blank">
				<img src="img/AFOFAS_1000x500.png">
			</a>
		</div>

		<div class="mySlides fade">
			<a href="https://store.steampowered.com/app/458760/Palinurus/?curator_clanid=6547500" target="_blank">
				<img src="img/PALINURUS_1000x500.png">
			</a>
		</div>

		<div class="mySlides fade">
			<a href="https://watercress.itch.io/cautionary-tale" target="_blank">
				<img src="img/CT_1000x500.png">
			</a>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
		}
		slides[slideIndex-1].style.display = "block";
	}
	
	var timer = 3000;
	var slideTime = setInterval(function(){ plusSlides(1); }, timer);
	$(".slideshow-container").hover(
		function(){ clearInterval(slideTime); },
		function(){ slideTime = setInterval(function(){ plusSlides(1); }, timer); }
	);
	</script>
	
	<div class="content" style="text-align:justify">
		<p>Watercress is a team of over forty global developers creating story-driven games. From the beginning,
		it has been our dream to work on games we love, and to inspire those who play them. Our goal is to create
		rich narrative-driven games, with a focus on community and inclusivity, both inside and outside of our studio.
		We are always striving to create an ethical and morally responsible community, leading through example.</p>
	</div>

	<noscript>Your browser does not support JavaScript! Why?!</noscript>
</div>
<?php include 'footer.php'; ?>
</body>
</html>