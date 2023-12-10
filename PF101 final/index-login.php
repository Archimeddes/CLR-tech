<?php
ini_set('display_errors', 1);
ob_start();

include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user data from the database
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($dbUsername, $dbPassword);

    if ($stmt->fetch()) {
        if ($password === $dbPassword){
            header("Location: user-inter.php");
            exit();
        } else{
            header("Location: index-3.php");
            exit();
        }
    } else {
        header("Location: index-3.php");
        exit();
    }
    $stmt->close();
    }
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/CCLogo.png" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<style>
		.login-container {
            background-color: #fff;
            padding: 20px;
            width: 50%;
			margin-left: 20%;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .login-form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }
		</style>
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
				<div class="login-container">
					
					<form class="login-form" id="loginForm" action="index-login.php" method="post">
						<h2>Login</h2>
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" required>
			
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" required>
			
						<input type="submit" value="Login" name="btn_login">
					</form>
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