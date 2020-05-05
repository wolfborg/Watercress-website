<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
<div class="container">
	<?php include 'header.php'; ?>

	<div class="slideshow-container">
		<div class="mySlides fade">
			<a href="https://store.steampowered.com/app/674580/Fare_Thee_Well/?curator_clanid=6547500" target="_blank">
				<img src="img/FTW_1000x500.png">
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

	<!-- <div class="projectsBox">
		<div class="project">
			<div class="project-subblock first-project">
				<a href="javascript:void(0);" class="open-project"  href="#"><h1>A field of flowers and stars</h1></a>
			</div>
			<div class="project-hover">
				<p>Our yurijam VN.</p>
				<a href="#">LEARN MORE...</a>
			</div>
		</div>
		<div class="project">
			<div class="project-subblock second-project">
				<a href="#"><h1>this was for you.</h1></a>
			</div>
			<div class="project-hover2">
				<p>Our most recent NaNoRenO game, this was for you. follows the story of a grieving
				friend, and their struggle to hold onto their past. One must confront the reality of
				the world before one can truly move on.</p>
				<a href="https://store.steampowered.com/app/1067930/this_was_for_you/" target="_blank" class="learn">LEARN MORE...</a>
			</div>
		</div>
		<div class="project">
			<div class="project-subblock third-project">
				<a href="#"><h1>Fare Thee Well</h1></a>
			</div>
			<div class="project-hover project-hover-left">
				<p>The remastered version of Watercress' NaNoRenO2016 project, follow a man in a sleepy town
				in the snow. After traveling the world many times over, he finds himself unable to let go of
				an unremarkable town in Maine. Is this where he will live for the rest of his days?</p>
				<a href="https://store.steampowered.com/app/674580/Fare_Thee_Well/" target="_blank" class="learn">LEARN MORE...</a>
			</div>
		</div>
	</div> -->
	
	<div class="content">
		<p>Watercress is a team of over forty global developers creating story-driven games. From the beginning,
		it has been our dream to work on games we love, and to inspire those who play them. Our goal is to create
		rich narrative-driven games, with a focus on community and inclusivity, both inside and outside of our studio.
		We are always striving to create an ethical and morally responsible community, leading through example.</p>
	</div>

	<noscript>Your browser does not support JavaScript! Why?!</noscript>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>