<?php
// Include the database connection file
include 'db_connection.php';

// Fetch pet details from the database
$sql = "SELECT * FROM lost_pets";
$result = $conn->query($sql);

// Check if there are any pets in the database
if ($result->num_rows > 0) {
    // Loop through each row of pet data
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-md-3 col-lg-4">
            <div class="item">
                <img class="img-responsive" src="<?php echo $row['image']; ?>" height="250" width="300" alt="Pet Image">
                <div class="item-dtls">
                    <h4>Name: <?php echo $row['pet_name']; ?></h4>
                    <h5>Age: <?php echo $row['pet_age']; ?></h5>
                    <h5>Breed: <?php echo $row['breed']; ?></h5>
                    <h5>Gender: <?php echo $row['gender']; ?></h5>
                </div>
                <div class="ecom bg-lblue">
                    <a class="btn" href="#">Full Details</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    // If no pets found in the database
    echo "<p>No pets found.</p>";
}

// Close the database connection
$conn->close();
?>
