<?php
include('dbcon.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_upload'])) {
    $message = $_POST['upload-message'];

    // Handle image upload if a file is selected
    $imageFileName = '';
    if (isset($_FILES['image-upload']) && $_FILES['image-upload']['error'] == 0) {
        $imageFileName = time() . '_' . $_FILES['image-upload']['name'];
        move_uploaded_file($_FILES['image-upload']['tmp_name'], 'uploads/' . $imageFileName);
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO id21640909_edencheese.upload (message, image) VALUES (?, ?)");
    $stmt->bind_param("ss", $message, $imageFileName);
    $stmt->execute();
    $stmt->close();
}

// Fetch posts from the database
$sql = "SELECT * FROM id21640909_edencheese.upload";
$result = $conn->query($sql);

$posts = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }

     $posts = array_reverse($posts);
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean City</title>
    <link rel="stylesheet" href="css/user-inter.css">
</head>
<body>
    <div class="container">
    <div class="header">
            <h1>CClean</h1>
            <div class="menu-icon">&#9776;</div>
            <div class="dropdown">
                <div class="dropbtn">|||</div>
                <div class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="index-2.php">Schedule</a>
                    <a href="index-1.php">Services</a>
                    <a href="index-1.php">Change Password</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>       
      <div class="uploads">
            <div class="upload-form">
               <div class="profile-container">
    <div class="profile-pec">
        <img src="images/fbimage.jpg" alt="UserProfile" style="width: 100px; height: 100px; border-radius: 50%;">
        <h3>User Name</h3>
        <p>Upload your recycling journey!</p>
    </div>
            
                <form id="uploadForm" action="" method="post" enctype="multipart/form-data">
                    <textarea name="upload-message" id="upload-message" placeholder="Describe your upload..."></textarea>
                    <input type="file" name="image-upload" id="image-upload" accept="image/*">
                    <button type="submit" name="btn_upload">Upload Form</button>
                </form>
            </div>
            <!-- Display posts under the upload form -->
            <div id="posts-container" class="tweets">
                <?php foreach ($posts as $post) : ?>
                    <div class="tweet">
                        <div class="user-info">
                            <img src="images/fbimage.jpg" alt="post">
                            <h3>Username</h3>
                        </div>
                        <div class="tweet-content">
                            <p><?= $post['message'] ?></p>
                        </div>
                        <?php if ($post['image']) : ?>
                            <div class="image-container">
                                <img class="enlarged-image" src="uploads/<?= $post['image'] ?>" alt="Uploaded Image">
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script src="js/user-inter.js"></script>
</body>

</html>
