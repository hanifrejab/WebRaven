<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ravenatic Sdn. Bhd.</title>
    <link rel="icon" type="images/x-icon" href="image/img-headerlogo.png" />
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <!--------Navigation Bar-------->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg py-2">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../image/img-companylogo.png" alt="Ravenatic">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                COMPANY
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#about-us">About Us</a></li>
                                <li><a class="dropdown-item" href="#visionNmission">Vision and Mission</a></li>
                                <!-- <li><a class="dropdown-item" href="#organization">Our Team</a></li> -->
                                <li><a class="dropdown-item" href="../index.php#choose-us">Why Choose Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Services.php#our-service">Services</a></li>
                                <!-- <li><a class="dropdown-item" href="Services.html#our-experience">Our Experience</a></li> -->
                                <!-- <li><a class="dropdown-item" href="Services.html#our-product">Product</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#about-us">ABOUT US</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php#contact-us">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!--------About Us-------->
    <section id="about-us">
        <div class="container">
            <h1 class="title-text-center">About Us</h1>
            <hr class="hr-title">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="about-img">
                        <img src="..\image\img-about1.jpg" alt="about-img" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-4 mt-md-4">
                    <div class="about-text">
                        <p><b>RAVENATIC SDN. BHD.</b> provides a wide range of
                            services, including security systems, simulation systems, and information communication
                            technology
                            (ICT) system security.</p>
                        <p>RAVENATIC is committed to providing its customers with
                            the best possible products and services. We understand
                            that our customers have different needs, so we offer a
                            wide range of services to choose from.</p>
                        <br>
                        <p>We also work closely with our customers to understand
                            their specific requirements and ensure that we meet
                            them.</p>
                        <p>We are constantly innovating and developing new
                            products and services to meet the changing needs of our
                            customers. We also invest heavily in our team, so that we
                            can provide our customers with the best possible service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------Vision and Mission-------->
    <section id="visionNmission">
        <div class="container">
            <h1 class="title-text-center">Vision & Mission</h1>
            <hr class="hr-title">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2 gy-3">
                <div class="col">
                    <div class="card shadow h-100">
                        <img src="../image/img-mission.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">OUR MISSION</p>
                            <hr class="hr hr-blurry" />
                            <div class="d-flex justify-content-center mt-3">
                                <p class="card-desc">To be the leading provider of security
                                    systems, simulation systems, and ICT system security
                                    solutions in the region.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow h-100">
                        <img src="../image/img-vision.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">OUR VISION</p>
                            <hr class="hr hr-blurry" />
                            <div class="d-flex justify-content-center mt-3">
                                <p class="card-desc">To provide our customers with
                                    high-quality products and services that
                                    meet their specific needs and
                                    requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow h-100">
                        <img src="../image/img-values.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">OUR VALUES</p>
                            <hr class="hr hr-blurry" />
                            <div class="d-flex justify-content-center mt-3">
                                <ul class="list-unstyled">
                                    <li class="card-desc">Integrity</li>
                                    <li class="card-desc">Customer focus</li>
                                    <li class="card-desc">Innovation</li>
                                    <li class="card-desc">Teamwork</li>
                                    <li class="card-desc">Excellent</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-bot" style="margin-top: -25%;">
        <div class="container pt-5">
            <div class="row" style="margin-top: 25%;">
                <div class="vm-title col-lg-3">
                    <p>OUR MISSION, VISION & OUR VALUES</p>
                </div>
                <div class="vm-desc col-lg-9 mb-2">
                    <h6 class="lh-lg">RAVENATIC is a business that is committed to providing its customers with the best
                        possible products and services. We understand that our customers have different needs, so we
                        offer a wide range of services to choose from. We also work closely with our customers to
                        understand their specific requirements and ensure that we meet them.</h6>
                </div>
            </div>
        </div>
    </section>

    <!--------Chart Organization-------->
    <!-- <section id="organization">
        <div class="container">
            <h1 class="title-text-center">Chart Organization</h1>
            <hr class="hr-title">
            <div class="row align-items-center">
                <p class="org-desc">RAVENATIC's directors and staff management are a
                    team of highly experienced and qualified professionals
                    who are dedicated to providing our customers with the
                    best possible products and services.</p>
                <img src="../image/img-chartOrganization.png" class="img-org">
            </div>
        </div>
    </section> -->

    <!--------Footer-------->
    <footer id="footer" class="page-footer p-1 text-md-left">
        <div class="container py-2">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="img-footer d-inline">
                        <img src="../image/img-headerlogo.png">
                        <img src="../image/img-companyname.png">
                    </div>
                    <p class="footer-desc">Ravenatic Sdn. Bhd. officially became a registered entity in Malaysia on
                        April 4, 2023,
                        but our wealth of experience predates our formal establishment by several years. Our company
                        boasts deep
                        specialization across a variety of domains, including Security Systems, Simulators, and
                        Information
                        Communication Technology (ICT). Through this extensive experience, we harness
                        our expertise
                        to provide cutting-edge solutions and services to our clients.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 mx-auto p-sm-5">
                    <h5 class="text-uppercase font-weight-bold mb-4">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a href="../index.php">Home</a></li>
                        <li class="mb-1"><a href="#about-us">About Us</a></li>
                        <li class="mb-1"><a href="#visionNmission">Vision and Mission</a></li>
                        <!-- <li class="mb-1"><a href="#organization">Our Team</a></li> -->
                        <li class="mb-1"><a href="../index.php#choose-us">Why Choose Us</a></li>
                        <li class="mb-1"><a href="../index.php#contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 mx-auto p-sm-5">
                    <h5 class="text-uppercase font-weight-bold mb-4">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a href="Services.php#our-service">Services</a></li>
                        <!-- <li class="mb-1"><a href="Services.html#our-experience">Our Experience</a></li> -->
                        <!-- <li class="mb-1"><a href="Services.html#our-product">Product</a></li> -->
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
                    <p class="d-flex align-items-center"><i class="bi bi-geo-alt-fill mx-1 lead"></i>L1-03, Wangsa 118,
                        Jalan
                        Wangsa Delima, Wangsa Maju, 53300 Kuala Lumpur.</p>
                    <p class="d-flex align-items-center"><i class="bi bi-telephone-fill mx-1 lead"></i>+603-4819 6314
                    </p>
                    <p class="d-flex align-items-center"><i
                            class="bi bi-envelope-at-fill mx-1 lead"></i>info@ravenatic.com
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="p-1 bg-dark text-white text-center position-relative copy-footer ">
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