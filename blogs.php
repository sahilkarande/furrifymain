<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <link rel="stylesheet" href="../furrify1/blogssection/assets/css/style.css">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="../furrify1/assets/Furrify-Web/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../furrify1/assets/Furrify-Web/css/style.css" rel="stylesheet">
<link href="../furrify1/assets/css/SSO.css" rel="stylesheet">



</head>

<body>

<style>
  .navbar-light .navbar-nav .nav-link {
    font-family: 'Nunito', sans-serif;
    position: relative;

    padding: 35px 0;
    color: #FFFFFF !important;
    font-size: 18px;
    font-weight: 600;
    outline: none;
    transition: .5s;
}
</style>


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
        <div id="volunteerSection" class="section" style="display: none;">
            <h2>Volunteer Section</h2>
        </div>
        <div id="donateSection" class="section" style="display: none;">
            <h2>Donate Section</h2>
        </div>
        <div id="blogsSection" class="section" style="display: none;">
            <a href="blogs.php">Blogs Section</a>
        </div>
        <div id="adoptionSection" class="section" style="display: none;">
            <h2>Adoption Section</h2>
        </div>
        <div id="contactSection" class="section" style="display: none;">
            <h2>Contact Section</h2>
        </div>
        </div>
    </div>

    <style>
      .btn.btn-primary, .btn.btn-secondary {
    color: #FFFFFF;
    font-size: 15px;
}

        .section h2 {
            font-size: 28px; /* Increase the font size as needed */
            text-align: center; /* Center align the heading */
        }

        .blog-post {
            margin-bottom: 30px; /* Space between each blog post */
        }

        .blog-post h3 {
            font-size: 24px; /* Font size for blog post titles */
        }

        .blog-post p {
            line-height: 1.6; /* Line height for blog post content */
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
h2, .h2 {
        font-size: 2rem;
        font-size: 28px;
        text-align: center;
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
.small-hr {
  width: 80%; /* Set the width to 80% of the container width */
  height: 5px; /* Set the height of the horizontal line */
  background-color: #119EC2; /* Set the background color */
  margin: 0 auto; /* Center-align the horizontal line */
  border: none; /* Remove default border */
  border-bottom: 3px solid #119EC2;
}


    </style>

    <br><br>
<h2>Blogs Section</h2>
<hr class="small-hr">
<br><br>
<br><br>
  <section class="section featured" aria-label="featured post">
    <div class="container">


      <ul class="has-scrollbar">

        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/1.png" width="500" height="600" loading="lazy"
                alt="New technology is not good or evil in and of itself" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img
                      src="data:image/jpeg;base64,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"
                      width="100" height="100" loading="lazy" alt="Author" class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="https://storage.googleapis.com/impact-news-photo/news-photo/8475.CMOv20i39.jpg"
                      width="100" height="100" loading="lazy" alt="Author" class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Poster</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Act</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Dogs</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Paws for Acts of Canine Kindness
                </a>
              </h3>

              <p class="card-text">
                This poster promotes acts of kindness through canine interaction, highlighting the positive impact dogs
                can have on our well-being and community spirit. Join us in spreading joy and compassion one paw at a
                time!
              </p>

            </div>

          </div>
        </li>








        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/18.webp" width="500" height="600" loading="lazy"
                alt="It’s a new era in design, there are no rules" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Person</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Snap</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  What Are Some of the Most Common Indian Dog Breeds?
                </a>
              </h3>

              <p class="card-text">
                What Are Some of the Most Common Indian Dog Breeds?
                India is the second most populated country in the world with over 1.4 billion people. It should be no
                surprise, then, that it is also home to millions of pets, including dogs. In fact, about 6 out of every
                10 Indians own a pet, with dogs being the most popular with 68% of pet owners reporting owning a canine.
                With dogs being such a significant part of pet ownership in India, let’s take a look at some of the most
                common Indian dog breeds.

                Common Dog Breeds in India
                India has a rich history of dogs, and many breeds have originated from different parts of the country.
                Indian dogs are known for their resilience, loyalty, and agility. Here are some of the most common
                Indian dog breeds:

                Indian Pariah Dog – Also known as the Indian Native Dog, the South Asian pye dog, and Desi Kutta, it is
                one of the oldest breeds in India. It is a medium-sized dog that is very agile and is commonly found in
                rural areas. They are excellent watchdogs and are known for their loyalty and affection toward their
                family.


                Rajapalayam – Originating from Tamil Nadu, the Rajapalayam—also known as the Polygar Hound or Indian
                Ghost Hound—is a tall and lean dog, with a white coat and pink nose. They were originally bred for
                hunting wild boar and guarding the palace of Rajapalayam.


                Kombai – Also known as the Indian Bore Hound, the Kombai is a muscular and powerful dog that is commonly
                used for hunting. They have a short coat and come in various shades of red.


                Mudhol Hound – Originating from Karnataka, the Mudhol Hound—also known as the Maratha Hound, the Pashmi
                Hound, the Kathewar Dog, and the Caravan Hound—is a tall and lean dog, with a short coat that comes in
                various shades of fawn, black, and brown. They are used for hunting and make great companions.


                Gaddi Kutta – Also known as the Himalayan Sheepdog, Bhote, Bangara, and the Himalayan Mastiff, the Gaddi
                Kutta is a large and powerful dog that is commonly used for guarding livestock. They have a thick coat
                that protects them from the cold weather in the Himalayas.


                Bully Kutta – Also known as the Indian (or Pakistani) Mastiff, the Bully Kutta is a large and powerful
                dog that is commonly used for guarding and hunting. They have a short coat and come in various shades of
                white, black, and brindle.


                Gull Terrier – Also known as the Gull Terr, the Gull Terrier is a rare breed of dog that originated in
                the Punjab region of India and Pakistan. It is a medium-sized dog that is muscular and agile, with a
                short coat that can be white, black, brindle, or a combination of these colors. The breed is known for
                its loyalty, courage, and intelligence.


                Indian Spitz – The Indian Spitz is a breed of dog that originated in India. It is a small- to
                medium-sized dog that is agile and energetic, with a thick white coat that requires regular grooming.
                The breed is known for its loyalty, intelligence, and playfulness, and makes a great family pet. Indian
                Spitzes are easy to train and are excellent watchdogs


                Indian dog breeds are unique and have a special place in the hearts of dog lovers. These dogs are not
                only loyal and affectionate but also make great companions and protectors. However, there are around 80
                million homeless cats and dogs in India who need assistance, care, and a place to call home.
              </p>

            </div>

          </div>
        </li>









        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/6.png" width="500" height="600" loading="lazy"
                alt="It’s a new era in design, there are no rules" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Person</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Snap</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Man's Best Friend
                </a>
              </h3>

              <p class="card-text">
                This pic shows the awesome bond between people and their pups, highlighting the happiness and friendship
                that comes from holding our furry buddies.
              </p>

            </div>

          </div>
        </li>



        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/19.png" width="500" height="600" loading="lazy"
                alt="It’s a new era in design, there are no rules" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Person</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Snap</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The Environmental Impact of Stray Animals
                </a>
              </h3>

              <p class="card-text">
                Stray animals can impact the environment in various ways, and this issue is often overlooked in
                environmental discussions. Understanding how stray animals affect the environment is crucial for
                implementing effective measures to mitigate their impacts. In this article, we’ll look at some of the
                most common ways that stray animals impact the environment and explore ideas for limiting these effects.

                Stray Animals and Environmental Concerns
                1. Overpopulation and Resource Strain
                One of the primary ways in which stray animals affect environmental dynamics is through overpopulation.
                Stray animals — particularly stray dogs — consume natural resources such as food and water, leading to a
                strain on local ecosystems. This overpopulation can also lead to increased competition with wildlife for
                resources.

                2. Impact on Wildlife and Biodiversity
                The impact of stray dogs on the environment is evident in their interactions with wildlife. Predation by
                stray dogs on native species can lead to a decline in biodiversity, disrupting ecological balance.
                Similarly, other stray animals may compete with wild animals for habitat and food, further stressing
                local ecosystems.

                3. Public Health and Sanitation Issues
                The impact of stray animals extends to public health and sanitation. Stray animals can contribute to the
                spread of diseases and parasites, which can affect both wildlife and human populations. Additionally,
                they often contribute to littering and unsanitary conditions in urban areas.

                Mitigating the Environmental Impact
                1. Adopting Stray Animals: A Sustainable Solution
                One effective way to reduce stray animals’ impact on the environment is through adoption. Adopting stray
                animals helps control their population, thereby reducing the strain on natural resources and the risk of
                disease spread. Learn more about the benefits of adoption in “5 Reasons Why You Should Consider Adopting
                a Stray Animal as a Pet.”

                2. Spaying and Neutering: Controlling Overpopulation
                Spaying and neutering play a critical role in controlling the overpopulation of stray animals. By
                reducing the number of new animals born on the streets, these practices help alleviate the environmental
                pressures caused by strays. Read about the importance of these practices in “The Importance of Spaying
                and Neutering Pets.”

                3. Community Involvement: A Collective Effort
                Involving the community in efforts to manage stray animal populations is vital. Education on responsible
                pet ownership and the impact of strays on the environment can foster a more proactive approach. Discover
                ways to help with “3 Ways to Help Stray Animals.“

                Solving the issue of stray animals’ effects on the environment requires a multifaceted approach. By
                understanding the ways that stray animals can influence the environment and taking action through
                adoption, spaying/neutering, and community involvement, we can significantly mitigate their
                environmental impacts. To dispel common misconceptions, explore “Myths and Facts About Stray Animals.”
                By addressing the challenges posed by stray animals, we can foster a healthier environment for both
                humans and animals alike.
              </p>

            </div>

          </div>
        </li>



        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/17.webp" width="500" height="600" loading="lazy"
                alt="It’s a new era in design, there are no rules" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Person</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Snap</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Everything You Need to Know Before Adopting a Pet
                </a>
              </h3>

              <p class="card-text">
                Choosing to adopt a pet is a decision that will change your life and the life of your new companion.
                However, the joy of pet ownership can be maximized by understanding what pet adoption involves. To
                ensure that you’re prepared for this life-altering decision, this guide will detail everything you need
                to know before adopting a pet.



                1. Understand the Commitment
                When you adopt a pet, you’re taking on a commitment that could last for more than a decade. Pets require
                a significant investment of time, money, and care. You’ll need to be ready for walks, feeding, grooming,
                and playtime, not to mention unexpected trips to the vet. This commitment will shape your lifestyle in
                many ways.



                2. Pet Adoption Is a Lifelong Commitment
                Pet adoption is not a temporary solution. When you adopt, you’re pledging to care for your new pet for
                its entire life. Therefore, it’s crucial to consider your future plans and if a pet fits into them. Take
                into account any potential moves, changes in work schedules, or plans to start a family.



                3. Research the Right Pet for You
                Different pets come with different needs and responsibilities. Before adopting a pet, do your research
                on what types of pets would best fit your lifestyle and living situation. For example, the most common
                Indian dog breeds make great pets but can differ greatly in their needs and temperaments.



                4. Prepare for the Costs
                Pets are not cheap. From food and veterinary care to grooming and unexpected medical expenses, the costs
                can add up quickly. Budget for your pet’s needs in advance to ensure you can provide for them properly.



                Pet Adoption Checklist
                Before you proceed with adopting a pet, here’s a pet adoption checklist to guide you through the
                process:

                Evaluate your readiness to adopt
                Understand the financial costs
                Research potential pets
                Prepare your home
                Choose a reputable adoption center
                Ask questions about your potential pet’s health and history
                Consider the importance of spaying and neutering pets
                Ensure everyone in the household is prepared for the new arrival


                Remember, pet adoption is a long-term commitment. If you’re unsure, consider ways to help stray animals
                or explore other ways to help animals in India without adopting.

                When done responsibly, pet adoption can be one of the most rewarding decisions you’ll ever make.
                Understanding the commitment, choosing the right pet, and preparing your home and lifestyle for a pet
                can make the difference between a stressful situation and a fulfilling relationship. Always remember,
                when you decide to adopt, you are choosing to adopt, not shop, thereby contributing to a more humane
                world. Happy adopting!
              </p>

            </div>

          </div>
        </li>




        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/16.webp" width="500" height="600" loading="lazy"
                alt="It’s a new era in design, there are no rules" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Person</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Snap</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Why Volunteering Is Essential in Helping Stray Animals
                </a>
              </h3>

              <p class="card-text">
                Stray animals can often find themselves in dire situations. Without adequate care, they are left exposed
                to various risks. The power to change this lies with us, the public. This article aims to shed light on
                the importance of volunteer animal shelter work and how it can drastically improve the lives of stray
                animals.



                How Does an Animal Shelter Volunteer Help?
                The role of an animal shelter volunteer involves more than just spending time with cute animals. It is
                about making a tangible impact on the lives of those who cannot speak for themselves. Here are several
                ways that volunteers make a positive difference:

                Providing Basic Needs: Stray animals are often malnourished, dehydrated, and exposed to harsh weather
                conditions. Volunteers at shelters ensure they are fed, hydrated, and sheltered. Volunteers also ensure
                that shelters remain sanitary and safe for the animals living there.
                Medical Care: Stray animals frequently suffer from untreated injuries or illnesses. Volunteers help in
                coordinating with veterinarians to provide necessary medical care.
                Spaying and Neutering: Unchecked breeding among strays leads to overpopulation and consequent issues.
                Volunteers play a vital role in managing population control programs. Learn more about the importance of
                spaying and neutering pets.
                Raising Awareness and Providing Support: Many shelters rely on volunteers to help develop their
                websites, spread awareness, reach new donors, and perform other tasks that keep day-to-day operations
                running smoothly. Some of these opportunities are even available remotely, meaning volunteers can make
                an impact no matter where they are located.


                Why You Should Volunteer at an Animal Shelter
                Beyond the critical help that volunteering at animal shelters provides for animals, it also offers
                numerous benefits for the volunteers themselves.

                Gain Experience: If you’re considering a career in animal care or veterinary medicine, volunteering
                offers hands-on experience.
                Improve Mental Well-Being: Spending time with animals has been proven to reduce stress and improve
                mental health.
                Community Building: Volunteering promotes a sense of community and fosters relationships among
                like-minded people.


                The Impact of an Animal Volunteer
                Volunteer animal shelter work has a direct impact on both the individual animal’s life and the broader
                issue of stray animals. Volunteers help drive adoption programs, promoting the “Adopt, Don’t Shop”
                philosophy and increasing awareness about various species and breeds, like Indian dog breeds.



                How to Start Volunteering at Animal Shelters
                Ready to volunteer at an animal shelter? Here’s how you can get started:

                1. Find a Local Shelter: Locate shelters in your area that need volunteers. Use online resources or ask
                around in your community.
                2. Apply to Volunteer: Most shelters have a simple application process for volunteers. Fill out the
                necessary forms and submit them.
                3. Attend a Volunteer Orientation: Many shelters provide training or orientation sessions for new
                volunteers. Attend these to understand your roles and responsibilities better.
                4. Start Volunteering: Once you’re accepted, you can start contributing to the welfare of stray animals.


                Volunteering at animal shelters is an opportunity to change the narrative for stray animals. Each effort
                makes a difference, creating a safer, more compassionate world for our four-legged friends. Remember,
                every stray animal deserves a chance to live a good life, and as volunteers, we have the power to make
                that happen.
              </p>

            </div>

          </div>
        </li>





        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/14.webp" width="500" height="600" loading="lazy"
                alt="Perfection has to do with the end product" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Creative</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The Role of Social Media in Animal Adoption
                </a>
              </h3>

              <p class="card-text">
                In recent years, social media has emerged as a powerful tool in facilitating animal adoptions across the
                globe. How social media helps animal adoption is a multifaceted question, with numerous strategies
                coming into play. From creating awareness about animals in need to fostering a community of animal
                lovers, social media channels are at the forefront of modern-day animal adoption efforts.

                Bridging The Gap
                Social media platforms act as a bridge between animal shelters and potential adopters. They provide a
                space where shelters can showcase the animals that are up for adoption, and prospective adopters can
                easily browse through these animals from the comfort of their homes. Furthermore, animal shelter social
                media campaigns are instrumental in reaching a wider audience, thereby increasing the chances of
                adoption.

                Visibility: Social media significantly increases the visibility of animals in need, making it easier for
                potential adopters to find their perfect pet match.
                Engagement: Through likes, shares, and comments, users can engage with posts, making them more likely to
                appear on others’ feeds. This organic reach is invaluable for shelters operating on tight budgets.
                Community Building: Through social media, animal shelters can build and nurture a community of animal
                lovers who can spread the word, volunteer, and donate toward the cause.
                Marketing and Awareness
                Social media marketing for animal shelters isn’t just about showcasing animals up for adoption — it’s
                also about educating the public on responsible pet ownership. Informative posts on the importance of
                spaying and neutering pets, for instance, can help control the stray animal population.

                Educational Campaigns: Shelters can run educational campaigns to inform the public on various topics
                such as the benefits of adopting stray animals.
                Success Stories: Sharing adoption success stories can inspire others to adopt and provide a positive
                image for the shelter.
                Enhancing Adoption Process
                Social media also plays a part in making the adoption process smoother. Features like live videos allow
                shelters to host virtual meet-and-greets between animals and potential adopters.

                Virtual Tours: With the advent of live streaming, shelters can give virtual tours, showcasing their
                facilities and the animals they house. This transparency builds trust and encourages more people to
                adopt.
                Online Adoption Kits: Providing online adoption kits can help potential adopters understand the process
                and what to expect when adopting an animal.
                Crowdfunding and Support
                Moreover, social media platforms are an excellent place for shelters to run fundraising campaigns.
                Crowdfunding campaigns can help cover the costs associated with shelter operations, medical care for
                animals, and other essential needs.

                Fundraising Campaigns: Social media enables easy sharing of fundraising campaigns, which can lead to
                increased donations and support.
                Volunteer Recruitment: Platforms like Facebook and Instagram can be used to recruit volunteers, share
                ways to help stray animals, and mobilize the community to support the cause.
                The ways in which social media helps animal adoption are numerous and varied, contributing significantly
                to the welfare of animals in need. The online community — when leveraged correctly by animal shelters —
                can bring about a positive change in the landscape of animal adoption, ushering in hope and love for
                many animals.
              </p>

            </div>

          </div>
        </li>





        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/15.webp" width="500" height="600" loading="lazy"
                alt="Perfection has to do with the end product" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Creative</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The Role of Community in Stray Animal Welfare
                </a>
              </h3>

              <p class="card-text">
                In every corner of the globe, communities face the challenge of addressing stray animal populations.
                These animals often live in harsh conditions, facing starvation, disease, and abuse. Central to
                improving the lives of these animals is the concept of animal welfare. But what exactly does this term
                entail? The definition of animal welfare encompasses the various ways in which animals should be treated
                to ensure their well-being. It’s an ideology that emphasizes the importance of providing animals with a
                suitable living environment, proper healthcare, and positive interactions with humans.

                Understanding Animal Welfare: A Closer Look
                Animal welfare is a principle that advocates for animals to live lives free from unnecessary suffering
                while having their basic needs met. This concept is often compared to animal rights. While animal
                welfare focuses on ensuring animals’ well-being, many animal rights arguments go a step further, arguing
                for animals’ ability to live free from any human use or interference. It’s essential to define animal
                welfare properly to appreciate the role communities play in promoting it, especially in the context of
                stray animals.

                The Community’s Role in Fostering Animal Welfare
                Local communities are at the heart of any successful animal welfare initiative. Here are several ways in
                which communities play a crucial role:

                Education and Awareness:
                By promoting awareness about the importance of spaying and neutering pets, communities can help control
                stray animal populations.
                Educating individuals on how they can help stray animals is also essential.
                Legislation and Enforcement:
                Understanding and enforcing animal abuse laws is crucial in protecting stray animals from cruelty.
                Prompt action when witnessing animal abuse or animal cruelty is vital in safeguarding animals.
                Provision of Resources:
                Communities can establish shelters, feeding stations, and healthcare facilities for stray animals.
                Community members can also foster and adopt stray animals to reduce the strain on existing shelters.
                Mobilizing resources to address animal abuse issues is also crucial.
                Collaborative Efforts Yielding Positive Outcomes
                Collective community actions create a supportive environment for stray animals. Through education,
                legislation, and the provision of resources, communities can significantly improve the welfare of stray
                animals. Addressing the issues surrounding stray animals is not only a moral obligation, but also
                enriches the community, creating a more harmonious environment for all its members.

                The symbiotic relationship between communities and stray animal welfare is undeniable. By fostering a
                culture of compassion and action, communities can make a significant difference in the lives of stray
                animals, reflecting a broader commitment to ensuring the well-being and co-existence of all living
                beings.
              </p>

            </div>

          </div>
        </li>







        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/3.png" width="500" height="600" loading="lazy"
                alt="Perfection has to do with the end product" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Creative</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Perfection has to do with the end product
                </a>
              </h3>

              <p class="card-text">
                Aenean eget urna aliquet, viverra orci quis, aliquam erat. Ut rutrum quam quam, eu eleifend est
                blandit et. Vivamus
                suscipit ultrices venenatis. Aliquam massa ipsum, porta quis hendrerit at, varius sed leo. Curabitur
                convallis urna sit
                amet mi tempus posuere.
              </p>

            </div>

          </div>
        </li>





        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/12.jpg" width="500" height="600" loading="lazy"
                alt="Perfection has to do with the end product" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Creative</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  How Animals Differ from Other Types of “Property” Under the Law
                </a>
              </h3>

              <p class="card-text">
                Animals are living, feeling beings who need and deserve a legal status that reflects who they are:
                creatures with the capacity for pain and pleasure, joy and sorrow, fear and contentment.

                But that’s not, by and large, how the law treats them. Our legal system still considers animals to be
                “property” — in many ways — not much different from a table or a chair, able to be bought and sold, bred
                and killed for the profit of their “owners” and in many ways without any consideration of their wants,
                needs, and sentience.


                What if... ?
                What happens if a dog is beaten to death, but prosecutors elect not to bring charges? Can the dog file a
                suit on her own behalf? Is there anyone else who is able to pursue justice under the criminal law
                system?

                Sadly, the answer is no.

                Animals generally do not have meaningful legal rights under current law. They are deprived these
                protections largely because by and large, the law considers animals to be property—or “legal things” —
                instead of “legal persons.”
                However, there are some ways that the law does recognize animals as the living, feeling beings they are,
                with laws and regulations enacted for the sake of their physical and mental well-being. This is true in
                civil law and criminal law. These sorts of laws and regulations would not apply to “things,” only to
                “beings.”

                Here are some of those ways:

                Animal cruelty laws: Each of the 50 states now has a felony animal cruelty law on the books. Each state
                determines what constitutes cruelty, and the penalties for committing cruelty.

                Animals as “crime victims”: Courts at both the federal and state level have found that animals can count
                as crime victims during the sentencing stage of animal cruelty cases — holding defendants accountable
                for each animal they abused, rather than taking the ‘abuse one, get the rest free’ approach that would
                follow if animal cruelty were treated like a property crime.

                Basic care laws: Laws requiring that people responsible for animals provide a basic level of care — such
                as food, water, shelter, and veterinary aid — can be found at every level of the United States’ legal
                system. This remains true whether the animal is that person’s legal property or not, protecting with
                just as much force cats in the home as dogs at day care, or wildlife being cared for by a wildlife
                rehabilitator.

                While some of these laws are more broadly applicable than others, the notion that being responsible for
                an animal means taking on the legal obligation to meet the animal’s basic needs has become standard.
                Indeed, that these same laws typically contain carve-outs providing certain industries or practices with
                exemptions to the legal requirement just goes to prove that providing for the basic needs of animals has
                become the rule. Were that not the default, there would be no need for those statutory exceptions.

                These laws only make sense as a means of addressing the basic well-being of animals as sentient
                creatures, rather than as unfeeling objects. If these laws were about protecting property, they would
                not require people to adequately care for animals they own. If these laws were focused on protecting
                animals as a biological resource, they would not ask what care each animal as an individual receives
                (resource protections generally focus on total impacts, not individual ones).

                With basic care laws, the law recognizes animals as fundamentally different than objects or resources,
                or other types of “property” — their sentience sets them apart.

                Anti-tethering laws: Anti-tethering laws limiting how long animals can be tied up or chained outside,
                especially in extreme weather, are growing in popularity. Nearly half of all states have laws limiting
                or regulating the conditions and/or length of time an animal can be tethered. In California, for
                example, it is illegal to keep a dog chained or tied up for more than three hours in any 24-hour period.
                Under Pennsylvania’s anti-tethering law, a dog cannot be restrained outside for more than 30 minutes
                when the temperature is higher than 90 degrees or below 32 degrees Fahrenheit.

                Hot car laws: “Hot car laws” criminalize leaving an animal in a vehicle in extreme weather, and some hot
                car laws allow these animals to be rescued from vehicles in certain circumstances and make the rescuer
                immune from civil or criminal liability. These laws also apply to babies and children. They do not apply
                to other types of property like a pint of ice cream, or a vinyl record.

                Domestic violence protective orders: Nearly two thirds of states now allow animals to be included in
                domestic violence protective orders. The federal PAWS Act, enacted as part of the 2018 farm bill,
                provides federal support for animals affected by domestic violence.

                Evacuations in natural disasters: The PETS Act is a federal law that was passed in 2006 shortly after
                Hurricane Katrina. In order for states, cities, and counties to receive federal funding for their
                disaster relief plans, those plans must “account for the needs of individuals with household pets and
                service animals before, during, and following a major disaster or emergency.” Since then, more than 30
                states have amended their disaster relief plans to account for the needs of companion animals and
                service animals. There is no comparable law for cars, televisions, or other types of property.

                Retail pet sale bans: California and Maryland are the first states to require pet stores to sell only
                cats, dogs, and rabbits sourced from animal shelters and rescue groups. Both states passed the so-called
                “retail pet sale bans” in 2018, with California’s going into effect in 2019 and Maryland’s in 2020.
                Hundreds of cities and counties have similar restrictions on the sale of commercially bred companion
                animals. These restrictions are intended to reduce animal suffering and save animals’ lives, by
                decreasing the commercial demand for animals bred in puppy and kitten mills — large-scale breeding
                facilities which are major suppliers of animals sold in retail stores — and increasing demand for
                animals from animal shelters and rescue organizations.

                Of course while there are retail sale bans on all kinds of property — automatic weapons, illegal
                fireworks, and counterfeit products to name a few — in most cases this is to promote public safety, not
                because the “property” itself may be harmed or treated cruelly. This is unlike retail pet sale bans,
                which are intended to protect the animals themselves.

                Laws against the sexual assault of animals: All but four states have laws prohibiting the sexual assault
                of animals, as of 2019. No similar laws exist with regard to other types of property.

                Veterinary reporting of animal cruelty: As of 2018, 17 states require veterinarians to report suspected
                animal cruelty, and most of those states also grant civil immunity to veterinarians who report.
                Thirty-two states, either explicitly or implicitly, permit veterinarians to report suspected animal
                cruelty. Only one state — Kentucky — actually prohibits veterinarians from reporting suspected abuse.
                There is no analogous requirement for other types of property — say, mechanics are not required to
                report car owners who do not change their oil every 5,000 miles.

                Post-conviction possession bans: After a person is convicted of animal cruelty, the court may prohibit
                the defendant from owning or possessing any animal for a period of time. In many states, this
                prohibition is statutorily authorized, or even mandated. These laws are intended to protect the animals
                themselves; no other type of property is accorded this type of protection.

                Courtroom animal advocate programs (CAAP): In 2016, Connecticut enacted the country’s first Courtroom
                Animal Advocate Program (CAAP) law allowing legal advocates to address the court on behalf of animal
                victims in cruelty and neglect cases. Desmond’s Law, as this law is known, is named in honor of a dog,
                Desmond, who was starved and severely abused before being strangled to death and gives animals a voice
                in the courtroom. This law marks animals as different from other types of property, which do not have
                legal advocates when they are harmed or destroyed.
              </p>

            </div>

          </div>
        </li>




        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/13" width="500" height="600" loading="lazy"
                alt="Everyone has a different life story" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>



              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">People</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Story</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The Benefits of Fostering Stray Animals
                </a>
              </h3>

              <p class="card-text">
                Opening a door to a furry friend in need not only changes their life but can also bring joy, love, and
                life lessons to yours. Fostering stray dogs or other animals is a noble act that one can indulge in to
                make a difference. This article explores the multifaceted benefits of fostering a stray dog or other
                animal and underscores why it’s a path worth considering.

                Why Foster Animals: Unveiling the Importance
                Fostering animals comes with a sense of fulfillment as it is a step toward saving a life. When you
                foster, you are providing a safe and loving environment for animals that have been abandoned or are
                awaiting a forever home. The Stray Animal Foundation India advocates for such impactful actions toward
                stray animals. Here are the pivotal reasons why fostering animals is important:

                Alleviates Shelter Overcrowding: Shelters often run out of space. Fostering can provide the much-needed
                space to help more animals in need.
                Prepares Animals for Adoption: Fostering a stray dog or cat helps them acclimate to home life, making
                them more adoptable.
                Provides a Healing Environment: Animals recovering from surgery or ailments benefit from the comfort of
                a home rather than a crowded shelter.
                The Personal and Social Benefits of Animal Fostering
                The act of animal fostering is not only a lifesaver for the strays but also comes with numerous personal
                and societal benefits. Here are some notable perks:

                Emotional and Psychological Rewards: The companionship and unconditional love animals offer can
                significantly bolster one’s mood and mental health.
                Teaches Responsibility and Compassion: Especially for families with children, fostering can inculcate a
                sense of responsibility, empathy, and compassion.
                Community Impact: It fosters a sense of community and spreads awareness about the importance of stray
                rescue foster efforts.
                Can You Foster Strays: Taking the First Step
                The question often arises, “Can you foster strays?” The answer is a resounding yes, provided you have
                the resources and commitment to care for them temporarily. It’s essential to ensure you are ready for
                the responsibilities entailed in foster animal care.

                Fostering animals is a rewarding endeavor that not only enriches your life but significantly impacts the
                lives of helpless animals. It’s a humane step toward creating a better world for our four-legged
                companions. By taking this compassionate step, you’re not just providing a temporary home to a needy
                animal, but also paving the way for a positive societal change.


              </p>

            </div>

          </div>
        </li>





        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/4.png" width="500" height="600" loading="lazy"
                alt="Everyone has a different life story" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">People</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Story</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Everyone has a different life story
                </a>
              </h3>

              <p class="card-text">
                Non est igitur summum malum dolor. Tu autem inter haec tantam multitudinem hominum interiectam non
                vides nec laetantium
                nec dolentium. Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci
                potest.
              </p>

            </div>

          </div>
        </li>


        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/9.png" width="500" height="600" loading="lazy" alt="The difference is quality"
                class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img
                      src="data:image/jpeg;base64,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"
                      width="100" height="100" loading="lazy" alt="Author" class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Protecting Our Animal Friends
                </a>
              </h3>

              <p class="card-text">

                Holi, a festival of colors, should be celebrated with care, especially around animals.
                Applying colors or chemicals can harm them. Instead, let's spread joy with eco-friendly colors and
                ensure animals have a safe, quiet space to enjoy the festivities.
                Let's make Holi joyful for everyone, including our furry friends.
              </p>

            </div>

          </div>
        </li>



        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/11.jpg" width="500" height="600" loading="lazy" alt="The difference is quality"
                class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The Friend Who Keeps You Young
                </a>
              </h3>

              <p class="card-text">

                Adopting a pet may seem like a selfless act, but there are plenty of selfish reasons to embrace pet
                ownership. Research has shown that owning a pet provides an amazing array of health benefits, says
                Jeremy Barron, M.D., medical director of the Beacham Center for Geriatric Medicine at Johns Hopkins.

                Not ready for a full-time furry friend in your home? Offer to walk a neighbor’s dog, cat-sit for a
                friend, or donate time at a local animal shelter—even short interactions provide enough pet exposure to
                reap some of these rewards.

                <b>Reduce stress</b>
                Research has shown that simply petting a dog lowers the stress hormone cortisol , while the social
                interaction between people and their dogs actually increases levels of the feel-good hormone oxytocin
                (the same hormone that bonds mothers to babies).

                In fact, an astonishing 84 percent of post-traumatic stress disorder patients paired with a service dog
                reported a significant reduction in symptoms, and 40 percent were able to decrease their medications,
                reported a recent survey.

                <b>Lower blood pressure</b>
                The cortisol-lowering and oxytocin-boosting benefits of petting also help keep your blood pressure at
                bay. “Petting and holding an animal allows you to appreciate the beauty of nature,” explains Barron.
                “It’s relaxing and transcendental.”

                <b>Increase physical activity</b>
                How many people are willing to go outside at the crack of dawn and exercise in the rain or snow? Dog
                owners often have no choice—they have to walk their pet, thus providing them with an excuse-proof daily
                dose of exercise.

                <b>Boost heart health</b>
                The American Heart Association released a research report endorsing dog ownership as a way of warding
                off cardiovascular disease .

                <b>Ease loneliness and depression</b>
                A 2011 study found that pet owners had better self-esteem. Another study determined that pets provided
                greater social support than humans in mitigating depression. “Caring for a pet provides a sense of
                purpose to the owner,” says Barron. Plus, pets are a good social catalyst for meeting people who share
                your animal interests.

                <b>Help specific health concerns</b>
                Beyond simple companionship, dogs have long been wonderful helpers to those without sight or with
                mobility issues. Dogs are even being used to help detect conditions from seizures to cancer.
              </p>

            </div>

          </div>
        </li>



        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/10.png" width="500" height="600" loading="lazy" alt="The difference is quality"
                class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-10.png" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Diwali is a festival of fear for animals
                </a>
              </h3>

              <p class="card-text">

                It is a well-known fact that animals suffer tremendously during Diwali when people indulge in bursting
                crackers. They are averse to loud noises and extreme levels of polluted air. What humans think of as
                fun, despite the firecrackers’ long-term effects on the environment, leave animals traumatised.

                According to People For The Ethical Treatment Of Animals (PETA), firecrackers can even be fatal for
                animals.

                “Many dogs and cats flee in fear from the deafening blasts. Animals become confused and panic, and
                (animal) shelters see a spike in the number of admissions after fireworks,” says PETA.

                PETA’s research suggests that not only does loud noises cause emotional and psychological distress for
                animals, but can also permanently impacts their hearing-abilities.

                “Animals can suffer nervous breakdowns as well as undergo severe hearing disability due to
                firecrackers,” reads a report.

                In India, where firecrackers have historically formed an essential part of the grand festival of lights,
                conversations around the negative effects of these crackers have moved from the public discourse to
                lawmaking and certain bans have been placed since 2020 on the usage of noise-making crackers.

                However, last week, the Supreme Court dismissed a plea for a nationwide ban on crackers, stating that
                “investments have already been made”. This left environmental activists and animal rights activists
                unhappy.

                “Animals are abused during Diwali. Some people deliberately throw harmful crackers such as kali-photka
                or chocolate bomb at stray dogs and cats. We have even rescued stray dogs with crackers tied to their
                tails. Every year during Diwali, we treat burnt stray dogs who are found wailing in pain,” says Bijon
                Majumder of the Garia Niramoy Foundation, an animal-rescue and shelter non-profit organisation located
                in Garia, Kolkata.


                “The past two years have seen a dip in animal-cruelty during Diwali due to the ban, but it hasn’t
                stopped entirely. Animals will continue to suffer the most as long as firecrackers of any form exist.
                Our NGO is committed to fighting against them and we had also submitted a petition with Calcutta High
                Court to prevent sale of firecrackers in Garia market,” says Majumder whose NGO is located close to one
                of the biggest firecracker markets in Kolkata.

                While stray animals are worst-hit by firecrackers, even pets which live in homes get adversely affected.
                “What a lot of people don’t know is that firecrackers release harmful gases into the air that affect
                animals much more than humans, besides of course the loud noise which makes them anxious and run around
                the house shivering with distress. It is not a festival of celebration for them, it’s a festival of
                fear,” says Pamela Ghosh, a Kolkata-based owner of a five-year old Golden Retriever named Begum.

                Pune-based Rubina Shaik dreads Diwali every year and says that it’s the worst time for her cat, Oscar,
                who can’t hear for days after incessant cracker-bursting on Diwali. “Oscar is a one-year-old Persian cat
                and cannot stand Diwali. She is terrified of the deafening crackers and the smog that manages to find
                its way into our apartment. It traumatises her immensely and she can’t hear properly afterward. We have
                often taken her to the vet post Diwali and found out that her hearing-deficiency is due to trauma and
                fear,” says Shaik.

                As per vets, apart from dogs and cats, loud firecrackers also affect cattle, including the cow. Akin to
                humans, in large cattle animals, fear stunts the flow of oxytocin which therefore limits the flow of
                milk. “Loud noises and blinding lights coupled with a sudden rise in pollution affects cattle, birds,
                cats, dogs, and various other animals. It agitates their nervous system which affects their overall
                functioning. This can only be prevented if humans stop celebrating with firecrackers – no firecracker is
                good for animals. Firecrackers are designed to affect those with sensitive hearing and cognitive
                abilities, which is why some of us humans, particularly children and adults who suffer from sensory
                overload, are greatly affected by firecrackers than others,” says a Kolkata-based senior veterinarian at
                Sai Multispeciality Vet Clinic.

                “In our bid to go the extra mile for that little enjoyment, while bursting firecrackers, we tend to
                forget what damage it can cause to the natural environment. We already know that dogs are very sensitive
                to sound. Besides, scientific studies have also shown how the sudden and loud fireworks tend to
                disorient various bird species. Many birds help in pollination, without which there would be no trees,
                and eventually no oxygen to breathe. It’s an interconnected cycle,” says Neellohit Banerjee, a
                Kolkata-based nature and wildlife conservationist.
              </p>

            </div>

          </div>
        </li>



        <li class="scrollbar-item">
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="../furrify1/blogssection/assets/images/2.png" width="500" height="600" loading="lazy"
                alt="Problems are not stop signs, they are guidelines" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Creating</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Problems are not stop signs, they are guidelines
                </a>
              </h3>

              <p class="card-text">
                Quid ad utilitatem tantae pecuniae. Duo enim genera quae erant, fecit tria. Et quod est munus, quod
                opus sapientiae.
              </p>

            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>





  <!-- 
        - #RECENT POST
      -->

  <section class="section recent" aria-label="recent post">
    <div class="container">

      <div class="title-wrapper">



        <div class="top-author">
          <ul class="avatar-list">

            <li class="avatar-item">
              <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                <img src="../furrify1/blogssection/assets/images/author-1.jpg" width="100" height="100" alt="top author" class="img-cover">
              </a>
            </li>

            <li class="avatar-item">
              <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                <img src="../furrify1/blogssection/assets/images/author-2.jpg" width="100" height="100" alt="top author" class="img-cover">
              </a>
            </li>

            <li class="avatar-item">
              <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" alt="top author" class="img-cover">
              </a>
            </li>

            <li class="avatar-item">
              <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                <img src="../furrify1/blogssection/assets/images/auth2.png" width="100" height="100" alt="top author" class="img-cover">
              </a>
            </li>

            <li class="avatar-item">
              <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                <img src="../furrify1/blogssection/assets/images/auth1.png" width="100" height="100" alt="top author" class="img-cover">
              </a>
            </li>

          </ul>

          <span class="span">Meet our top authors</span>
        </div>

      </div>

      <ul class="grid-list">

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/7.png" width="550" height="660" loading="lazy"
                alt="Creating is a privilege but it’s also a gift" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

                <li>
                  <a href="#" class="card-tag">People</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Review</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Creating is a privilege but it’s also a gift
                </a>
              </h3>

              <p class="card-text">
                Nullam vel lectus vel velit pellentesque dignissim nec id magna. Cras molestie ornare quam at
                semper. Proin a ipsum ex.
                Curabitur eu venenatis justo. Nullam felis augue, imperdiet at sodales a, sollicitudin nec risus.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/8.png" width="550" height="660" loading="lazy"
                alt="Being unique is better than being perfect" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Rescue</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Dog</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Hope in Every Step: Fighting Against Cancer with Determination
                </a>
              </h3>

              <p class="card-text">
                Explore the inspiring battle against cancer. From courageously facing treatments to embracing support,
                every step taken brings hope and strength. Join us in the fight for brighter tomorrows!
              </p>


            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/recent-3.jpg" width="550" height="660" loading="lazy"
                alt="Now we’re getting somewhere" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Idea</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Product</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Review</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Now we’re getting somewhere
                </a>
              </h3>

              <p class="card-text">
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec
                volutpat rhoncus quam,
                a feugiat elit gravida eget. Curabitur id pharetra ligula. Integer porttitor suscipit ante ac
                faucibus. Sed a enim non
                enim viverra pulvinar vel diam ut lorem congue feugiat.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/recent-4.jpg" width="550" height="660" loading="lazy"
                alt="The trick to getting more done is to have the freedom to roam around" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Design</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  The trick to getting more done is to have the freedom to roam around
                </a>
              </h3>

              <p class="card-text">
                Integer nec mi cursus, blandit est et, auctor mauris. Aenean ex metus, faucibus in mattis at,
                tincidunt eu dolor. Cras
                hendrerit massa nec augue placerat rutrum. Sed facilisis massa enim, ac tempus diam elementum sit
                amet.
              </p>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/recent-5.jpg" width="550" height="660" loading="lazy"
                alt="Every day, in every city and town across the country" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">People</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Story</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Lifestyle</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Every day, in every city and town across the country
                </a>
              </h3>

              <p class="card-text">
                Morbi a facilisis lectus. Ut eu dapibus risus, a interdum justo. Vestibulum volutpat velit ac
                tellus mollis, sit amet
                sodales metus elementum. Aliquam eu mi massa. Proin suscipit enim a pulvinar viverra.
              </p>

            </div>

          </div>
        </li>


        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 550; --height: 660;">
              <img src="../furrify1/blogssection/assets/images/recent-6.jpg" width="550" height="660" loading="lazy"
                alt="Your voice, your mind, your story, your vision" class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <ul class="card-meta-list">

                <li>
                  <a href="#" class="card-tag">People</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Review</a>
                </li>

                <li>
                  <a href="#" class="card-tag">Story</a>
                </li>

              </ul>

              <h3 class="h4">
                <a href="#" class="card-title hover:underline">
                  Your voice, your mind, your story, your vision
                </a>
              </h3>

              <p class="card-text">
                Nullam auctor nisi non tortor porta, id dapibus lectus rhoncus. Vivamus lobortis posuere enim
                finibus sodales. Phasellus
                quis tellus scelerisque, sagittis tortor et, maximus metus.
              </p>

            </div>

          </div>
        </li>

      </ul>



    </div>
  </section>





  <!-- 
        - #RECOMMENDED POST
      -->

  <section class="section recommended" aria-label="recommended post">
    <div class="container">

      <p class="section-subtitle">
        <strong class="strong">Recommended</strong>
      </p>

      <ul class="grid-list">

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-1.jpg" width="300" height="360" loading="lazy"
                alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-5.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-2.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  The trick to getting more done is to have the freedom to roam around
                </a>
              </h3>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-2.jpg" width="300" height="360" loading="lazy"
                alt="Every day, in every city and town across the country " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  Every day, in every city and town across the country
                </a>
              </h3>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-3.jpg" width="300" height="360" loading="lazy"
                alt="I work best when my space is filled with inspiration " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-1.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  I work best when my space is filled with inspiration
                </a>
              </h3>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-4.jpg" width="300" height="360" loading="lazy"
                alt="I have my own definition of minimalism " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-4.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  I have my own definition of minimalism
                </a>
              </h3>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-5.jpg" width="300" height="360" loading="lazy"
                alt="Change your look and your attitude " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-6.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  Change your look and your attitude
                </a>
              </h3>

            </div>

          </div>
        </li>

        <li>
          <div class="blog-card">

            <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
              <img src="../furrify1/blogssection/assets/images/recommended-6.jpg" width="300" height="360" loading="lazy"
                alt="The difference is quality " class="img-cover">

              <ul class="avatar-list absolute">

                <li class="avatar-item">
                  <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                    <img src="../furrify1/blogssection/assets/images/author-3.jpg" width="100" height="100" loading="lazy" alt="Author"
                      class="img-cover">
                  </a>
                </li>

              </ul>
            </figure>

            <div class="card-content">

              <h3 class="h5">
                <a href="#" class="card-title hover:underline">
                  The difference is quality
                </a>
              </h3>

            </div>

          </div>
        </li>

      </ul>

    </div>
  </section>
  </article>
  </main>





  <!-- 
    - #FOOTER
  -->







  <!-- 
    - custom js link
  -->
  <script src="../furrify1/blogssection/assets/js/script.js" defer></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function () {
        $("#volunteerBtn, #donateBtn, #adoptionBtn, #contactBtn").click(function () {
            
            history.back(); // Go back to the previous page
        });

        $("#blogsBtn").click(function () {
            window.location.href = "blogs.php"; // Navigate to blogs.php for "Blogs" button
        });
    });
</script>

</body>

</html>