<?php
session_start([
  'cookie_secure' => true,
  'cookie_httponly' => true,
]);
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Access-Control-Allow-Origin: https://allowed-domain.com");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Feature-Policy: geolocation 'none'; microphone 'none';");
header("Referrer-Policy: no-referrer-when-downgrade");
header("Permissions-Policy: geolocation=(self 'https://trusted-site.com')");
header("Expect-CT: enforce, max-age=3600");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ravenatic Sdn. Bhd.</title>
  <link rel="icon" type="images/x-icon" href="image/img-headerlogo.png" />
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script src="js/smooth-scroll.js"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>
  <!--------Navigation Bar-------->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg py-2">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="image/img-companylogo.png" alt="Ravenatic">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#banner">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                COMPANY
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="html/AboutUs.php#about-us">About Us</a></li>
                <li><a class="dropdown-item" href="html/AboutUs.php#visionNmission">Vision and Mission</a></li>
                <!-- <li><a class="dropdown-item" href="html/AboutUs.html#organization">Our Team</a></li> -->
                <li><a class="dropdown-item" href="#choose-us">Why Choose Us</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SERVICES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="html/Services.php#our-service">Services</a></li>
                <!-- <li><a class="dropdown-item" href="html/Services.html#our-experience">Our Experience</a></li> -->
                <!-- <li><a class="dropdown-item" href="html/Services.html#our-product">Product</a></li> -->
              </ul>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#about-us">ABOUT US</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#contact-us">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <!--------Home Page-------->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="promo-title"><b>"To strengthen our role as the foremost strategic ally in the realm of defense and
              security"</b></p>
          <!-- <p class="promo-desc">Ravenatic Sdn. Bhd. was incorporated on 2023-04-04 in Malaysia.
            Ravenatic Sdn Bhd.'s business includes Security Systems; Export and Import of Electrical and
            Electronic Component and Wiring Accessories; Information Communication Technology (ICT) System
            Security</p> -->
        </div>
      </div>
    </div>

    <div class="indicator-scrolldown">
      <a href="#headline"></a>
    </div>
  </section>


  <section id="headline">
    <div class="container">
      <div class="row">
        <div class="column">
          <h1 class="headline-text text-center">
            <em>Simulation • Solution • Services</em>
          </h1>
        </div>
      </div>
    </div>
  </section>

  <!--------Services Page-------->
  <section id="services">
    <div class="container">
      <h1 class="title-text-center">Our Services</h1>
      <hr class="hr-title">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2 gy-3">
        <div class="col">
          <div class="card shadow h-100">
            <div class="inner">
              <img src="image/img-service1.jpg" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <p class="card-text">Security Systems</p>
              <hr class="hr hr-blurry" />
              <div class="d-flex justify-content-center mt-3">
                <p class="card-desc">"Ensuring the safety and protection of our business premises and sensitive data, we
                  have integrated
                  advanced security systems into our website, including access control, surveillance cameras, and
                  encryption
                  protocols."</p>
              </div>
              <a href="html/Services.php#our-service" class="btn-learn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow h-100">
            <div class="inner">
              <img src="image/img-service2.jpg" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <p class="card-text">Simulation</p>
              <hr class="hr hr-blurry" />
              <div class="d-flex justify-content-center mt-3">
                <p class="card-desc">"Experience our innovative sentence simulator technology that creates engaging
                  content with ease."</p>
              </div>
              <a href="html/Services.php#our-service" class="btn-learn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow h-100">
            <div class="inner">
              <img src="image/img-service3.jpg" class="card-img-top">
            </div>
            <div class="card-body text-center">
              <p class="card-text">Information Communication
                Technology (ICT)</p>
              <hr class="hr hr-blurry" />
              <div class="d-flex justify-content-center mt-3">
                <p class="card-desc">"At the heart of our business website lies cutting-edge Information and
                  Communication Technology (ICT),
                  driving innovation, efficiency, and seamless connectivity across our operations."</p>
              </div>
              <a href="html/Services.php#our-service" class="btn-learn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-bot" style="margin-top: -25%;">
    <div class="container pt-5">
      <div class="row" style="margin-top: 25%;">
      </div>
    </div>
  </section>

  <!--------Choose Us Page-------->
  <section id="choose-us">
    <div class="container text-center">
      <h1 class="title-text-center">Why Choose Us ?</h1>
      <hr class="hr-title">
      <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="2500">
            <div class="overlay-image" style="background-image: url(image/img-chooseUs1.jpg);"></div>
            <div class="container my-carousel">
              <p>We consistently introduce innovative products, services, or processes that set us apart from
                competitors.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="2000">
            <div class="overlay-image" style="background-image: url(image/img-chooseUs2.jpg);"></div>
            <div class="container my-carousel">
              <p>Our business offers a distinctive value proposition that addresses specific customer needs or pain
                points better than others in the market.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="1500">
            <div class="overlay-image" style="background-image: url(image/img-chooseUs3.jpg);"></div>
            <div class="container my-carousel">
              <p>We are committed to delivering superior quality in everything we offer, earning us a reputation for
                excellence.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="1500">
            <div class="overlay-image" style="background-image: url(image/img-chooseUs4.jpg);"></div>
            <div class="container my-carousel">
              <p>We tailor our products or services to meet individual customer preferences, creating a personalized
                experience.</p>
            </div>
          </div>
          <div class="carousel-item" data-interval="1500">
            <div class="overlay-image" style="background-image: url(image/img-chooseUs5.jpg);"></div>
            <div class="container my-carousel">
              <p>We uphold the highest ethical standards, promoting transparency and trust with our stakeholders.</p>
            </div>
          </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
          <span class="sr-only">Previous</span>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
          <span class="sr-only">Next</span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </section>
  <!--------Contact Us Page-------->
  <section id="contact-us">
    <div class="container">
      <h1 class="title-text-center">Contact Us</h1>
      <hr class="hr-title">
      <div class="custom-row row">
        <div class="col-md-7">
          <form action="contact_form.php" method="post">
            <h4>Get in touch</h4>
            <div class="mb-3">
              <label for="exampleControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="exampleControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="exampleControlInput1" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" required>
            </div>
            <div class="mb-3">
              <label for="exampleControlTextarea1" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeqKZgpAAAAAN1gGM2HXY9i0VPPvi0js1ihCokg"></div>
            <button class="custom-btn" type="submit" name="submit" value="Send">Send</button>
          </form>
        </div>
        <div class="col-md-5 contact-info">
          <div class="mt-5">
            <div class="d-flex">
              <i class="bi bi-geo-alt-fill"></i>
              <p>L1-03, Wangsa 118, Jalan Wangsa Delima, Wangsa Maju, 53300 Kuala Lumpur</p>
            </div>
            <div class="d-flex">
              <i class="bi bi-telephone-fill"></i>
              <p>+603-4819 6314</p>
            </div>
            <div class="d-flex">
              <i class="bi bi-envelope-at-fill"></i>
              <p>info@ravenatic.com</p>
            </div>
            <hr>
            <div class="social-icons">
              <!-- <a href="https://www.whatsapp.com/"><img src="image/icon-whatsapp.png"></a> -->
              <!-- <a href="https://www.facebook.com/"><img src="image/icon-facebook.png"></a>
              <a href="https://www.linkedin.com/"><img src="image/icon-linkedin.png"></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--------Footer-------->
  <footer id="footer" class="page-footer p-1 text-md-left">
    <div class="container py-2">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="img-footer d-inline">
            <img src="image/img-headerlogo.png">
            <img src="image/img-companyname.png">
          </div>
          <p class="footer-desc">Ravenatic Sdn. Bhd. officially became a registered entity in Malaysia on April 4, 2023,
            but our wealth of experience predates our formal establishment by several years. Our company boasts deep
            specialization across a variety of domains, including Security Systems, Simulators, and Information
            Communication Technology (ICT). Through this extensive experience, we harness our expertise
            to provide cutting-edge solutions and services to our clients.
          </p>
        </div>
        <div class="col-lg-3 col-md-3 mx-auto p-sm-5">
          <h5 class="text-uppercase font-weight-bold mb-4">Company</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="index.php">Home</a></li>
            <li class="mb-1"><a href="html/AboutUs.php#about-us">About Us</a></li>
            <li class="mb-1"><a href="html/AboutUs.php#visionNmission">Vision and Mission</a></li>
            <!-- <li class="mb-1"><a href="html/AboutUs.html#organization">Our Team</a></li> -->
            <li class="mb-1"><a href="#choose-us">Why Choose Us</a></li>
            <li class="mb-1"><a href="#contact-us">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-3 mx-auto p-sm-5">
          <h5 class="text-uppercase font-weight-bold mb-4">Services</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="html/Services.php#our-service">Services</a></li>
            <!-- <li class="mb-1"><a href="html/Services.html#our-experience">Our Experience</a></li> -->
            <!-- <li class="mb-1"><a href="html/Services.html#our-product">Product</a></li> -->
          </ul>
        </div>
        <!-- <div class="col-lg-2 col-md-2 mx-auto p-sm-5">
          <h5 class="text-uppercase font-weight-bold mb-4">Support</h5>
          <ul class="list-unstyled">
            <li class="mb-1"><a href="#">Terms of Use</a></li>
            <li class="mb-1"><a href="#">Privacy Statement</a></li>
            <li class="mb-1"><a href="#">FAQ</a></li>
            <li class="mb-1"><a href="#">Help</a></li>
          </ul>
        </div> -->
        <div class="col-lg-3 col-xs-12 location p-sm-5">
          <h5 class="text-uppercase font-weight-bold mb-4">Contact</h5>
          <p class="d-flex align-items-center"><i class="bi bi-geo-alt-fill mx-1 lead"></i>L1-03, Wangsa 118, Jalan
            Wangsa Delima, Wangsa Maju, 53300 Kuala Lumpur.</p>
          <p class="d-flex align-items-center"><i class="bi bi-telephone-fill mx-1 lead"></i>+603-4819 6314</p>
          <p class="d-flex align-items-center"><i class="bi bi-envelope-at-fill mx-1 lead"></i>info@ravenatic.com
          </p>
          <hr>
          <i class="bi bi-person-badge mx-1 lead"></i><a class="staff-login" href="\staff\login.php">Staff Login</a>
        </div>
      </div>
    </div>
  </footer>
  <footer class="p-1 bg-dark text-white text-center position-relative copy-footer">
    <div class="container">
      <p class="mb-0">
        Copyright &copy; 2023
      </p>
      <p class="mb-0">
        All Rights Reserved by Ravenatic Sdn. Bhd.
      </p>
    </div>

  </footer>
</body>

</html>