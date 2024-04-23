<?php
// Include the database connection file
include 'assets\Furrify-Web\db_connection.php';

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $pet_name = $_POST["petname"];
    $location = $_POST["location"];
    $pet_age = $_POST["petage"];
    $category = $_POST["categories"];
    $gender = $_POST["gender"];
    $vaccination = $_POST["vaccination"];
    $contact = $_POST["contact"];
    $pet_color = $_POST["pet_color"];
    $breed = $_POST["breed"];
    $description = $_POST["description"];
    $owner_details = $_POST["owner_details"];
    $lfstatus = $_POST["lfstatus"];

    // File upload handling
    $imageData = null;
    if ($_FILES['myfile']['size'] > 0) {
        $imageTmpName = $_FILES['myfile']['tmp_name'];
        $imageData = file_get_contents($imageTmpName);
        if ($imageData === false) {
            // Handle file read error
            echo "Error reading uploaded file.";
            exit();
        }
    }

    // Prepare and execute SQL statement
    $sql = "INSERT INTO lost_pets (pet_name, location, pet_age, category, gender, vaccination, contact, pet_color, breed, description, owner_details, lfstatus, photo)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissssssssss", $pet_name, $location, $pet_age, $category, $gender, $vaccination, $contact, $pet_color, $breed, $description, $owner_details, $lfstatus, $imageData);

    if ($stmt->execute()) {
        // Redirect to prevent form resubmission
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


// Fetch lost pets from the database
$sql = "SELECT * FROM lost_pets";
$result = $conn->query($sql);
?>




<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <title>Furrify Lost & Found</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="../Furrify-Web/img\logo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../furrify1/assets/Furrify-Web/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../furrify1/assets/Furrify-Web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../furrify1/assets/Furrify-Web/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../furrify1/assets/Furrify-Web/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../furrify1/assets/Furrify-Web/css/style.css" rel="stylesheet">
</head>


<body>


  <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-6 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
      <h1 class="text-primary m-0"><img src="../furrify1/assets/images/logo.png" style="padding-left: 60px; padding-right: 30px;"></h1>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
        <a href="index.php" class="nav-item nav-link  text-black">Home</a>
                <a href="marketplace.php" class="nav-item nav-link text-black">Marketplace</a>
                <a href="eventsx.php" class="nav-item nav-link  text-black">Events</a>
                <a href="Veterinarymain.php" class="nav-item nav-link text-black">Veterinary</a>
                <a href="strayanimalsconnect.php" class="nav-item nav-link text-black">SAC</a>
                <a href="Lost&Found.php" class="nav-item nav-link active text-black">Lost & Found</a>
                <a href="SSO.php" class="nav-item nav-link text-black">SSO</a>
                <a href="dashboard.php" class="nav-item nav-link text-black">Admin Dashboard</a>

        </div>
        <div class="d-flex align-items-center">
          <a class="navbar-brand" href="?">
            <img src="./img/pictogram.png" alt="" height="28">
          </a>

         
        </div>

    </nav>


        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Lost & Found</h1>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <style>
                                    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
                * {
                box-sizing: border-box;
                }
                
                .container2 {
                
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
               
                }
                
                .button-container {
                position: relative;
                }
                .button-container button {
                color: rgb(255, 255, 255) ;
                padding: 16px 35px;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                background-color:  rgba(17, 158, 194 ); 
                border-color:  rgba(17, 158, 194 ) ;
                border-radius: 20px;
                cursor: pointer;
                position: relative;
                box-sizing: border-box;
                }
                .button-container:hover .dog {
                transform: translate(20px, -55px) rotate(15deg);
                transition-delay: 0.6s;
                }
                .button-container:hover .paw {
                transition-delay: 0.3s;
                right: -5px;
                }
                .button-container:hover .paw::after {
                transition-delay: 0s;
                left: 0;
                }
                .button-container:hover .paw.top {
                transition-delay: 0.4s;
                right: 40px;
                top: -8px;
                }
                .button-container:hover .tail {
                opacity: 1;
                transition-delay: 0.6s;
                }
                
                .dog {
                position: absolute;
                width: 55px;
                height: 55px;
                top: -2px;
                right: 1px;
                transform: translate(0, 0) rotate(0);
                transition: 0.3s transform cubic-bezier(0.33, 1, 0.68, 1);
                }
                .dog div {
                position: absolute;
                }
                .dog .tail {
                width: 10%;
                height: 35%;
                left: -50%;
                bottom: -34%;
                transform: rotate(-25deg);
                transition: 0.1s opacity;
                transition-delay: 0s;
                opacity: 0;
                }
                .dog .tail::after {
                content: "";
                position: absolute;
                transform-origin: bottom center;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50% 50% 0 0;
                background-color: #e1a46e;
                animation: infinite alternate tailSkew 0.3s cubic-bezier(0.65, 0, 0.35, 1);
                }
                @keyframes tailSkew {
                from {
                transform: skewX(15deg);
                }
                to {
                transform: skewX(-15deg);
                }
                }
                .dog .body {
                width: 70%;
                height: 50%;
                bottom: -20%;
                left: 50%;
                transform: translateX(-50%);
                background-color: #9f6a43;
                border-radius: 50% 50% 0 0;
                }
                .dog .head {
                width: 65%;
                height: 70%;
                bottom: 5%;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 80% 80% 60% 60%;
                background-color: #e1a46e;
                }
                .dog .nuzzle {
                width: 70%;
                height: 40%;
                bottom: 0%;
                left: 50%;
                transform: translateX(-50%);
                }
                .dog .nuzzle::before, .dog .nuzzle::after {
                content: "";
                width: 50%;
                height: 100%;
                display: inline-block;
                position: absolute;
                top: 0;
                left: 0;
                background-color: #c28e5f;
                border-radius: 70% 30% 50% 20%;
                z-index: 1;
                }
                .dog .nuzzle::after {
                left: auto;
                right: 0;
                transform: scaleX(-1);
                }
                .dog .mouth {
                width: 50%;
                height: 90%;
                border-radius: 100%;
                background-color: #111827;
                left: 50%;
                bottom: -20%;
                transform: translateX(-50%);
                }
                .dog .tongue {
                width: 50%;
                height: 50%;
                background-color: #ef4444;
                left: 50%;
                transform: translateX(-50%);
                bottom: 5%;
                border-radius: 50%;
                animation: 0.3s alternate tongueBounce infinite cubic-bezier(0.45, 0, 0.55, 1);
                }
                @keyframes tongueBounce {
                from {
                bottom: 20%;
                }
                to {
                bottom: 15%;
                }
                }
                .dog .nose {
                width: 30%;
                height: 20%;
                left: 50%;
                top: 0;
                transform: translateX(-50%);
                z-index: 10;
                }
                .dog .nose::before {
                content: "";
                width: 100%;
                height: 60%;
                top: -50%;
                left: 0;
                position: absolute;
                display: inline-block;
                background-color: #1f2937;
                border-radius: 1000px 1000px 0 0;
                }
                .dog .nose::after {
                content: "";
                width: 100%;
                height: 100%;
                top: 10%;
                left: 0;
                position: absolute;
                display: inline-block;
                background-color: #1f2937;
                border-radius: 0 0 1000px 1000px;
                }
                .dog .nose .nostrils {
                width: 90%;
                height: 100%;
                top: 0;
                z-index: 1;
                left: 50%;
                transform: translateX(-50%);
                }
                .dog .nose .nostrils::before {
                content: "";
                display: inline-block;
                width: 30%;
                left: 10%;
                height: 100%;
                position: absolute;
                background-color: #000;
                border-radius: 100%;
                }
                .dog .nose .nostrils::after {
                content: "";
                display: inline-block;
                width: 30%;
                right: 10%;
                height: 100%;
                position: absolute;
                background-color: #000;
                border-radius: 100%;
                }
                .dog .nose .highlight {
                top: -50%;
                left: 50%;
                width: 80%;
                height: 30%;
                transform: translateX(-50%);
                background-color: rgba(17, 158, 194 ) ;
                border-radius: 1000px 1000px 0 0;
                background: linear-gradient(rgba(17, 158, 194 ) , rgba(255, 255, 255, 0));
                opacity: 0.3;
                }
                .dog .eyes {
                width: 80%;
                height: 35%;
                top: 25%;
                transform: translateX(-50%);
                left: 50%;
                }
                .dog .eyes .left,
                .dog .eyes .right {
                border-radius: 1000px;
                background-color: #111;
                width: 25%;
                height: 52%;
                top: 50%;
                transform: translateY(-50%);
                }
                .dog .eyes .left::after,
                .dog .eyes .right::after {
                content: "";
                display: inline-block;
                position: absolute;
                width: 30%;
                height: 30%;
                background-color: #fff;
                opacity: 0.7;
                border-radius: 1000px;
                left: 15%;
                top: 15%;
                }
                .dog .eyes .left {
                left: 15%;
                }
                .dog .eyes .right {
                right: 15%;
                }
                .dog .ears {
                width: 90%;
                height: 90%;
                top: 70%;
                left: 50%;
                transform: translate(-50%, -50%);
                }
                .dog .ears div {
                width: 30%;
                height: 50%;
                left: 0;
                top: 0;
                background-color: #9f6a43;
                transform: rotate(15deg);
                border-radius: 60% 20% 80% 10%;
                z-index: 1;
                }
                .dog .ears div.right {
                transform: rotate(-15deg) scaleX(-1);
                left: auto;
                right: 0;
                }
                
                .paw {
                position: absolute;
                right: -20px;
                top: 15px;
                overflow: hidden;
                width: 20px;
                height: 20px;
                transition: 0.3s right cubic-bezier(0.33, 1, 0.68, 1);
                }
                .paw::after {
                content: "";
                position: absolute;
                left: -100%;
                top: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                background-color: #e1a46e;
                transition: 0.3s left cubic-bezier(0.33, 1, 0.68, 1);
                transition-delay: 0.3s;
                }
                .paw.top {
                transform: rotate(-90deg);
                top: -20px;
                right: 40px;
                transition: 0.3s top cubic-bezier(0.33, 1, 0.68, 1);
                }
                                </style>
                                <br>
                                <br>
                                <div class="container2">
                                    <div class="button-container">
                                        <div class="dog">
                                            <div class="tail"></div>
                                            <div class="body"></div>
                                            <div class="head">
                                                <div class="eyes">
                                                    <div class="left"></div>
                                                    <div class="right"></div>
                                                </div>
                                                <div class="nuzzle">
                                                    <div class="mouth">
                                                        <div class="tongue"></div>
                                                    </div>
                                                    <div class="nose">
                                                        <div class="nostrils"></div>
                                                        <div class="highlight"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ears">
                                                <div class="left"></div>
                                                <div class="right"></div>
                                            </div>
                                        </div>
                                        <div class="paw"></div>
                                        <div class="paw top"></div>



                                        </button>
                                        <button class="bi bi-plus-circle" data-bs-target="#mymodel" data-bs-toggle="modal">
                                            Add Pets
                                        </button>
                                        <div class="modal" id="mymodel">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="card mb-4">
                                                            <div class="card-header">
                                                                <h1>Pet Information</h1></div>
                                                            <div class="card-body">
                                                            <form id="lostPetForm" method="POST" enctype="multipart/form-data">
                                                                <!-- Pet name -->
                                                                <div class="mb-3">
                                                                    <label class="small mb-1" for="petname">
                                                                        <h5>Pet name:</h5>
                                                                    </label>
                                                                    <input class="form-control" type="text" name="petname" id="petname">
                                                                </div>
                                                                <!-- Location and Pet Age -->
                                                                <div class="row gx-3 mb-3">
                                                                    <!-- Location -->
                                                                    <div class="col">
                                                                        <label class="small mb-1" for="location">
                                                                            <h5>Location:</h5>
                                                                        </label>
                                                                        <input class="form-control" type="text" name="location" id="location">
                                                                    </div>

                                                                    <!-- Owner Details -->
                                                                    <div class="col">
                                                                        <label class="small mb-1" for="owner_details">
                                                                            <h5>Owner Details:</h5>
                                                                        </label>
                                                                        <input class="form-control" type="text" id="owner_details" name="owner_details"><br>
                                                                    </div>

                                                                    <!-- Pet Age -->
                                                                    <div class="col">
                                                                        <label class="small mb-1" for="petage">
                                                                            <h5>Pet Age:</h5>
                                                                        </label>
                                                                        <input class="form-control" type="text" name="petage" id="petage">
                                                                    </div>
                                                                </div>

                                                                <!-- Categories, Gender, and Vaccination -->
                                                                <div class="row gx-3 mb-3">
                                                                    <!-- Categories -->
                                                                    <div class="col-md-4">
                                                                        <label class="small mb-1" for="categories">
                                                                            <h5>Categories</h5>
                                                                        </label>
                                                                        <select class="form-control" id="categories" name="categories">
                                                                            <option value="Dog">Dog</option>
                                                                            <option value="Cat">Cat</option>
                                                                            <option value="Rabbit">Rabbit</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="small mb-1" for="lfstatus">
                                                                            <h5>Status</h5>
                                                                        </label>
                                                                        <select class="form-control" id="lfstatus" name="lfstatus">
                                                                            <option value="Lost">Lost</option>
                                                                            <option value="Found">Found</option>
                                                                        </select>
                                                                    </div>
                                                                    <!-- Gender -->
                                                                    <div class="col-md-4">
                                                                        <label class="small mb-1" for="gender">
                                                                            <h5>Gender</h5>
                                                                        </label>
                                                                        <select class="form-control" id="gender" name="gender">
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                    <!-- Vaccination -->
                                                                    <div class="col-md-4">
                                                                        <label class="small mb-1" for="vaccination">
                                                                            <h5>Vaccination</h5>
                                                                        </label>
                                                                        <select class="form-control" id="vaccination" name="vaccination">
                                                                            <option value="Yes">Yes</option>
                                                                            <option value="No">No</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="small mb-1" for="lfstatus"><h5>Status</h5></label>
                                                                    <select class="form-control" id="lfstatus" name="lfstatus">
                                                                        <option value="Lost">Lost</option>
                                                                        <option value="Found">Found</option>
                                                                    </select>
                                                                </div>

                                                                <!-- Contact and Pet Color -->
                                                                <div class="row gx-3 mb-3">
                                                                    <!-- Contact -->
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="contact">
                                                                            <h5>Contact:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="contact" type="text" name="contact">
                                                                    </div>
                                                                    <!-- Pet Color -->
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="pet_color">
                                                                            <h5>Pet Color:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="pet_color" type="text" name="pet_color">
                                                                    </div>
                                                                </div>
                                                                <!-- Breed and Description -->
                                                                <div class="row gx-3 mb-3">
                                                                    <!-- Breed -->
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="breed">
                                                                            <h5>Breed:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="breed" type="text" name="breed">
                                                                    </div>
                                                                    <!-- Description -->
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="inputBirthday">
                                                                            <h5>Description:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="inputBirthday" type="text" name="description">
                                                                    </div>
                                                                </div>
                                                                <!-- Upload photo of pet -->
                                                                <div class="mb-3">
                                                                    <label class="small mb-1" for="fileupload">
                                                                        <h5><b>Upload photo of pet:</b></h5>
                                                                    </label>
                                                                    <input id="fileupload" name="myfile" type="file" />
                                                                </div>

                                                            </form>
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" form="lostPetForm" class="btn btn-primary">Submit</button>
                                                            
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>
    </div>

    <style>
/* Modal Content */
.modal-content {
    position: relative;
    margin: 30px auto; /* Increased margin for the frame */
    width: 100%;
    max-width: 800px;
    background-color: #fff;
    padding: 40px; /* Increased padding for the frame */
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
.container23 {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    display: grid;
    grid-template-columns: 1fr; /* Set to 1 column by default */
}

.item-dtls {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two columns with equal width */
    gap: 10px;
}

.item-dtls h5 {
    font-size: 16px;
    margin: 0;
    color: #555;
}

.item-dtls h5 span {
    color: #999;
    font-weight: normal;
}



.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 28px;
    cursor: pointer;
    color: #999;
}

/* Modal Header */
.modal-header {
    border-bottom: 2px solid #1E90FF; /* Blue border for header */
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.modal-header h1 {
    font-size: 32px;
    font-weight: bold;
    color: #1E90FF; /* Blue color for header text */
    text-transform: uppercase;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
}

/* Form Inputs */
.form-control {
    display: block;
    width: calc(100% - 40px); /* Adjusted width with padding subtracted */
    padding: 12px 20px; /* Increased padding for input fields */
    font-size: 18px;
    line-height: 1.5;
    color: #333;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 10px;
    transition: border-color 0.3s ease-in-out;
    margin-bottom: 20px; /* Added margin between form fields */
    margin-left: 20px; /* Added left margin */
}

.form-control:focus {
    border-color: #1E90FF; /* Blue border color on focus */
    box-shadow: 0 0 0 3px rgba(30, 144, 255, 0.2); /* Blue shadow on focus */
}

/* Labels */
.form-label {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px; /* Adjusted margin for labels */
    margin-left: 20px; /* Added left margin */
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

/* Submit Button */
.btn-submit {
    display: inline-block;
    padding: 14px 28px;
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    background-color: #1E90FF; /* Blue button background */
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
    margin-top: 20px; /* Added margin above the button */
}

.btn-submit:hover {
    background-color: #007FFF; /* Darker blue on hover */
}

.container3 {
  max-width: 500px;
  margin: 20px auto;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.pet-name {
  font-size: 28px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.location {
  font-size: 18px;
  color: #555;
  margin-bottom: 15px;
}

.status {
  font-size: 24px;
  text-transform: uppercase;
  display: inline-block;
  margin-bottom: 10px;
}

.lost {
  color: #e74c3c; /* Red color for lost status */
}

.found {
  color: #27ae60; /* Green color for found status */
}

.tick {
  margin-left: 5px;
}



    </style>
    <!-- Navbar & Hero End -->
    <section class="lost-pets">
    <div class="container-fluid">
        <div class="image-note-container2">
            <p class="image-note2">Contact admin to change the status of your lost pet</p>
        </div>
        <div class="row">
            <?php
            // Display lost pets
            if ($result->num_rows > 0) {
                // Loop through each row of pet data
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-3 col-lg-4">
                        <div class="item">
                       
                            <?php
                            // Check if image data is available
                            if (!empty($row['photo'])) {
                                // Display image with popup feature
                                echo '<div class="image-container" style="background-image: url(\'data:photo/jpeg;base64,' . base64_encode($row['photo']) . '\');" onclick="showFullScreenDetails(this, \'' . $row['pet_name'] . '\', \'' . $row['location'] . '\', \'' . $row['pet_age'] . '\', \'' . $row['category'] . '\', \'' . $row['gender'] . '\', \'' . $row['vaccination'] . '\', \'' . $row['contact'] . '\', \'' . $row['pet_color'] . '\', \'' . $row['breed'] . '\', \'' . $row['description'] . '\')"></div>';
                            } else {
                                // Display placeholder image or handle empty image case
                                echo '<div class="image-container placeholder-image"></div>';
                            }
                            ?>

                        <br>
                        <div class="container23">
                                <div class="pet-details">
                                <div class="container3">
                                    <h4 class="pet-name"><?php echo $row['pet_name']; ?></h4>
                                    <h4 class="location">Location: <?php echo $row['location']; ?></h4>
                                    <?php
                                    $statusClass = '';
                                    $statusText = '';

                                    if ($row['lfstatus'] === 'Lost') {
                                        $statusClass = 'lost';
                                        $statusText = 'LOST';
                                    } elseif ($row['lfstatus'] === 'Found') {
                                        $statusClass = 'found';
                                        $statusText = 'FOUND';
                                    } else {
                                        $statusText = $row['lfstatus'];
                                    }
                                    ?>
                                    <h4 class="status <?php echo $statusClass; ?>">
                                        <?php echo $statusText; ?>
                                        <?php if ($statusText === 'FOUND') : ?>
                                        <span class="tick">&#10003;</span>
                                        <?php endif; ?>
                                    </h4>
                                    </div>

                                    <div class="item-dtls">
                                        
                                        <h5>Age:<br><?php echo $row['pet_age']; ?></h5>
                                        <h5>Category:<br><?php echo $row['category']; ?></h5>
                                        <h5>Gender:<br><?php echo $row['gender']; ?></h5>
                                        <h5>Vaccination:<br><?php echo $row['vaccination']; ?></h5>
                                        <h5>PetColor:<br> <?php echo $row['pet_color']; ?></h5>
                                        <h5>Breed:<br><?php echo $row['breed']; ?></h5>
                                        <h5>Description:<br><?php echo $row['description']; ?></h5>
                                        <h5>Activity:<br><?php echo $row['lost_datetime']; ?></h5>
                                        <h5>Owner Details:<br><?php echo $row['owner_details']; ?></h5>



                                    </div>
                                </div>
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
        </div>
    </div>
</section>





<style>
    /* Style for two-column layout */
        .detailscolumn {
            width: 50%;
            float: left;
            padding: 0 10px;
            box-sizing: border-box;
        }
        .petname {
            text-align: center;
            margin-top: 20px;
            font-size: 24px; /* Adjust the font size */
            font-weight: bold; /* Make the font bold */
            color: #333; /* Choose a color */
            text-transform: capitalize; /* Capitalize the text */
            padding: 10px 20px; /* Add padding around the text */
            border: 2px solid #333; /* Add a border around the text */
            border-radius: 10px; /* Add border radius for rounded corners */
        }



        /* Centering the note */
        .image-note-container {
            text-align: center;
            margin-top: 20px;
        }

        /* Styling for the note */
        .image-note {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            display: inline-block;
        }
        .image-note-container2 {
            text-align: center;

        }

        .image-note-container2 {
    text-align: center;
    margin-top: 20px;
}

/* Styling for the note */
.image-note2 {
    padding: 10px 20px;
    border-radius: 8px; /* Rounded corners */
    font-size: 16px;
    color: #fff; /* White text */
    display: inline-block;
    background: linear-gradient(to right, #4e54c8, #8f94fb); /* Gradient background */
    border: 1px solid #4e54c8; /* Border color */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    transition: background-color 0.3s, border-color 0.3s, transform 0.3s; /* Smooth transition */
}









    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }



    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }



    .lost-pets {
        padding: 40px; /* Adjust the padding value as needed */
    }

    .item {
        border: 1px solid #ccc; /* Add border style */
        border-radius: 5px; /* Add border radius for rounded corners */
        padding: 10px; /* Add padding inside each item */
        margin-bottom: 20px; /* Add margin to separate each item */
    }

    .image-container {
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        height: 250px; /* Adjust the height as needed */
        border-radius: 5px; /* Add border radius for rounded corners */
        cursor: pointer; /* Add cursor pointer for clickable effect */
    }

    .placeholder-image {
        background-color: #f0f0f0; /* Add background color for placeholder image */
    }
</style>

    <!-- Footer Start -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="col-lg-12">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #ffce00">
        <!-- Grid container -->
        <div class="container">
    
          <hr class="my-5" />
    
          <!-- Section: Text -->
          <section class="mb-5">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                  <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                      <img src="assets\pages\logo.png" height="90" alt=""
                           loading="lazy" />
                    </div>
              
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                  distinctio earum repellat quaerat voluptatibus placeat nam,
                  commodi optio pariatur est quia magnam eum harum corrupti
                  dicta, aliquam sequi voluptate quas.
                </p>
              </div>
            </div>
          </section>
          <!-- Section: Text -->
    
          <!-- Section: Social -->
          <section class="text-center mb-5">
            <a href="" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="text-white me-4">
              <i class="fab fa-github"></i>
            </a>
          </section>
          <!-- Section: Social -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div
             class="text-center p-3"
             style="background-color: rgba(0, 0, 0, 0.2)"
             >
          © 2023 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/"
             >Furrify.com</a
            >
        </div>
        <!-- Copyright -->
      </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->
        <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

