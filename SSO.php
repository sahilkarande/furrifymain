<?php
// Include the database connection file
require 'assets\Furrify-Web\db_connection.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare an SQL statement for insertion
    $stmt = $conn->prepare("INSERT INTO volunteer_details (Full_Name, Date_of_Birth, Street_Address, City, State, Home_Phone, Work_Phone, Cell_Phone, Email_Address, Employer_Job_Title, May_Contact_For_Reference, Allergies_Physical_Restrictions, How_Did_You_Hear, Why_Volunteer_At, Work_With_Rescue, Other_Rescue_Contact, Pets_Currently_Owned, Animal_Experience, Other_Experience, Volunteer_Work_Preferences, Availability, Volunteer_Off_Premises,Reference_1, Additional_Comments, Emergency_Contact, Liability_Waiver_Agreement, Parent_Guardian_Permission, Other_Comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if the statement is prepared successfully
    if ($stmt) {
        // Bind parameters to the prepared statement as strings
        $stmt->bind_param("ssssssssssssssssssssssssssss", $fullName, $dob, $streetAddress, $city, $state, $homePhone, $workPhone, $cellPhone, $email, $employer, $contactEmployer, $allergies, $howHeard, $whyVolunteer, $otherOrgs, $otherOrgsContact, $petsOwned, $animalExperience, $otherExperience, $volunteerPref, $availability, $volunteerOffPremises, $ref1, $additionalComments, $emergencyContact, $liabilityAgree, $parentGuardian, $otherComments);

        // Assign POST values to variables
        $fullName = $_POST['fullName'];
        $dob = $_POST['dob'];
        $streetAddress = $_POST['streetAddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $homePhone = $_POST['homePhone'];
        $workPhone = $_POST['workPhone'];
        $cellPhone = $_POST['cellPhone'];
        $email = $_POST['email'];
        $employer = $_POST['employer'];
        $contactEmployer = $_POST['contactEmployer'];
        $allergies = $_POST['allergies'];
        $howHeard = $_POST['howHeard'];
        $whyVolunteer = $_POST['whyVolunteer'];
        $otherOrgs = $_POST['otherOrgs'];        
        $otherOrgsContact = $_POST['otherOrgsContact'];
        $petsOwned = $_POST['petsOwned'];
        if (isset($_POST["animalExp"]) && is_array($_POST["animalExp"])) {
            // Sanitize and prepare the values to be inserted into the database
            $animalExp = implode(", ", array_map(function ($value) {
                return htmlspecialchars($value);
            }, $_POST["animalExp"]));
        $otherSkills = isset($_POST["otherSkills"]) ? (is_array($_POST["otherSkills"]) ? implode(", ", $_POST["otherSkills"]) : $_POST["otherSkills"]) : "";
        $volunteerPref = isset($_POST["volunteerPref"]) ? (is_array($_POST["volunteerPref"]) ? implode(", ", $_POST["volunteerPref"]) : $_POST["volunteerPref"]) : "";
        $availability = isset($_POST["availability"]) ? (is_array($_POST["availability"]) ? implode(", ", $_POST["availability"]) : $_POST["availability"]) : "";
        $volunteerOffPremises = isset($_POST['volunteerOffPremises']) ? $_POST['volunteerOffPremises'] : '';        $ref1 = $_POST['ref1'];
        $additionalComments = $_POST['additionalComments'];
        $emergencyContact = $_POST['emergencyContact'];
        $liabilityAgree = $_POST['liabilityAgree'];
        $parentGuardian = $_POST['parentGuardian'];
        $otherComments = isset($_POST['otherComments']) ? $_POST['otherComments'] : '';

        if ($stmt->execute()) {
            // PHP code executed successfully, now let's use JavaScript to show an alert
            echo '<script type="text/javascript">alert("You Form has been filled Sucessfully. You will be contacted soon");</script>';
            // Reset the form after successful submission
        } else {
            echo "Error: " . $stmt->error;
        }

        

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }

    // Close the connection
    $conn->close();
}
?>










<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Furrify SSO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />


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
    <link href="../furrify1/assets/css/SSO.css" rel="stylesheet">

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
                    <a href="Veterinarymain.php" class="nav-item nav-link  text-black">Veterinary</a>
                    <a href="strayanimalsconnect.php" class="nav-item nav-link text-black">SAC</a>
                    <a href="Lost&Found.php" class="nav-item nav-link text-black">Lost & Found</a>
                    <a href="SSO.php" class="nav-item nav-link active text-black">SSO</a>
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
                        <h1 class="display-3 text-white animated slideInDown">Save Speechless Organization</h1>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Navbar & Hero End -->

        <!-- Hero header content -->
    </div>
    <div class="container">
        <!-- Bar with three options -->
        <div class="row justify-content-center mb-4">
            <div class="col-auto">
                <div class="btn-group" role="group" aria-label="Options">
                    <button type="button" class="btn btn-primary" id="volunteerBtn">Volunteer</button>
                    <button type="button" class="btn btn-primary" id="donateBtn">Donate</button>
                    <button type="button" class="btn btn-primary" id="blogsBtn">Blogs</button>
                    <button type="button" class="btn btn-primary" id="adoptionBtn">Adoption</button>
                    <button type="button" class="btn btn-primary" id="contactBtn">Contact</button>
                </div>
            </div>
        </div>
        <!-- Sections corresponding to each option -->
        <div id="volunteerSection" class="section">
            <h2>Volunteer Section</h2>
            <div class="card-body">
                <form id="volunteerform" method="POST" enctype="multipart/form-data">
                    <!-- Personal Information -->
                    <div class="form-group mb-3">
                        <label for="fullName" class="small mb-1"><h5>Full Name:</h5></label>
                        <input class="form-control" type="text" name="fullName" id="fullName" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="dob" class="small mb-1"><h5>Date of Birth:</h5></label>
                        <input class="form-control" type="date" name="dob" id="dob" required>
                    </div>
                    <!-- Address -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label for="streetAddress" class="small mb-1"><h5>Street Address:</h5></label>
                            <input class="form-control" type="text" name="streetAddress" id="streetAddress" required>
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="small mb-1"><h5>City:</h5></label>
                            <input class="form-control" type="text" name="city" id="city" required>
                        </div>
                        <div class="col-md-3">
                            <label for="state" class="small mb-1"><h5>State:</h5></label>
                            <input class="form-control" type="text" name="state" id="state" required>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-4">
                            <label for="homePhone" class="small mb-1"><h5>Home Phone:</h5></label>
                            <input class="form-control" type="tel" name="homePhone" id="homePhone" required>
                        </div>
                        <div class="col-md-4">
                            <label for="workPhone" class="small mb-1"><h5>Work Phone:</h5></label>
                            <input class="form-control" type="tel" name="workPhone" id="workPhone">
                        </div>
                        <div class="col-md-4">
                            <label for="cellPhone" class="small mb-1"><h5>Cell Phone:</h5></label>
                            <input class="form-control" type="tel" name="cellPhone" id="cellPhone" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="small mb-1"><h5>Email Address:</h5></label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <!-- Employer Information -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label for="employer" class="small mb-1"><h5>Employer/Job Title:</h5></label>
                            <input class="form-control" type="text" name="employer" id="employer" required>
                        </div>
                        <div class="col-md-6">
                            <label for="contactEmployer" class="small mb-1"><h5>May we contact for reference:</h5></label>
                            <select class="form-control" id="contactEmployer" name="contactEmployer">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <!-- Allergies or Physical Restrictions -->
                    <div class="form-group mb-3">
                        <label for="allergies" class="small mb-1"><h5>Allergies or physical restrictions:</h5></label>
                        <textarea class="form-control" name="allergies" id="allergies"></textarea>
                    </div>
                    <!-- How Heard About -->
                    <div class="form-group mb-3">
                        <label for="howHeard" class="small mb-1"><h5>How did you hear about SSO?</h5></label>
                        <textarea class="form-control" name="howHeard" id="howHeard" required></textarea>
                    </div>
                    <!-- Why Volunteer -->
                    <div class="form-group mb-3">
                        <label for="whyVolunteer" class="small mb-1"><h5>Why do you want to volunteer at SSO?</h5></label>
                        <textarea class="form-control" name="whyVolunteer" id="whyVolunteer" required></textarea>
                    </div>
                    <!-- Other Organizations -->
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label for="otherOrgs" class="small mb-1"><h5>Do you work with any other rescue organizations?</h5></label>
                            <select class="form-control" id="otherOrgs" name="otherOrgs">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="otherOrgsContact" class="small mb-1"><h5>If so, please provide contact information for that organization:</h5></label>
                            <input class="form-control" type="text" name="otherOrgsContact" id="otherOrgsContact">
                        </div>
                    </div>
                    <!-- Pets Owned -->
                    <div class="form-group mb-3">
                        <label for="petsOwned" class="small mb-1"><h5>Please list any pets you currently own (or have owned in the past).</h5></label>
                        <textarea class="form-control" name="petsOwned" id="petsOwned"></textarea>
                    </div>

            <div class="mb-3">
                
            </div>

            <div class="container">
    <div class="row">
        <!-- Animal Experience Column -->
        <div class="col-md-4">
            <div class="mb-3">
            <label class="small mb-1"><h5>Animal Experience:</h5></label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp1" name="animalExp1" value="Veterinary Hospital">
                    <label class="form-check-label" for="animalExp1">
                        Veterinary Hospital
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp2" name="animalExp2" value="Boarding Facility">
                    <label class="form-check-label" for="animalExp2">
                        Boarding Facility
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp3" name="animalExp3" value="Foster Home">
                    <label class="form-check-label" for="animalExp3">
                        Foster Home
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp4" name="animalExp4" value="Dog Grooming">
                    <label class="form-check-label" for="animalExp4">
                        Dog Grooming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp5" name="animalExp5" value="Cat Grooming">
                    <label class="form-check-label" for="animalExp5">
                        Cat Grooming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp6" name="animalExp6" value="Shelter Work">
                    <label class="form-check-label" for="animalExp6">
                        Shelter Work
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp7" name="animalExp7" value="Training/Obedience">
                    <label class="form-check-label" for="animalExp7">
                        Training/Obedience
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp8" name="animalExp8" value="Pet Sitting">
                    <label class="form-check-label" for="animalExp8">
                        Pet Sitting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp9" name="animalExp9" value="Farm Animals">
                    <label class="form-check-label" for="animalExp9">
                        Farm Animals
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="animalExp10" name="animalExp10" value="Other">
                    <label class="form-check-label" for="animalExp10">
                        Other
                    </label>
                </div>
            </div>
        </div>
        <!-- Other Experience/Skills Column -->
        <div class="col-md-4">
            <div class="mb-3">
            <label for="otherSkills" class="small mb-1"><h5>Other Experience, Special Skills, Strengths, Talents:</h5></label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills1" name="otherSkills1" value="Computers Management">
                    <label class="form-check-label" for="otherSkills1">
                        Computers Management
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills2" name="otherSkills2" value="Crafts">
                    <label class="form-check-label" for="otherSkills2">
                        Crafts
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills3" name="otherSkills3" value="Working w/children">
                    <label class="form-check-label" for="otherSkills3">
                        Working w/children
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills4" name="otherSkills4" value="Graphic Arts">
                    <label class="form-check-label" for="otherSkills4">
                        Graphic Arts
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills5" name="otherSkills5" value="Woodwork/Carpentry">
                    <label class="form-check-label" for="otherSkills5">
                        Woodwork/Carpentry
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills6" name="otherSkills6" value="Painting">
                    <label class="form-check-label" for="otherSkills6">
                        Painting
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills7" name="otherSkills7" value="Photography">
                    <label class="form-check-label" for="otherSkills7">
                        Photography
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills8" name="otherSkills8" value="Writing">
                    <label class="form-check-label" for="otherSkills8">
                        Writing
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills9" name="otherSkills9" value="Secretarial">
                    <label class="form-check-label" for="otherSkills9">
                        Secretarial
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills10" name="otherSkills10" value="Fund-raising">
                    <label class="form-check-label" for="otherSkills10">
                        Fund-raising
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills11" name="otherSkills11" value="Public Speaking">
                    <label class="form-check-label" for="otherSkills11">
                        Public Speaking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="otherSkills12" name="otherSkills12" value="Other">
                    <label class="form-check-label" for="otherSkills12">
                        Other
                    </label>
                </div>
            </div>
        </div>
        <!-- Volunteer Work Preferences Column -->
        <div class="col-md-4">
            <div class="mb-3">
            <label for="volunteerPref" class="small mb-1"><h5>Volunteer Work Preferences:</h5></label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref1" name="volunteerPref1" value="Shelter cleaning">
                    <label class="form-check-label" for="volunteerPref1">
                        Shelter cleaning
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref2" name="volunteerPref2" value="Pet Transport">
                    <label class="form-check-label" for="volunteerPref2">
                        Pet Transport
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref3" name="volunteerPref3" value="Dog Walking">
                    <label class="form-check-label" for="volunteerPref3">
                        Dog Walking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref4" name="volunteerPref4" value="Clerical/Office">
                    <label class="form-check-label" for="volunteerPref4">
                        Clerical/Office
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref5" name="volunteerPref5" value="Foster care (please fill out foster app)">
                    <label class="form-check-label" for="volunteerPref5">
                        Foster care (please fill out foster app)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref6" name="volunteerPref6" value="Computer/Website">
                    <label class="form-check-label" for="volunteerPref6">
                        Computer/Website
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref7" name="volunteerPref7" value="Special Events">
                    <label class="form-check-label" for="volunteerPref7">
                        Special Events
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref8" name="volunteerPref8" value="Educational Programs">
                    <label class="form-check-label" for="volunteerPref8">
                        Educational Programs
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref9" name="volunteerPref9" value="Community Outreach">
                    <label class="form-check-label" for="volunteerPref9">
                        Community Outreach
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="volunteerPref10" name="volunteerPref10" value="Other">
                    <label class="form-check-label" for="volunteerPref10">
                        Other
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Availability -->
            <div class="mb-3">
                <label for="availability" class="small mb-1">
                    <h5>When are you available to volunteer?</h5>
                </label><br>
                <!-- Checkbox options -->
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="weekdays" name="availability" value="Weekdays">
                    <label class="form-check-label" for="weekdays">Weekdays</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="weekends" name="availability" value="weekends">
                    <label class="form-check-label" for="weekends">Weekend</label>
                </div>
                <!-- Include other checkboxes as needed -->
            </div>
            <!-- Volunteer off premises -->
            <div class="form-group mb-3">
                <label for="offPremises" class="small mb-1">
                    <h5>Would you be willing to volunteer off the shelter premises?</h5>
                </label>
                <select class="form-control" id="offPremises" name="offPremises">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <!-- References -->
            <div class="row gx-3 mb-3">
                <div class="col-md-4">
                    <label for="ref1" class="small mb-1">
                        <h5>Reference #1 (Name, phone # and relationship to self):</h5>
                    </label>
                    <textarea class="form-control" name="ref1" id="ref1"></textarea>
                </div>
                <!-- Include other reference fields -->
            </div>
            <!-- Additional Comments -->
            <div class="form-group mb-3">
                <label for="additionalComments" class="small mb-1">
                    <h5>Any additional comments:</h5>
                </label>
                <textarea class="form-control" name="additionalComments" id="additionalComments"></textarea>
            </div>
            <!-- Emergency Contact -->
            <div class="form-group mb-3">
                <label for="emergencyContact" class="small mb-1">
                    <h5>In case of emergency, who should we contact? (name and phone #)</h5>
                </label>
                <input class="form-control" type="text" name="emergencyContact" id="emergencyContact" required>
            </div>
            <div class="form-group mb-3">
                <label for="volunteerAgreement" class="small mb-1">
                    <h5>This volunteer agreement (“Agreement”) is entered into as of the date set forth below by The Last Resort (TLR). WHEREAS, the Volunteer has voluntarily contacted TLR and has expressed an interest in working with dogs in the care and custody of TLR. In consideration of TLR’s agreement to allow the volunteer to view and/or interact with such dogs, the volunteer hereby, for his/her heirs, his/her personal representatives, and him/herself represent and warrant as follows: 1. The volunteer is fully aware of the risks that dogs pose and have elected to view and/or interact with one or more dogs in the care of TLR voluntarily. The volunteer knowingly assumes all risks that exposure to dogs may pose, including but not limited to serious bodily injury and/or death. 2. THE VOLUNTEER HEREBY WAIVES, RELEASES DISCHARGES, HOLD HARMLESS, AND PROMISES TO INDEMNIFY AND NOT TO BRING SUIT AGAINT TLR, its directors, officers, volunteers, staff, and all other agents, and attorney for any of the referenced parties and any other parties acting for or on behalf of the referenced partied from an and all rights and claims which the volunteer has or which may hereafter accrue to the volunteer and from any and all damages which may be sustained by the volunteer directly or indirectly in connection with, or arising out of, the volunteer’s exposure to such dogs.</h5>
                </label>
            </div>

            <!-- Liability Agreement -->
            <div class="form-group mb-3">
                <label for="liabilityAgree" class="small mb-1">
                    <h5>By writing your name here, you are agreeing to the above liability waiver:</h5>
                </label>
                <input class="form-control" type="text" name="liabilityAgree" id="liabilityAgree" required>
            </div>
            <!-- Parent/Guardian Permission -->
            <div class="form-group mb-3">
                <label for="parentGuardian" class="small mb-1">
                    <h5>By writing your name here, you are stating that you are the parent/guardian of the above applicant and you grant your permission for them to volunteer:</h5>
                </label>
                <input class="form-control" type="text" name="parentGuardian" id="parentGuardian" required>
            </div>
            <!-- Additional Notes -->
            <div class="form-group mb-3">
                <label for="additionalNotes" class="small mb-1">
                    <h5>Anything else you would like to say, please note it here:</h5>
                </label>
                <textarea class="form-control" name="additionalNotes" id="additionalNotes"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="form-group mb-3">
                <button type="submit" form="volunteerform" class="btn btn-primary">Submit Form</button>
            </div>
        </form>
    </div>
        </div>
        <div id="donateSection" class="section" style="display: none;">
    <h2>Donate Section</h2>
    <form id="donationForm" class="card-body" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="small mb-1" for="fullName"><h5>Full Name:</h5></label>
            <input class="form-control" type="text" id="fullName" name="fullName" required>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="lastName"><h5>Last Name:</h5></label>
            <input class="form-control" type="text" id="lastName" name="lastName" required>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="email"><h5>E-mail:</h5></label>
            <input class="form-control" type="email" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="phone"><h5>Phone Number:</h5></label>
            <input class="form-control" type="tel" id="phone" name="phone" required>
        </div>

        <div class="row gx-3 mb-3">
            <div class="col-md-4">
                <label class="small mb-1"><h5>Type of Donation:</h5></label><br>
                <input type="checkbox" id="moneyDonation" name="donationType" class="form-check-input" value="Giving Money">
                <label for="moneyDonation" class="form-check-label">Giving Money</label><br>

                <input type="checkbox" id="thingsDonation" name="donationType" class="form-check-input" value="Giving Things">
                <label for="thingsDonation" class="form-check-label">Giving Things</label><br>

                <input type="checkbox" id="helpingOut" name="donationType" class="form-check-input" value="Helping Out">
                <label for="helpingOut" class="form-check-label">Helping Out</label><br>
            </div>
            <div class="col-md-4">
                <input type="checkbox" id="specialEvents" name="donationType" class="form-check-input" value="Special Events">
                <label for="specialEvents" class="form-check-label">Special Events</label><br>

                <input type="checkbox" id="leavingGift" name="donationType" class="form-check-input" value="Leaving a Gift">
                <label for="leavingGift" class="form-check-label">Leaving a Gift</label><br>

                <input type="checkbox" id="companySupport" name="donationType" class="form-check-input" value="Company Support">
                <label for="companySupport" class="form-check-label">Company Support</label><br>
            </div>
            <div class="col-md-4">
                <input type="checkbox" id="adoptionCosts" name="donationType" class="form-check-input" value="Adoption Costs">
                <label for="adoptionCosts" class="form-check-label">Adoption Costs</label><br><br>
            </div>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="comments"><h5>Comments:</h5></label><br>
            <textarea class="form-control" id="comments" name="comments" rows="4" cols="50"></textarea>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="donationAmount"><h5>Donation Amount:</h5></label>
            <input class="form-control" type="number" id="donationAmount" name="donationAmount" required>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="qrCode"><h5>QR Code for Payment:</h5></label>
            <img src="images.png" alt="QR Code" style="max-width: 100%;" />
        </div>


        <div class="mb-3">
            <label class="small mb-1" for="transactionId"><h5>Transaction ID:</h5></label>
            <input class="form-control" type="text" id="transactionId" name="transactionId" required>
        </div>

        <div class="mb-3">
            <label class="small mb-1" for="paymentScreenshot"><h5>Upload Payment Screenshot:</h5></label>
            <input class="form-control" type="file" id="paymentScreenshot" name="paymentScreenshot" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit Donation</button>
    </form>
</div>

        <div id="blogsSection" class="section" style="display: none;">
            <h2>Blogs Section</h2>
        </div>
        <div id="adoptionSection" class="section" style="display: none;">
            <h2>Adoption Section</h2>
            <div class="gallery">
        <!-- Sample images with Adopt Me buttons -->
        <div class="gallery-item">
            <img src="assets/images/pets/1.jpg" alt="Sample Image 1">
            <button class="adopt-button btn btn-primary" data-pet-id="adoptpet1">Adopt Me</button>            <div class="pet-info">
                <p>Name: Bella</p>
                <p>Age: 2 years</p>
                <p>Breed: Labrador Retriever</p>
                <p>Vaccination Status: Yes</p>
                <p class="unique-id">ID: adoptpet1</p>
            </div>
        </div>


<!-- Repeat this structure for each image and button -->
<div class="gallery-item">
    <img src="assets/images/pets/2.jpeg" alt="Sample Image 2">
    <button class="adopt-button btn btn-primary"  data-pet-id="adoptpet2">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Max</p>
        <p>Age: 1.5 years</p>
        <p>Breed: German Shepherd</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet2</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/3.jpg" alt="Sample Image 3">
    <button class="adopt-button btn btn-primary"  data-pet-id="adoptpet3">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Luna</p>
        <p>Age: 3 years</p>
        <p>Breed: Siamese Cat</p>
        <p>Vaccination Status: No</p>
        <p class="unique-id">ID: adoptpet3</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/4.jpeg" alt="Sample Image 4">
    <button class="adopt-button btn btn-primary"  data-pet-id="adoptpet4">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Cooper</p>
        <p>Age: 2.5 years</p>
        <p>Breed: Golden Retriever</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet4</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/5.jpg" alt="Sample Image 5">
    <button class="adopt-button btn btn-primary" data-pet-id="adoptpet5">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Milo</p>
        <p>Age: 4 years</p>
        <p>Breed: Persian Cat</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet5</p>
    </div>
</div>

<!-- Repeat this structure for each image and button -->
<div class="gallery-item">
    <img src="assets/images/pets/WhatsApp Image 2024-04-22 at 12.04.55 AM (1).jpeg" alt="Sample Image 1">
    <button class="adopt-button btn btn-primary"  data-pet-id="adoptpet6">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Bella</p>
        <p>Age: 2 years</p>
        <p>Breed: Labrador Retriever</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet6</p>
    </div>
</div>

<!-- Repeat this structure for each image and button -->
<div class="gallery-item">
    <img src="assets/images/pets/WhatsApp Image 2024-04-22 at 12.04.55 AM.jpeg" alt="Sample Image 2">
    <button class="adopt-button btn btn-primary" data-pet-id="adoptpet7">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Max</p>
        <p>Age: 1.5 years</p>
        <p>Breed: German Shepherd</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet7</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/WhatsApp Image 2024-04-22 at 12.04.56 AM (1).jpeg" alt="Sample Image 3">
    <button class="adopt-button btn btn-primary" data-pet-id="adoptpet8">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Luna</p>
        <p>Age: 3 years</p>
        <p>Breed: Siamese Cat</p>
        <p>Vaccination Status: No</p>
        <p class="unique-id">ID: adoptpet8</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/WhatsApp Image 2024-04-22 at 12.04.56 AM.jpeg" alt="Sample Image 4">
    <button class="adopt-button btn btn-primary"  data-pet-id="adoptpet9">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Cooper</p>
        <p>Age: 2.5 years</p>
        <p>Breed: Golden Retriever</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet9</p>
    </div>
</div>

<div class="gallery-item">
    <img src="assets/images/pets/WhatsApp Image 2024-04-22 at 12.04.57 AM.jpeg" alt="Sample Image 5">
    <button class="adopt-button btn btn-primary" data-pet-id="adoptpet10">Adopt Me</button>
    <div class="pet-info">
        <p>Name: Milo</p>
        <p>Age: 4 years</p>
        <p>Breed: Persian Cat</p>
        <p>Vaccination Status: Yes</p>
        <p class="unique-id">ID: adoptpet10</p>
    </div>
</div>

<!-- Repeat this structure for each image and button -->

        </div>

        <div class="modal fade" id="adoptModal" tabindex="-1" aria-labelledby="adoptModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adoptModalLabel">Adoption Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-id">ID: <span class="pet-id"></span></p>
                <form class="adopt-form">
                    <div class="form-group">
                        <label for="pet-id">Pet ID:</label>
                        <input type="text" class="form-control" id="pet-id" name="pet-id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div id="confirmation-message" style="display: none;">
                        <p class="text-success">Thank you for your submission!</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
        <div id="contactSection" class="section" style="display: none;">
            <h2>Contact Section</h2>
        </div>
    </div>

    <style>
        .gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px; /* Gap between images */
    padding: 20px;
}    

.gallery-item {
    width: calc(20% - 20px); /* 20% width for each item with gap calculation */
    margin-bottom: 20px; /* Gap between rows */
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}

.pet-info {
    position: absolute;
    top: 0; /* Position at the top of the gallery item */
    left: 0;
    right: 0;
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 8px; /* Adjust border-radius for the info container */
    text-align: left; /* Align text to the left */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: opacity 0.3s ease;
    opacity: 0; /* Hide initially */
    pointer-events: none; /* Prevent interaction */
}

.gallery-item:hover .pet-info {
    opacity: 1; /* Show on hover */
    pointer-events: auto; /* Enable interaction */
}

.pet-info p {
    margin: 8px 0; /* Adjust margin between paragraphs */
    font-size: 14px; /* Adjust font size as needed */
}

.adopt-button {
    position: absolute;
    bottom: 0px;
    left: 50%;
    width: 70%;
    transform: translateX(-50%);
    width: 120px; /* Adjust button width */
    background-color: #007bff;
    color: white;
    border: none;
    padding: 8px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 20px;
    transition: background-color 0.3s ease;
}

.adopt-button:hover {
    background-color: #0056b3;
}
        /* Your CSS styles here */
        .card-body {
            padding: 20px;
        }

        h5 {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            margin-bottom: 15px;
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 6px 12px;
        }

        .row {
            margin-bottom: 15px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 16px;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #119EC2;
            color: #fff;
            border: none;
            padding: 8px 16px;
        }

        .btn-danger:hover,
        .btn-primary:hover {
            opacity: 0.8;
            cursor: pointer;
        }
        .section h2 {
                    font-size: 48px; /* Increase the font size as needed */
                    text-align: center; /* Center align the heading */
                }
        /* Bar with options styles */
        .btn-group {
        background-color: #119EC2;
        border-radius: 30px; /* Increase border-radius for a more rounded look */
        padding: 0 20px; /* Padding around the buttons */
        height: 70px;
        display: flex;
        align-items: center;
        gap: 20px; /* Gap between buttons */
        overflow: hidden; /* Hide overflow to ensure rounded corners are maintained */
        }

        /* Button styles */
        .btn-group .btn {
        border-radius: 20px; /* Rounded corners for buttons */
        padding: 10px 20px; /* Padding inside buttons */
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease; /* Add transform for hover effect */
        transform: translateY(0); /* Initial transform state */
        }

        /* Hover effect */
        .btn-group .btn:hover {
        background-color: #0d7ea8;
        color: white;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2); /* Add a shadow effect on hover */
        transform: translateY(-5px); /* Move button slightly up on hover */
        }

                /* Modal styles */
        .modal-dialog {
            max-width: 500px;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-body input[type="text"],
        .modal-body input[type="email"],
        .modal-body input[type="tel"] {
            width: 100%;
            margin-bottom: 15px;
        }

        .modal-body button[type="submit"] {
            width: 100%;
        }


    </style>
    <!-- Footer and back to top button -->
    </div>
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
                                <img src="assets\pages\logo.png" height="90" alt="" loading="lazy" />
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
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">Furrify.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- Your existing JavaScript libraries and code -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    <!-- Add your custom JavaScript code here -->
    <script>
        // JavaScript code for showing/hiding sections based on button clicks
        $(document).ready(function () {
            // Function to show a specific section and hide others
            function showSection(sectionId) {
                $(".section").hide(); // Hide all sections
                $("#" + sectionId).show(); // Show the specified section
            }

            // Button click event handlers
            $("#volunteerBtn").click(function () {
                showSection("volunteerSection");
            });

            $("#donateBtn").click(function () {
                showSection("donateSection");
            });
            
            $("#blogsBtn").click(function () {
                window.location.href = "blogs.php"; // Navigate to blogs.php for "Blogs" button
            });

            $("#adoptionBtn").click(function () {
                showSection("adoptionSection");
            });

            $("#contactBtn").click(function () {
                showSection("contactSection");
            });
        });
        $(document).ready(function () {
        $('.adopt-button').click(function () {
            let petId = $(this).data('pet-id');
            $('#adoptModal .modal-id .pet-id').text(petId); // Update the pet ID on the modal
            $('#adoptModal #pet-id').val(petId); // Set the pet ID in the form field with label
            $('#confirmation-message').hide(); // Hide the confirmation message
            $('#adoptModal').modal('show'); // Show the modal
        });

        $('.adopt-form').submit(function (e) {
            e.preventDefault();
            let petId = $('#adoptModal #pet-id').val();
            let name = $('#name').val();
            let email = $('#email').val();
            let contact = $('#contact').val();

            $.ajax({
                type: "POST",
                url: "save_data.php", // Your PHP file to handle the data
                data: { petId: petId, name: name, email: email, contact: contact },
                success: function (response) {
                    console.log(response); // Log the response from the server
                    $('#confirmation-message').show(); // Show the confirmation message
                    $('#adoptModal .modal-body form').hide(); // Hide the form
                    // You can add any additional logic here based on the response
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText); // Log any errors
                }
            });
        });
    });


    window.onload = function() {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        document.getElementById('volunteerform').reset();
    }

    </script>
    </body>

</html>