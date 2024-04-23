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





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Furrify Lost & Found</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img\logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
</head>

<body>


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><img src="img\logo.png" style="padding-left: 60px; padding-right: 30px;">Furrify</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <div class="navbar-nav ms-auto py-0">

                        <a href="#" class="nav-item nav-link ">Home</a>
                        <!-- feed section -->
                        <!-- <a href="/index.html" class="nav-item nav-link">About</a> -->
                        <a href="marketplace.html" class="nav-item nav-link ">Marketplace</a>
                        <!-- <a href="/index.html" class="nav-item nav-link">Content</a> -->
                        <a href="eventsx.html" class="nav-item nav-link ">Events</a>
                        <!-- <a href="/index.html" class="nav-item nav-link">Resources</a> -->
                        <a href="Veterinarymain.html" class="nav-item nav-link x">Veterinary</a>

                        <a href="strayanimalsconnect.html" class="nav-item nav-link">SAC</a>
                        <a href="Lost&Found.html" class="nav-item nav-link active">Lost & Found</a>
                        <a href="profile_view_photos.html" class="nav-item nav-link">My Profile</a>

                    </div>
                </div>
        </nav>

        <!-- <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Navbar & Hero End -->

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
                                                            <form id="lostPetForm" action="Lost&Found.php" method="POST" enctype="multipart/form-data">

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
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="location">
                                                                            <h5>Location:</h5>
                                                                        </label>
                                                                        <input class="form-control" type="text" name="location" id="location">
                                                                    </div>
                                                                    <!-- Pet Age -->
                                                                    <div class="col-md-6">
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
                                                                        <label class="small mb-1" for="petColor">
                                                                            <h5>Pet Color:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="petColor" type="text" name="petColor">
                                                                    </div>
                                                                </div>
                                                                <!-- Breed and Description -->
                                                                <div class="row gx-3 mb-3">
                                                                    <!-- Breed -->
                                                                    <div class="col-md-6">
                                                                        <label class="small mb-1" for="breed">
                                                                            <h5>Breed:</h5>
                                                                        </label>
                                                                        <input class="form-control" id="breed" type="email" name="breed">
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
    <!-- Navbar & Hero End -->
    <section class="lost-pets">
        <div class="container-fluid">
            <div class="row">
                <?php include 'fetch_lost_pets.php'; ?>
            </div>
        </div>
    </section>


    


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
                                <img src="img\logo.png" height="90" alt="" loading="lazy" />
                            </div>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam sequi voluptate quas.
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
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Furrify.com</a
              >
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->
        <!-- Footer End -->


    <!-- Back to Top -->


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
