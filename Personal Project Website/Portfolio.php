<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shubham</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>
<style>
    section div button{
        background-color: transparent;
        border: none;
    }
</style>
<body>
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="Home.php">Shubham Goel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Skills.php">skills</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Portfolio.php">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="project-area">
        <div class="container">
            <div class="project-title pb-5">
                <h1 class="text-uppercase title-h1">Recently Done Project</h1>
                <h1 class="text-uppercase title-h1">Quality Work</h1>
            </div>

            <div class="button-group">
                <button type="button" class="active" id="btn1" data-filter="*">All</button>
                <button type="button" data-filter=".popular">Popular</button>
                <button type="button" data-filter=".latest">Latest</button>
                <button type="button" data-filter=".following">Following</button>
                <button type="button" data-filter=".upcoming">Upcoming</button>
            </div>

            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p1.jpg">
                                <img src="./img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Minimul Desing</h4>
                            <span class="text-secondary">Latest, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p2.jpg">
                                <img src="./img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Paint Wall</h4>
                            <span class="text-secondary">Popular, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item popular">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p3.jpg">
                                <img src="./img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Female light</h4>
                            <span class="text-secondary">Popular, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p4.jpg">
                                <img src="./img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Fourth Air</h4>
                            <span class="text-secondary">Upcoming, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p5.jpg">
                                <img src="./img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Muliple fown</h4>
                            <span class="text-secondary">Upcoming, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p6.jpg">
                                <img src="./img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Together sign</h4>
                            <span class="text-secondary">Following, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p7.jpg">
                                <img src="./img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Green Heaven</h4>
                            <span class="text-secondary">Following, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item following">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p8.jpg">
                                <img src="./img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Fly Male</h4>
                            <span class="text-secondary">Following, Portfolio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 element-item upcoming">
                    <div class="our-project">
                        <div class="img">
                            <a class="test-popup-link" href="./img/portfolio/p9.jpg">
                                <img src="./img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                            </a>
                        </div>
                        <div class="title py-4">
                            <h4 class="text-uppercase">Camera Lens</h4>
                            <span class="text-secondary">Upcoming, Portfolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!--  Jquery js file  -->
      <script src="./js/jquery.3.4.1.js"></script>

      <!--  Bootstrap js file  -->
      <script src="./js/bootstrap.min.js"></script>
  
      <!--  isotope js library  -->
      <script src="./vendor/isotope/isotope.min.js"></script>
  
      <!--  Magnific popup script file  -->
      <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
  
      <!--  Owl-carousel js file  -->
      <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
      <!--  custom js file  -->
      <script src="./js/main.js"></script>
  
</body>
