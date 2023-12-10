<?php
include('dbcon.php');

try {
    // Attempt to fetch posts
    $sql = "SELECT * FROM art.upload";
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception('Error executing SQL query.');
    }

    $posts = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }

    // Return JSON response
    echo json_encode($posts);
} catch (Exception $e) {
    // Handle exceptions
    echo json_encode(array('error' => $e->getMessage()));
} finally {
    // Close the database connection
    $conn->close();
}
?>
