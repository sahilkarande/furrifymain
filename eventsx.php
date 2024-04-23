<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <title>Furrify Events</title>
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
                <a href="eventsx.php" class="nav-item nav-link active text-black">Events</a>
                <a href="Veterinarymain.php" class="nav-item nav-link text-black">Veterinary</a>
                <a href="strayanimalsconnect.php" class="nav-item nav-link text-black">SAC</a>
                <a href="Lost&Found.php" class="nav-item nav-link text-black">Lost & Found</a>
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
                    <h1 class="display-3 text-white animated slideInDown">Events</h1>
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
                              
                              <button class="bi bi-plus-circle" data-bs-target="#mymodel" data-bs-toggle="modal">
                               Add Event
                              </button>
                              <div class="modal" id="mymodel">
                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                  <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="card mb-4"> <br>
                                            <div class="card-header"><h1>Event Information</h1></div>
                                            <div class="card-body">
                                                <form id="contactform">
                                                    <!-- Form Group (username)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="petname"><h4>Event name: </h4></label>
                                                        <input class="form-control" type="text" name="petname" id="petname">
                                                    </div>

                                                    <div class="mb-3">
                                                    <label  class="form-label"><h4>Description: </h4></label>
                        <textarea class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" rows="5"></textarea></div>


                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (first name)-->
                                                        <div class="col-md-6">
                                                          <label class="small mb-1" for="location"><h5>Location: </h5></label>
                                                          <input class="form-control" type="text" name="location" id="location">
                                                      </div>
                                          
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="petage"><h5>Contact: </h5></label>
                                                            <input class="form-control" type="text" name="petage" id="petage">
                                                        </div>
                                          <br><br><br>
                                                        <div class="row gx-3 mb-3">
                                                          <!-- Form Group (first name)-->
                                                          <div class="col-md-12"><br><br>
                                                              <label class="small mb-1" for="petname"><h5>Upload photo of pet: </h5></label>
                                                              <input id="fileupload" name="myfile" type="file" />                          
                                                              </div>
                                          
                                          
                                                           
                                                        </div> 
                                                    </div>
                                                    
                                                </div> 
                                            </div> 
                                            <button type="submit" class="btn btn-danger">cancel</button>
                                            <button type="submit" class="btn btn-primary">submit</button>
                                        </div> 
                            
                              
                              
                            </div>
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
</div></div>

<!-- Navbar & Hero End -->

