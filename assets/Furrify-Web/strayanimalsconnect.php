
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Furrify</title>
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


<!-- Navbar & Hero Start -->

    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-6 py-3 py-lg-0">
		<a href="" class="navbar-brand p-0">
				<h1 class="text-primary m-0"><img src="img\logo.png" style="padding-left: 60px; padding-right: 30px;">Furrify</h1>
		</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="?" class="nav-item nav-link active text-black">Home</a>
                <a href="assets/Furrify-Web/marketplace.html" class="nav-item nav-link text-black">Marketplace</a>
                <a href="assets/Furrify-Web/eventsx.html" class="nav-item nav-link text-black">Events</a>
                <a href="assets/Furrify-Web/Veterinarymain.html" class="nav-item nav-link text-black">Veterinary</a>
                <a href="assets/Furrify-Web/strayanimalsconnect.php" class="nav-item nav-link text-black">SAC</a>
                <a href="assets/Furrify-Web/Lost&Found.html" class="nav-item nav-link text-black">Lost & Found</a>


            </div>
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="?">
                    <img src="./img/pictogram.png" alt="" height="28">
                </a>
                <ul class="navbar-nav mb-2 mb-lg-0 ml-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" class="rounded-circle border">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?editprofile">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Account Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="assets/php/action.php?logout">Logout</a></li>
                            </ul>
                    </li>
                    <li>
                        <div class="search-icon-container ml-auto">
                            <div class="search-icon">
                                <i class="bi bi-search"></i>
                            </div>
                            <input type="text" class="form-control search-input" placeholder="looking for someone.." aria-label="Search">
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#addpost" href="?"><i class="bi bi-plus-square-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="bi bi-bell-fill"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><i class="bi bi-chat-right-dots-fill"></i></a>
                    </li>

                </ul>
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
						<h1 class="display-3 text-white animated slideInDown"></h1>
						<div class="position-relative w-75 mx-auto animated slideInDown">
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb justify-content-center">
			<style>
					/* Custom CSS for expanded window width and adjusted elements */


					.container {
						width: 100%;
						max-width: 1200px; /* Adjust max-width as needed */
					}

					.modal-content,
					.modal-dialog,
					.card {
						font-size: 24px; /* Adjust the font size as needed */
					}

					.mb-3 {
						margin-bottom: 1rem !important;
						padding: 10px;
					}

					.bi {
						font-size: 1rem; /* Adjust the icon size */
					}

					.btn {
						padding: 0.25rem 0.5rem; /* Adjust button padding */
						font-size: 0.85rem; /* Adjust button font size */
					}

					.modal-content {
						width: 100%;
						max-width: 1000px; /* Adjust max-width as needed */
						font-size: 14px; /* Adjust font size */
					}

					input[type="text"],
					input[type="datetime-local"],
					select,
					textarea,
					button {
						font-size: 0.85rem; /* Adjust input, select, textarea, and button font size */
					}

					.form-check-label {
						font-size: 0.85rem; /* Adjust checkbox label font size */
					}

					/* Optional: Adjust other specific elements if needed */
					.modal-body {
						padding: 20px; /* Adjust padding */
					}

					.card-header,
					.card-body {
						padding: 20px; /* Adjust card header and body padding */
					}

					@media (min-width: 768px) {
						.col-md-6 {
							flex: 0 0 auto;
							width: 100%;
							padding: 20px;
						}
					}

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
						color: rgb(255, 255, 255);
						padding: 16px 35px;
						font-family: 'Nunito', sans-serif;
						font-size: 20px;
						background-color: rgba(17, 158, 194);
						border-color: rgba(17, 158, 194);
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

					.dog .nuzzle::before,
					.dog .nuzzle::after {
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
						background-color: rgba(17, 158, 194);
						border-radius: 1000px 1000px 0 0;
						background: linear-gradient(rgba(17, 158, 194), rgba(255, 255, 255, 0));
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
				<br><br>
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
							Report To SSO
						</button>
						<div class="modal" id="mymodel">
							<div class="modal-dialog modal-dialog-centered modal-xl">
								<div class="modal-content">
									<div class="modal-body">
										<div class="card mb-4">
											<div class="card-header">
												<h1>Pet Information</h1>
											</div>
											<div class="card-body">
												<form method="POST" action="strayanimalsconnect.php" enctype="multipart/form-data">
													<!-- Pet Name -->
													<div class="mb-3">
														<label class="form-label" for="petname">
															<h4>Pet Name (if known):</h4>
														</label>
														<input class="form-control" type="text" name="petname" id="petname">
													</div>

													<div class="row mb-3">
														<div class="col-md-6">
															<label class="form-label" for="location">
																<h5>Location Found:</h5>
															</label>
															<div class="input-group">
																<input class="form-control" type="text" name="location" id="location">
																<button class="btn btn-outline-secondary" type="button" id="getCurrentLocationBtn">Use Current Location</button>
															</div>
														</div>
														<div class="col-md-6">
															<label class="form-label" for="datetimeFound">
																<h5>Date/Time Found:</h5>
															</label>
															<div class="input-group">
																<input class="form-control" type="datetime-local" name="datetimeFound" id="datetimeFound">
															</div>
														</div>
													</div>
													<div class="mb-3">
													<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#healthConditionsBox" aria-expanded="false" aria-controls="healthConditionsBox">
															Health Conditions <i class="bi bi-chevron-down"></i>
														</button>
														<div class="collapse" id="healthConditionsBox">
															<div class="card card-body">
																<!-- Health Condition Checkboxes -->
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Good health" id="healthCondition1">
																	<label class="form-check-label" for="healthCondition1">Good health</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Minor injuries" id="healthCondition2">
																	<label class="form-check-label" for="healthCondition2">Minor injuries (specify if possible, e.g., scratches, small cuts)</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Severe injuries" id="healthCondition3">
																	<label class="form-check-label" for="healthCondition3">Severe injuries (specify if possible, e.g., broken bones, bleeding)</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Illness" id="healthCondition4">
																	<label class="form-check-label" for="healthCondition4">Illness (specify if known, e.g., respiratory infection, skin condition)</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Malnourished/Underweight" id="healthCondition5">
																	<label class="form-check-label" for="healthCondition5">Malnourished/Underweight</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Dehydration" id="healthCondition6">
																	<label class="form-check-label" for="healthCondition6">Dehydration</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Parasites" id="healthCondition7">
																	<label class="form-check-label" for="healthCondition7">Parasites (e.g., fleas, ticks)</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Limping/Lameness" id="healthCondition8">
																	<label class="form-check-label" for="healthCondition8">Limping/Lameness</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Blindness/Deafness" id="healthCondition9">
																	<label class="form-check-label" for="healthCondition9">Blindness/Deafness</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="Other" id="healthConditionOther">
																	<label class="form-check-label" for="healthConditionOther">Other (provide details below)</label>
																</div>
																<div class="mb-3" id="otherHealthCondition" style="display: none;">
																	<label class="form-label" for="otherHealthInput">
																		<h5>Other Health Condition:</h5>
																	</label>
																	<input class="form-control" type="text" id="otherHealthInput">
																</div>
															</div>
														</div>
													</div>

													<!-- Description, Collar/Tags, Contact Information, Additional Comments -->
													<div class="row mb-3">
														<div class="col-md-6">
															<label class="form-label" for="inputDescription">
																<h5>Description (e.g., color, markings, size):</h5>
															</label>
															<input class="form-control" id="inputDescription" type="text" name="inputDescription">
														</div>
														<div class="col-md-6">
															<label class="form-label" for="collarTags">
																<h5>Collar/Tags (yes/no):</h5>
															</label>
															<select class="form-select" id="collarTags" name="collarTags">
																<option value="yes">Yes</option>
																<option value="no">No</option>
															</select>
														</div>
														<div class="col-md-6">
															<label class="form-label" for="inputContactInfo">
																<h5>Contact Information (name, phone, email):</h5>
															</label>
															<input class="form-control" id="inputContactInfo" type="text" name="inputContactInfo">
														</div>
														<div class="col-md-6">
															<label class="form-label" for="email">
																<h5>Email:</h5>
															</label>
															<input class="form-control" type="email" id="email" name="email">
														</div>
														<div class="col-md-12">
															<label class="form-label" for="additionalComments">
																<h5>Additional Comments (optional):</h5>
															</label>
															<textarea class="form-control" id="additionalComments" rows="3" name="additionalComments"></textarea>
														</div>
													</div>

													<div class="mb-3">
													<label class="form-label" for="fileupload">
															<h5><b>Upload Photo of Pet (optional):</b></h5>
														</label>
														<input id="fileupload" name="myfile" type="file" class="form-control">
													</div>

													<div class="d-grid gap-2 d-md-flex justify-content-md-end">
														<button type="button" class="btn btn-danger me-md-2" onclick="resetForm()">Cancel</button>
														<button type="submit" name="submit" class="btn btn-danger me-md-2">Submit</button>
													</div>
												</form>
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

	<script>
		document.addEventListener('DOMContentLoaded', function() {
		const locationInput = document.getElementById('location');
		const getCurrentLocationBtn = document.getElementById('getCurrentLocationBtn');
		const datetimeAutoManual = document.getElementById('datetimeAutoManual');
		const datetimeFoundInput = document.getElementById('datetimeFound');

		getCurrentLocationBtn.addEventListener('click', function() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(
					function(position) {
						const latitude = position.coords.latitude;
						const longitude = position.coords.longitude;
						getLocationFromCoordinates(latitude, longitude);
					},
					function(error) {
						console.error('Error getting location:', error.message);
						alert('Error getting current location. Please enter manually.');
					}
				);
			} else {
				alert('Geolocation is not supported by this browser.');
			}
		});

		document.addEventListener('DOMContentLoaded', function () {
			const datetimeAutoManual = document.getElementById('datetimeAutoManual');
			const datetimeFoundInput = document.getElementById('datetimeFound');
			const autoDateTimeBtn = document.querySelector('#datetimeAutoManual option[value="auto"]');
			const manualDateTimeBtn = document.querySelector('#datetimeAutoManual option[value="manual"]');

			autoDateTimeBtn.addEventListener('click', function () {
				setAutoDateTime();
			});

			manualDateTimeBtn.addEventListener('click', function () {
				datetimeFoundInput.removeAttribute('disabled');
			});

			function setAutoDateTime() {
				const now = new Date();
				const year = now.getFullYear();
				const month = String(now.getMonth() + 1).padStart(2, '0');
				const day = String(now.getDate()).padStart(2, '0');
				const hours = String(now.getHours()).padStart(2, '0');
				const minutes = String(now.getMinutes()).padStart(2, '0');

				const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
				datetimeFoundInput.value = formattedDateTime;
			}
		});

		function getLocationFromCoordinates(latitude, longitude) {
			// You can implement logic to fetch location details using latitude and longitude here
			console.log('Latitude:', latitude);
			console.log('Longitude:', longitude);
			locationInput.value = `Latitude: ${latitude}, Longitude: ${longitude}`;
		}
	});

	</script>

	<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchIcon = document.querySelector('.search-icon');
        const searchInput = document.querySelector('.search-input');

        searchIcon.addEventListener('click', function () {
            searchInput.classList.toggle('show');
            searchInput.focus();
        });

        // Close search input when clicking outside
        document.addEventListener('click', function (event) {
            if (!searchIcon.contains(event.target) && !searchInput.contains(event.target)) {
                searchInput.classList.remove('show');
            }
        });
    });
