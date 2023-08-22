<?php
// Database connection
include "connectconfig.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Handle review submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $review = $_POST["review"];
  $rating = $_POST["rating"];

  // Use prepared statement to insert data
  $sql = "INSERT INTO Customerreviews (customer_name, review_text, rating, timestamp) VALUES (?, ?, ?, NOW())";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssd", $name, $review, $rating);

  if ($stmt->execute()) {
      // Review inserted successfully
      header("Location: index.php");
      exit();
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

// Fetch reviews
$sql = "SELECT * FROM Customerreviews ORDER BY timestamp DESC";
$result = $conn->query($sql);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learning bootstrap v5 with sass</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    body {
        margin: 0;


        background-image: url(images/suites.jpg) !important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);

        background-blend-mode: soft-light;
        background-color: #ffffffd5;


    }
    </style>
</head>

<body>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
    <nav class="navbar navbar-expand-lg  navbar-dark menu shadow fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="images/services/mr white.svg " alt="logo image" height="100px" width="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book.html">Book Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Contact</a>
                    </li>
                </ul>
                <a href="login.html">
                    <button type="button" class="rounded-pill btn-rounded mt-0">
                        Login | Register
                    </button>
                </a>
            </div>
        </div>
    </nav>





    <section class="hero">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="row-md-6 intros align-items-center">
                    <h1 class="display-2">
                        <span class="display-2--intro">Welcome To</span>
                        <span class="display-2--intro1">Mr. White Laundry</span>
                        <span class="display-2--intro">& <br />Cleaning Services</span>
                    </h1>
                    <button type="button" class="rounded-pill btn-rounded">
                        Get Started For Free
                    </button>
                </div>
            </div>
        </div>
        <div class="container2">
            <div class="hero-img">
                <div>
                    <img class="image-container1" src="images/hero/suites.png" alt="..." />
                </div>
                <div>
                    <img class="image-container2" src="images/hero/macs.png" alt="..." />
                </div>
                <div>
                    <img class="image-container3" src="images/hero/clean.png" alt="..." />
                </div>
            </div>
        </div>

        <div class="tired">
            <div class="col-md-0 first-intro text-center">
                <div class="row-md-6s  words align-items-center">
                    <h3>

                        <span class="word text-center">
                            Tired of doing the laundry your self ? Got no time to take care of
                            you own laundry ? checkout our services.
                        </span>

                    </h3>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container col">

            <section id="services" class="services" data-aos="fade-up">


                <div class="container">
                    <div class="col text-center">
                        <h1 class="display-3 fw-bold mt-5">Our Services</h1>
                        <div class="heading-line mb-1"></div>
                    </div>
                </div>
                <div class="container bg-white shadow">
                    <div class="row pt-2 pb-2 serv mt-0 mb-3  text-end">
                        <div class="col-md-6 ">
                            <div class="bg-white   p-3">
                                <h2 class="fw-bold text-capitalize text-end">
                                    At Mr. White your happiness is our success.
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-6 border-left">
                            <div class="bg-white p-4 text-start">
                                <p class="fw-medium">
                                    We offer a comprehensive range of services tailored to meet your
                                    specific cleaning needs. Our services include:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="myDIV" data-aos="fade-up">


                        <div class="div2">
                            <img src="images/hero/clean.png" alt="landry services" />
                        </div>

                        <div class="fortex" data-aos="fade-left">
                            <div class="div3">
                                <h1>Laundry Services</h1>
                            </div>
                            <div class="div4">

                                <ul>
                                    <li>Wash-and-Fold Laundry Service</li>
                                    <li>Dry Cleaning Service</li>
                                    <li>Bedding Laundry Service</li>
                                    <li>Ironing and Pressing Service</li>
                                    <li>Specialty Cleaning Services</li>
                                    <li>Stain Removal and Spot Treatment</li>
                                    <li>Commercial Laundry Service</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="myDIV1" data-aos="fade-up">


                        <div class="div2">
                            <img src="images/hero/clean.png" alt="landry services" />
                        </div>

                        <div class="fortex" data-aos="fade-left">
                            <div class="div3">
                                <h1>General house cleaning </h1>
                            </div>
                            <div class="div4">

                                <ul>
                                    <li>Kitchen Cleaning</li>
                                    <li>Bathroom Cleaning</li>
                                    <li>Bedroom Cleaning</li>
                                    <li>Living Room Cleaning</li>
                                    <li>Dining Room Cleaning</li>
                                    <li>Common Area Cleaning</li>
                                    <li>Window and Glass Cleaning</li>
                                    <li>Floor Cleaning</li>
                                    <li>Upholstery Cleaning</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="myDIV" data-aos="fade-up">


                        <div class="div2">
                            <img src="images/hero/clean.png" alt="landry services" />
                        </div>

                        <div class="fortex" data-aos="fade-left">
                            <div class="div3">
                                <h1>Construction cleaning</h1>
                            </div>
                            <div class="div4">

                                <ul>
                                    <li>Debris and Trash Removal</li>
                                    <li>Dust and Dirt Cleaning</li>
                                    <li>Window and Glass Cleaning</li>
                                    <li>Floor Cleaning</li>
                                    <li>Fixture Cleaning</li>
                                    <li>Surface Cleaning</li>
                                    <li>HVAC Vent Cleaning</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="myDIV1" data-aos="fade-up">


                        <div class="div2">
                            <img src="images/hero/clean.png" alt="landry services" />
                        </div>

                        <div class="fortex" data-aos="fade-left">
                            <div class="div3 ">
                                <h1>Carpet and sofa cleaning </h1>
                            </div>
                            <div class="div4">

                                <ul>
                                    <li>Upholstery Cleaning</li>
                                    <li>Carpet Cleaning</li>
                                    <li>Stain and Odor Removal</li>
                                    <li>Steam Cleaning</li>
                                    <li>Spot Cleaning</li>
                                    <li>Deodorizing and Sanitizing
                                        Fabric Protection</li>
                                    <li>Quick-Drying Techniques</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="myDIV" data-aos="fade-up">


                        <div class="div2">
                            <img src="images/hero/clean.png" alt="landry services" />
                        </div>

                        <div class="fortex" data-aos="fade-left">
                            <div class="div3">
                                <h1>Construction cleaning</h1>
                            </div>
                            <div class="div4">

                                <ul>
                                    <li>Debris and Trash Removal</li>
                                    <li>Dust and Dirt Cleaning</li>
                                    <li>Window and Glass Cleaning</li>
                                    <li>Floor Cleaning</li>
                                    <li>Fixture Cleaning</li>
                                    <li>Surface Cleaning</li>
                                    <li>HVAC Vent Cleaning</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>





        </div>
    </section>
    </section>





    <section>
        <div class="container">
            <div class="contact text-center col">
                <div class="callUs text-center col" data-aos="fade-right">
                    <div><i class="fas   fa-8x  fa-phone-alt"></i></div>
                    <div class="calUs  text-center">

                        <p>We are just a call away!</p>
                        <p>Call us now <span><a href="tel:+233203206377">
                                    0203206377</a></span></p>

                        <!-- <a href="mailto:email@example.com"> email@example.com </a>
              Phone: <span itemprop="telephone"><a href="tel:+123456890">
                234567890</a></span> -->
                    </div>
                </div>
                <button class="w-50 mt-5 btn btn-lg btn-primary" type="submit">Schedule a Pickup</button>
            </div>
        </div>
    </section>


    <section>
        <div class="operate me-0" data-aos="fade-up">
            <h3 class="text-center">How We Operate</h3>
            <div class="flex-container">
                <div class="image-container" data-aos="fade-down">
                    <img class="img.img-fluid" src="images/services/serv.svg" alt="Image 1" />
                    <div class="image-title">
                        <h4>You Book</h4>
                    </div>
                </div>
                <div class="image-container" data-aos="fade-up">
                    <img class="img.img-fluid" src="images/services/serv2.svg" alt="Image 2" />
                    <div class="image-title">
                        <h4>We Pickup</h4>
                    </div>
                </div>
                <div class="image-container" data-aos="fade-down">
                    <img class="img.img-fluid" src="images/services/serv1.svg" alt="Image 3" />
                    <div class="image-title">
                        <h4>We Wash</h4>
                    </div>
                </div>
                <div class="image-container" data-aos="fade-up">
                    <img class="img.img-fluid" src="images/services/serv4.svg" alt="Image 4" />
                    <div class="image-title">
                        <h4>We Deliver</h4>
                    </div>
                </div>
            </div>
            <h4 class="text-center mt-5">
                All you have to do is to relax, your clothes are delivered within
                <br />24hrs or less.
            </h4>
        </div>
    </section>


    <section>

        <div class="container mt-5">
            <div id="pricing" class="carus2 row" data-aos="fade-down">
                <h1 class="text-center text-shadow">Pricing packages</h1>

                <div class="card text-center" style="width: 15rem;" data-aos="fade-down">
                    <div class="ribbon"><span>POPULAR</span></div>
                    <h4 class="card-header text-center">Lite</h4>
                    <div class="card-body">

                        <h2 class="text-center">5Kg</h2>
                        <p>Stain Removal</p>
                        <hr>
                        <p>Standard</p>
                        <p>Softner</p>
                        <hr>
                        <p class="card-text">5 Hours</p>
                    </div>
                </div>
                <div class="card text-center" style="width: 15rem;" data-aos="fade-down">

                    <h4 class="text-center">Standard</h4>
                    <div class="card-body">

                        <h2 class="text-center">5Kg</h2>
                        <p>Dry wash & Fold</p>
                        <hr>
                        <p>Premium</p>
                        <p>Softner</p>
                        <hr>
                        <p class="card-text">1 Day</p>
                    </div>
                </div>
                <div class="card text-center" style="width: 15rem;" data-aos="fade-down">

                    <h4 class="text-center">Premium</h4>
                    <div class="card-body">

                        <h2 class="text-center">5Kg</h2>
                        <p>Stain Removal</p>
                        <hr>
                        <p>Softner & </p>
                        <p>Perfume</p>

                        <hr>
                        <p class="card-text">1 Day</p>
                    </div>
                </div>



            </div>
        </div>

    </section>


    <section>
        <div class="container">

            <div class="flex-container" data-aos="fade-down">
                <div class="review-box">
                    <div class="testimonials">
                        <div class="reviews">

                            <h2 class="text-center">Reviews</h2>

                            <div class="reviews-container ">




                                <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>

                                <div class="card mt-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="row1 row mb-5">
                                                <img class="f1" src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                    class="img img-rounded img-fluid" />
                                                <p class="f2 ">
                                                    <sp><?= $row["timestamp"] ?></sp>
                                                </p>
                                            </div>
                                            <div class="col">

                                                <a class="float-left" href=""><strong>
                                                        <p><strong><?= $row["customer_name"] ?></strong>
                                                    </strong></a>
                                                <span class="float-right text-warning">
                                                    &nbsp; <?= $row["rating"] ?><i class="fa fa-star "> </i></span>
                                                </p>


                                                <p><?= $row["review_text"] ?></p>
                                                <p>
                                                    <a class="float-right btn btn-outline-primary ml-2"> <i
                                                            class="fa fa-reply"></i> Reply</a>
                                                    <a class="float-right btn text-white btn-danger"> <i
                                                            class="fa fa-heart"></i> Like</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reply">
                                            <div class="card-inner">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="row1 row">
                                                            <img class="f1"
                                                                src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                                class="img img-rounded img-fluid" />
                                                            <p class="f2">15 Minutes Ago</p>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p><a
                                                                    href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman
                                                                        Akash </strong></a><em style="color: grey;">
                                                                    &nbsp; replied</em></p>
                                                            <p>Lorem Ipsum is simply dummy text
                                                                of the pr make but also the leap
                                                                into electronic typesetting,
                                                                remaining essentially unchanged.
                                                                It was popularised in the 1960s
                                                                with the release of Letraset
                                                                sheets containing Lorem Ipsum passages
                                                                , and more recently with desktop
                                                                publishing software like Aldus
                                                                PageMaker including versions
                                                                of Lorem Ipsum.</p>
                                                            <p>
                                                                <a class="float-right btn btn-outline-primary ml-2">
                                                                    <i class="fa fa-reply"></i> Reply</a>
                                                                <a class="float-right btn text-white btn-danger"> <i
                                                                        class="fa fa-heart"></i> Like</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php

                              }
            } else {
                echo "No reviews yet.";
            }
            ?>


                            </div>

                        </div>


                        <div class="leave-review ">
                            <h2 class="text-center text-white mt-3 mbs-2">Leave a Review</h2>
                            <form method="post" action="index.php" onsubmit="submitReview(event);">
                                <input type="email" id="email" name="email" placeholder="Enter Email" required />
                                <input class="mt-4" type="name" id="full_name" name="name" placeholder="Full Name"
                                    required />

                                <textarea class="mt-4" rows="6" maxlength="500" cols="70" id="review" name="review"
                                    placeholder="Enter Review" required></textarea>
                                <h3 class="text-center text-white">Rate Us:</h3>
                                <div class="star-rating text-center">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" title="5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" title="4 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" title="3 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" title="2 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" title="1 star"></label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit"> Submit Review</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="custom-loader"></div>

    <section>
        <div class="container">
            <div class="carus1 row" data-aos="fade-down">
                <h1 class="text-center">Latest News & Blogs</h1>
                <div class="card" style="width: 18rem;" data-aos="fade-down">
                    <a href=""><img class="card-img-top" src="images/pinky.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="">
                            <h3>How to bleach</h3>
                        </a>
                        <p class="card-text">Some quick example text to build on
                            the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;" data-aos="fade-down" data-aos-duration="5000">
                    <a href=""><img class="card-img-top" src="images/ironi.jpg" alt="Card image cap"></a>
                    <div class="card-body" data-aos="fade-in">
                        <a href="">
                            <h3>How To Iron Without multiple traces</h3>
                        </a>
                        <p class="card-text">Some quick example text to build on
                            the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;" data-aos="fade-down" data-aos-duration="17000"
                    data-aos-delay="7000">
                    <a href=""><img class="card-img-top" src="images/disinfecting-home.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <a href="">
                            <h3>The Side Effect Of Strong Washing Chemicals</h3>
                        </a>
                        <p class="card-text">Some quick example text to build on
                            the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- BACK TO TOP BUTTON  -->
    <a href="#" class="shadow btn-primary rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>


    <script>
    // Submit review form using AJAX
    function submitReview(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(event.target);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                event.target.reset(); // Reset form
                showSuccessMessage();
                reloadContent();
            }
        };
        xhr.send(formData); // Send data
    }

    // Display success message
    function showSuccessMessage() {
        const successMessage = document.createElement("div");
        successMessage.classList.add("alert", "alert-success", "mt-3");
        successMessage.textContent = "Review submitted successfully!";

        const form = document.querySelector("form");
        form.insertBefore(successMessage, form.firstChild);

        setTimeout(function() {
            successMessage.remove(); // Remove success message after timeout
        }, 3000);
    }

    // Reload page content using AJAX
    function reloadContent() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "index.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.body.innerHTML = xhr.responseText; // Update page content
            }
        };
        xhr.send(); // Fetch content
    }

    // Fetch and update reviews every 30 seconds
    //setInterval(updateReviews, 30000);

    // Update reviews using AJAX
    function updateReviews() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "index.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const reviewsContainer = document.querySelector(".reviews-container");
                reviewsContainer.innerHTML = xhr.responseText; // Update reviews
            }
        };
        xhr.send(); // Fetch reviews
    }

    // Restore scroll position on page load
    window.onload = function() {
        const scrollPosition = sessionStorage.getItem("scrollPosition");
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            sessionStorage.removeItem("scrollPosition");
        }
    };
    </script>





    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
    const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
    });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 1500,

        once: false,
    });
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>