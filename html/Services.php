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
                                <li><a class="dropdown-item" href="AboutUs.php#about-us">About Us</a></li>
                                <li><a class="dropdown-item" href="AboutUs.php#visionNmission">Vision and Mission</a>
                                </li>
                                <!-- <li><a class="dropdown-item" href="AboutUs.html#organization">Our Team</a></li> -->
                                <li><a class="dropdown-item" href="../index.php#choose-us">Why Choose Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#our-service">Services</a></li>
                                <!-- <li><a class="dropdown-item" href="#our-experience">Our Experience</a></li> -->
                                <!-- <li><a class="dropdown-item" href="#our-product">Product</a></li> -->
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

    <!--------Services Page-------->
    <section id="our-service">
        <div class="container">
            <h1 class="title-text-center">Our Services</h1>
            <hr class="hr-title">
            <div class="row row-cols-2 align-items-center">
                <div class="col-md-6 servicing">
                    <div class="text-service">
                        <h4>Simulation</h4>
                        <p>Ravenatic's groundbreaking simulator technology is at the forefront of industry
                            transformation, as it pioneers immersive, hands-on training experiences that are reshaping
                            how professionals across various sectors learn and develop their skills.</p>
                    </div>
                </div>
                <div class="col-md-6 servicing">
                    <div class="img-service">
                        <img src="../image/img-ourServices1.jpg" alt="img-1" class="w-100">
                    </div>
                </div>
                <div class="col-md-6 servicing">
                    <div class="img-service">
                        <img src="../image/img-ourServices2.jpg" alt="img-1" class="w-100">
                    </div>
                </div>
                <div class="col-md-6 servicing">
                    <div class="text-service">
                        <h4>Security Systems</h4>
                        <p>RAVENATIC offers a comprehensive array of security system solutions, ensuring the safety and
                            protection of your assets through an extensive range of cutting-edge products and services.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 servicing">
                    <div class="text-service">
                        <h4>Information Communication
                            Technology (ICT)</h4>
                        <p>RAVENATIC offers a wide array of ICT software development solutions, catering to diverse
                            business needs and objectives, with a strong focus on delivering cutting-edge technology
                            products and services.</p>
                    </div>
                </div>
                <div class="col-md-6 servicing">
                    <div class="img-service">
                        <img src="../image/img-ourServices3.jpg" alt="img-1" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------Experience-------->
    <!-- <section id="our-experience">
        <div class="container">
            <h1 class="title-text-center">Our Experience</h1>
            <hr class="hr-title">
            <div class="container ex-container">
                <div class="center-line">
                </div>
                <div class="row ex-row row-1">
                    <section class="ex-section">
                        <i class="ex-icon fa-solid fa-jet-fighter-up"></i>
                        <div class="ex-details">
                            <span class="ex-title">TUDM Lasarud Kota Belud</span>
                            <span>2013 - 2019</span>
                        </div>
                        <p>Perkhidmatan pengendalian & penyelenggaraan Lapang Sasar
                            Udara (LASARUD) Kota Belud, Sabah</p>
                    </section>
                </div>
                <div class="row ex-row row-2">
                    <section class="ex-section">
                        <i class="ex-icon fa-solid fa-user-graduate"></i>
                        <div class="ex-details">
                            <span class="ex-title">MOE</span>
                            <span>2014</span>
                        </div>
                        <p>Tender bagi membekal, menghantar dan mengujilari peralatan
                            E-Pembelajaran bagi 13 buah Politeknik, Kementerian Pendidikan
                            Malaysia.</p>
                    </section>
                </div>
                <div class="row ex-row row-1">
                    <section class="ex-section">
                        <i class="ex-icon fa-solid fa-user-gear"></i>
                        <div class="ex-details">
                            <span class="ex-title">Giatmara</span>
                            <span>2015</span>
                        </div>
                        <p>Cadangan membekal, menghantar, memasang, menguji,
                            melatih dan metauliah perkakasan dan perisian komputer riba
                            (NOTEBOOK) untuk kegunaan tenaga pengajar GIATMARA
                            seluruh Malaysia.</p>
                    </section>
                </div>
                <div class="row ex-row row-2">
                    <section class="ex-section">
                        <i class="ex-icon fa-solid fa-jet-fighter-up"></i>
                        <div class="ex-details">
                            <span class="ex-title">TUDM</span>
                            <span>2016</span>
                        </div>
                        <p>Perolehan membekal, menghantar, memasang, menguji,
                            memeriksa dan mentauliah satu (1) unit peralatan part task
                            trainer (PTT) bagi pesawat A400M Tentera Udara Diraja
                            Malaysia (TUDM) secara rundingan terus.</p>
                    </section>
                </div>
                <div class="row ex-row row-1">
                    <section class="ex-section">
                        <i class="ex-icon fa-solid fa-person-rifle"></i>
                        <div class="ex-details">
                            <span class="ex-title">Tentera Darat Malaysia</span>
                            <span>2018</span>
                        </div>
                        <p>Portable Electronic Target System (PETS)</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark" style="margin-top: -5%;">
        <div class="container pt-5">
            <div class="row">
                <div class="vm-title col-lg-3">
                    <p>OUR EXPERIENCE</p>
                </div>
                <div class="vm-desc col-lg-9 mb-2">
                    <h6 class="lh-lg">RAVENATIC is a group of experienced professionals who are passionate
                        about our work. We have a deep understanding of the security systems,
                        electrical and electronic components, and ICT system security industries,
                        and we are committed to providing our customers with the best possible
                        products and services.</h6>
                </div>
            </div>
        </div>
    </section> -->

    <!--------Our Product-------->
    <!-- <section id="our-product">
        <div class="container">
            <h1 class="title-text-center">Our Product</h1>
            <hr class="hr-title">
            <div class="row align-items-center">
                <p class="org-desc">The RAVENATIC Integrated Shooting and Marksmanship Trainer is
                    a state-of-the-art training system that provides realistic and
                    immersive training for shooters of all levels. The system features a
                    variety of training scenarios, including target practice, live-fire
                    simulation, and force-on-force training</p>
                <img src="../image/img-product.png" class="img-product">
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
                        <li class="mb-1"><a href="AboutUs.php#about-us">About Us</a></li>
                        <li class="mb-1"><a href="AboutUs.php#visionNmission">Vision and Mission</a></li>
                        <li class="mb-1"><a href="AboutUs.php#organization">Our Team</a></li>
                        <!-- <li class="mb-1"><a href="../index.html#choose-us">Why Choose Us</a></li> -->
                        <li class="mb-1"><a href="../index.php#contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 mx-auto p-sm-5">
                    <h5 class="text-uppercase font-weight-bold mb-4">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a href="#our-service">Services</a></li>
                        <!-- <li class="mb-1"><a href="#our-experience">Our Experience</a></li> -->
                        <!-- <li class="mb-1"><a href="#our-product">Product</a></li> -->
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