<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Services</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/CCLogo.png" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script>
			function redirectToIndex3() {
				alert("You need to email us first in order to login.");
				window.location.href = "index-3.php";
    		}
		</script>		
	</head>
	<body id="top">
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/CCLogo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="slogan">Value the environment around you</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="index-1.php">Services</a></li>
								<li><a href="index-3.php">Contacts</a></li>
								<li><a href="index-login.php">Login</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="content"><div class="ic">Hello</div>
			<div class="container_12">
				<div class="grid_12">
					<h2>Main Services</h2>
				</div>
				<div class="grid_4">
					<div class="text1"><a href="#">Residential Pickup Services</a></div>
					<br>Schedule and manage regular garbage collection services for residential areas.
					<br>
					<a href="index-3.php" onclick="redirectToIndex3()" class="btn">more</a>
				</div>
				<div class="grid_4">
					<div class="text1"><a href="#">Commercial Pickup Services</a></div>
					<br>Offer garbage collection services for businesses, industrial zones, and commercial establishments.
					<br>
					<a href="index-3.php" onclick="redirectToIndex3()" class="btn">more</a>
				</div>
				<div class="grid_4">
					<div class="text1"><a href="#">Bulk Item Pickup</a></div>
					<br>Arrange for the removal of large or bulky items that cannot be handled through regular garbage pickup.
					<br>
					<a href="index-3.php" onclick="redirectToIndex3()" class="btn">more</a>
				</div>
				<div class="clear cl1"></div>
				<div class="grid_4">
					<div class="text1"><a href="#">Recycling Services</a></div>
					<br>Provide information on recycling programs and services for different types of recyclable materials. Schedule pickups for recyclable items such as paper, plastic, glass, and metal.
					<br>
					<a href="index-3.php" onclick="redirectToIndex3()" class="btn">more</a>
				</div>
			</div>
		</div>
		<footer>
			<div class="container_12">
				<div class="grid_12 ">
					<div class="copy">
						CC (C) <span id="copyright-year"></span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
	</body>
</html>