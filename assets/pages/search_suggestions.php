<?php
include 'conn.php'; // Include your database connection file

if (isset($_GET['query'])) {
    $searchQuery = mysqli_real_escape_string($conn, $_GET['query']);

    $query = "SELECT * FROM user 
              WHERE first_name LIKE '%$searchQuery%' 
              OR last_name LIKE '%$searchQuery%' 
              OR username LIKE '%$searchQuery%' 
              OR email LIKE '%$searchQuery%'
              LIMIT 5";

    $result = mysqli_query($conn, $query);

    $suggestions = [];
    while ($row = mysqli_fetch_assoc($result)) {
        // Construct the profile URL based on your application's structure
        $profileUrl = 'profile.php?u=' . urlencode($row['username']);
        $suggestions[] = ['username' => $row['username'], 'profileUrl' => $profileUrl];
    }

    header('Content-Type: application/json');
    echo json_encode(['suggestions' => $suggestions]);

    mysqli_free_result($result);
} else {
    echo json_encode(['error' => 'Invalid request']);
}

mysqli_close($conn);
?>
