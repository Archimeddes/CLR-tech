<?php
// Include your database connection file (dbcon.php)
include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_submit'])) {
    // Retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database using prepared statements
    $stmt = $conn->prepare("INSERT INTO member (email, first_name, last_name, phone_number, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $first_name, $last_name, $phone_number, $message);

    if ($stmt->execute()) {
        // Data inserted successfully
        echo "Data stored successfully!";
    } else {
        // Error in inserting data
        echo "Error storing data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/CCLogo.png" />
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/TMForm.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
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
    <div class="content">
        <div class="ic">Hello</div>
        <div class="container_12">
            <div class="grid_8">
                <h2>How to Find Us</h2>
                <div class="map">
                    <div class="img_block fleft">
                        <figure class="img_inner">
                            <img src="images/CCLogo.png" alt="Map">
                        </figure>
                        <span class="l"></span>
                        <span class="ll"></span>
                        <span class="r"></span>
                        <span class="rr"></span>
                        <span class="lb"></span>
                        <span class="llb"></span>
                        <span class="rb"></span>
                        <span class="rrb"></span>
                    </div>
                </div>
            </div>
            <div class="grid_4">
                <h2>Contact Form</h2>
                <form action="index-3.php" method="post" class="login-form">
                    <label>Email:</label>
                    <input type="email" name="email" required>

                    <label>First Name:</label>
                    <input type="text" name="first_name" required>

                    <label>Last Name:</label>
                    <input type="text" name="last_name" required>

                    <label>Phone Number:</label>
                    <input type="tel" name="phone_number" required>

                    <label>Message:</label>
                    <textarea name="message" required></textarea>

                    <button type="submit" name="btn_submit">Submit</button>
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
