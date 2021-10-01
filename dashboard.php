<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<title>Infinity</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
<section class="header">
	<nav>
		<h2 class="logo">
			RUNE
		</h2>
		<div class="navig">
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="">CONTACT</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>

		</div>
	</nav>
	<div class="info">
		<h1 class="pghd">Mindscape</h1>
		<p>Lorem ipsum dolore... aah fck this shit. Bad break up? pay us to feel better<br>PS : Not that kinda "feel" better, but we do have contacts...😏 </p>
		<a href="" class="hero">Visit Us To Know More</a>
	</div>
</section>
<section class="top">
	<div class="tprated">
		<img src="images/banner1.png">
	</div>
	<div class="glassbox">
	<div class="glass">
		<div class="scratch">
			<h2>01</h2>
			<h3>Card One</h3>
			<img src="images/icon1.png">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae <br>quas vel sint commodi repudiandae consequuntur<br> voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga <br>praesentium
optio,<br> eaque rerum! Provident similique accusantium nemo autem.</p>
			<a href=""> Read more </a>

		</div>
	</div>
</div>
</section>

	<footer class="footer">
<div class="container">
	<div class="row">

		<div class="col">
			<h4>title1</h4>
			<ul>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
			</ul>
		</div>

		<div class="col">
			<h4>title1</h4>
			<ul>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
				<li><a href="#">list</a></li>
			</ul>
		</div>

		<div class="col">
			<h4>Follow us</h4>
			<div class="sosh">
				<a href=""><i class="fab fa-facebook-f"></i></a>
				<a href=""><i class="fab fa-instagram"></i></a>
				<a href=""><i class="fab fa-twitter"></i></a>
				<a href=""><i class="fab fa-linkedn-in"></i></a>
			</div>
		</div>

	</div>
</div>	
</footer>

	
<script type="text/javascript" src="tilt.js"></script>
<script>
	VanillaTilt.init(document.querySelectorAll(".glass"), {
		max: 1,
		speed: 200,
		glare:1,
		reverse:true,
		"max-glare":            0.3

	});
</script>
</body>
</html>