</script>


<?php
global $user;


use PHPMailer\phpmailer\PHPMailer;
use PHPMailer\phpmailer\SMTP;
use PHPMailer\phpmailer\Exception;

// Include PHPMailer classes
require 'phpmailer\PHPMailer.php';
require 'phpmailer\SMTP.php';
require 'phpmailer\Exception.php';

if (isset($_POST['submit'])) {
	// Process form data
	$petname = $_POST['petname'];
	$location = $_POST['location'];
	$datetimeFound = $_POST['datetimeFound'];
	$healthCondition1 = isset($_POST['healthCondition1']) ? $_POST['healthCondition1'] : '';
	$healthCondition2 = isset($_POST['healthCondition2']) ? $_POST['healthCondition2'] : '';
	$healthCondition3 = isset($_POST['healthCondition3']) ? $_POST['healthCondition3'] : '';
	$healthCondition4 = isset($_POST['healthCondition4']) ? $_POST['healthCondition4'] : '';
	$healthCondition5 = isset($_POST['healthCondition5']) ? $_POST['healthCondition5'] : '';
	$healthCondition6 = isset($_POST['healthCondition6']) ? $_POST['healthCondition6'] : '';
	$healthCondition7 = isset($_POST['healthCondition7']) ? $_POST['healthCondition7'] : '';
	$healthCondition8 = isset($_POST['healthCondition8']) ? $_POST['healthCondition8'] : '';
	$healthCondition9 = isset($_POST['healthCondition9']) ? $_POST['healthCondition9'] : '';
	$healthConditionOther = isset($_POST['healthConditionOther']) ? $_POST['healthConditionOther'] : '';
	$otherHealthInput = isset($_POST['otherHealthInput']) ? $_POST['otherHealthInput'] : '';
	$inputDescription = $_POST['inputDescription'];
	$collarTags = $_POST['collarTags'];
	$inputContactInfo = $_POST['inputContactInfo'];
	$email = $_POST['email'];
	$additionalComments = $_POST['additionalComments'];



	// Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		// SMTP settings
		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'skarande248@gmail.com'; // Replace with your email address
		$mail->Password   = 'uxwvmjcfyhlvxynl'; // Replace with your email password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port       = 465;

		// Set sender and recipient
		$mail->setFrom($_POST['email'], 'SAC Form');
		$mail->addAddress('skarande248@gmail.com', 'Recipient Name');

		// Email content
		$mail->isHTML(true);
		$subject = 'Found Pet: ' . $petname . ' at ' . $location . ' - ' . $datetimeFound;
		$body = '<h2>Found Pet Information</h2>';
		$body .= '<p><strong>Pet Name:</strong> ' . $petname . '</p>';
		$body .= '<p><strong>Location Found:</strong> ' . $location . '</p>';
		$body .= '<p><strong>Date/Time Found:</strong> ' . $datetimeFound . '</p>';
		$body .= '<p><strong>Health Conditions:</strong></p>';
		$body .= '<ul>';
		$body .= '<li>Good health: ' . ($healthCondition1 ? 'Yes' : 'No') . '</li>';
		$body .= '<li>Minor injuries: ' . ($healthCondition2 ? 'Yes' : 'No') . '</li>';
		// Include other health conditions here
		$body .= '</ul>';
		$body .= '<p><strong>Description:</strong> ' . $inputDescription . '</p>';
		$body .= '<p><strong>Collar/Tags:</strong> ' . $collarTags . '</p>';
		$body .= '<p><strong>Contact Information:</strong> ' . $inputContactInfo . '</p>';
		$body .= '<p><strong>Email:</strong> ' . $email . '</p>';
		$body .= '<p><strong>Additional Comments:</strong> ' . $additionalComments . '</p>';

		// Attach file if uploaded
		if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == UPLOAD_ERR_OK) {
			$mail->addAttachment($_FILES['myfile']['tmp_name'], $_FILES['myfile']['name']);
		}

		// Set email subject and body
		$mail->Subject = $subject;
		$mail->Body = $body;

		// Send email
		$mail->send();
		echo '<div style="background-color: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6; border-radius: 5px; padding: 10px;">';
		echo '<strong>Success!</strong> Your message has been successfully sent.';
		echo '</div>';
	} catch (Exception $e) {
		// Error message with styling
		echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; padding: 10px;">';
		echo 'Oops! Something went wrong and your message could not be sent. Please try again later.<br>';
		echo 'Error Message: ' . $mail->ErrorInfo;
		echo '</div>';
	}
} else {
	// Handle case when form is not submitted
	// For example, display a message or redirect to another page
}
?>