<style>
  #search-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }
  
      #search-box {
        margin-bottom: 20px;
      }
  
  .search-box{
    width: fit-content;
    height: fit-content;
    position:relative;
  
    margin: 0 auto;
  
  
  }
  .input-search{
    height: 50px;
    width: 50px;
    border-style: none;
    padding: 10px;
    font-size: 18px;
    letter-spacing: 2px;
    outline: none;
    border-radius: 25px;
    transition: all .5s ease-in-out;
    background-color: #119EC2;
    padding-right: 40px;
    color:black;
  }
  .input-search::placeholder{
    color:rgba(255,255,255,.5);
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
  }
  .btn-search{
    width: 50px;
    height: 50px;
    border-style: none;
    font-size: 20px;
    font-weight: bold;
    outline: none;
    cursor: pointer;
    border-radius: 50%;
    position: absolute;
    right: 0px;
    color:BLACK ;
    background-color:transparent;
    pointer-events: painted;  
  }
  .btn-search:focus ~ .input-search{
    width: 300px;
    border-radius: 50px;
    background-color: #119EC2;
    border-bottom:1px solid rgba(255,255,255,.5);
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
  .input-search:focus{
    width: 300px;
    border-radius: 50px;
    background-color: #119EC2;
    border-bottom:1px solid rgba(255,255,255,.5);
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
        .person {
          border: 1px solid #ccc;
          padding: 10px;
          margin-bottom: 10px;
          display: flex;
          align-items: center;
        }
        .person .name {
          flex: 1;
        }
        .person .icons {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 60px;
        }
        .person .icons i {
          font-size: 20px;
          margin: 0 5px;
          cursor: pointer;
        }
        #people-list {
    width: 50%;
    margin: 0 auto;
  }
  .plus-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 50%;
    font-size: 24px;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
  }
  
  .plus-btn:hover {
    background-color: #0062cc;
    transform: scale(1.1);
  }
  
  .bigCheck label {
    background-color: white;
    border-radius: 50%;
    box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.15);
    cursor: pointer;
    display: block;
    height: 3.5em;
    position: relative;
    width: 3.5em;
    -webkit-transition: -webkit-transform 200ms;
    transition: transform 200ms;
  }
  .bigCheck label:before, .bigCheck label:after {
    background-color: #cc0000;
    content: "";
    display: block;
    left: 50%;
    position: absolute;
    top: 50%;
    -webkit-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
  }
  .bigCheck label:before {
    height: 4px;
    width: 18px;
    -webkit-transition: width 200ms;
    transition: width 200ms;
  }
  .bigCheck label:after {
    height: 20px;
    width: 4px;
  }
  .bigCheck input {
    display: none;
  }
  .bigCheck input:checked + label {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  .bigCheck input:checked + label:before {
    margin: 8px 0px 0px 4px;
    width: 10px;
  }
  .bigCheck input:checked + label:after {
    margin: 0px 0px 0px 8px;
  }
  
      </style>


<div id="search-container">
  <div class="search-box center">
    <button class="btn-search"><i class="fas fa-search"></i></button>
    <input type="text" id="search" name="search" class="input-search" placeholder="Search Event">
    <div id="filtered-names"></div> <br><br>
    
    </div>      </div>
</div>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container e-l">
    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="https://media.insider.in/image/upload/c_crop,g_custom/v1668767443/bm2e3qfgptentyqmmx4b.jpg" height="100%" width="100%" alt="">
                <div class="events-date">
                    <div class="font-size28">10</div>
                    <div class="font-size14">May</div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event.html" class="text-theme-color">Business Conference</a></h5>

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 ev" id="ev1"><a href="event-details.html" class="text-theme-color">FURRDAY</a></h5>

                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 01:30 PM - 04:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Anchor : John Sminth</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event.html" class="text-theme-color">Craft Workshops</a></h5>

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 ev" id="ev2"><a href="event-details.html" class="text-theme-color">PUP FEST</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:00 AM - 09:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : Alexa Zone</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative">
                <img src="https://media.insider.in/image/upload/c_crop,g_custom/v1661343248/h4fkwyhh50tubufmfvj4.jpg" height="100%" width="100%" alt="">
                <div class="events-date">
                    <div class="font-size28">25</div>
                    <div class="font-size14">Feb</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="https://cdn2.allevents.in/thumbs/thumb644ce4e6f3460.jpg" height="100%" width="100%" alt="">
                <div class="events-date">
                    <div class="font-size28">20</div>
                    <div class="font-size14">Feb</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event.html" class="text-theme-color">Mentorship Program</a></h5>

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 ev" id="ev3"><a href="event-details.html" class="text-theme-color">PAWSOME SUNDAY!</a></h5>

                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:20 AM - 12:00 AM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : Avil Mex</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event.html" class="text-theme-color">Technical Events</a></h5>

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 ev" id="ev4"><a href="event-details.html" class="text-theme-color">PETEXPO</a></h5>

                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 10:00 AM - 09:00 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : Venil Monts</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7hspIwxfgewkpMgkCLXiZZBYhJRkfPsUXPQ&usqp=CAU" height="100%" width="100%" alt="">
                <div class="events-date">
                    <div class="font-size28">25</div>
                    <div class="font-size14">Sep</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end event block -->

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="https://www.dineout.co.in/blog/wp-content/uploads/2022/03/Blog-Banner-1.jpg" height="100%" width="100%" alt="">
                <div class="events-date">
                    <div class="font-size28">10</div>
                    <div class="font-size14">Oct</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event.html" class="text-theme-color">Startup Events</a></h5>

                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500 ev" id="ev5"><a href="event-details.html" class="text-theme-color">PETTINOUT</a></h5>

                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 11:00 AM - 09:00 PM</li>
                    <li><i class="fas fa-map-marker-alt margin-5px-right"></i> Speaker : Mavil Aven</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>
    <!-- end event block -->

</div>



<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
    <script>
const search = document.getElementById('search');
const filteredNames = document.getElementById('filtered-names');
const peopleList = document.getElementById('e-l');
let personCount = 1;

// Add event listener to the search box
search.addEventListener('input', function() {
  const query = this.value.toLowerCase();

  // Loop through each person and check if their name matches the search query
  let filtered = [];
  for (let i = 0; i < peopleList.children.length; i++) {
    const name = peopleList.children[i].getElementsByClassName('name')[0].textContent.toLowerCase();
    if (name.includes(query)) {
      peopleList.children[i].style.display = '';
      filtered.push(name);
    } else {
      peopleList.children[i].style.display = 'none';
    }
  }

  // Display the filtered names, if any
  if (filtered.length > 0) {
    filteredNames.textContent = `Filtered names: ${filtered.join(', ')}`;
  } else {
    filteredNames.textContent = '';
  }
});

// // Add event listener to the plus button
//     const newPerson = document.createElement('div');
//     newPerson.classList.add('ev');
//     newPerson.setAttribute('id', 'ev' + (++evCount));
//     newPerson.innerHTML = `
//       <a href="event-details.html" class="text-theme-color">${name}</a></h5>
//                 <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
//                     <li><i class="far fa-clock margin-10px-right"></i> 01:30 PM - 04:30 PM</li>
//                     <li><i class="fas fa-user margin-5px-right"></i> Anchor : John Sminth</li>
//                 </ul>
//                 <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
//                 <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
//             </div>
//         </div>
//     </div>
//     `;
//     peopleList.appendChild(newPerson);
//   }
// });


// Add event listener to the add person button
addPersonButton.addEventListener('click', function() {
  const personCount = peopleList.children.length + 1;
  const newPerson = document.createElement('div');
  newPerson.classList.add('ev');
  newPerson.id = `ev${personCount}`;
  newPerson.innerHTML = `
    <a href="event-details.html" class="text-theme-color">New Person ${personCount}</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 01:30 PM - 04:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Anchor : John Sminth</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>
  `;
  peopleList.appendChild(newPerson);
});

    </script>



   
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

