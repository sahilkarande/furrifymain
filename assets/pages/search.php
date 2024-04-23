<?php
session_start();
include 'conn.php'; // Include your database connection file

// Check if the search query parameter is set in the URL
if (isset($_GET['search_query'])) {
    // Sanitize the search query to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($conn, $_GET['search_query']);

    // Perform a database query to search for users based on full name, username, or email
    $query = "SELECT * FROM users 
              WHERE full_name LIKE '%$searchQuery%' 
              OR username LIKE '%$searchQuery%' 
              OR email LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $query);

    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        // Fetch the first matching user
        $row = mysqli_fetch_assoc($result);
        // Redirect to the specific URL with the username as a query parameter
        header("Location: http://localhost/furrify1/?u={$row['username']}");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "No results found.";
    }

    // Free the result set
    mysqli_free_result($result);
}

// Close the database connection
mysqli_close($conn);
?>
