<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="../CSS/Media.css">
    <title>B-Motors</title>
</head>

<body>
    <header>
        <!-------------Navbar Section------------>
        <div class=" container-fluid p-0 mb-5 text-light" id="home">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="main-nav">
                <a class="navbar-brand ml-3" href="#home">B-Motors</a>
                <button class="navbar-toggler nav-btn" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="ml-auto"></div>
                    <ul class="navbar-nav ">
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#site">Why Use This Site</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#blogPost">Blog Post</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--------------Heading section------------->
        <div class="container heading text-center text-capitalize text-light">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h1 class="display-2">b-motors</h1>
                    <p class="lead">this is a blog site for car's</p>
                    <a href="#about" class="btn btn-outline-info btn-lg">know more</a>
                </div>
            </div>
        </div>
        <!------------video section------------>
        <div class="vdo-container">
            <video preload="auto" autoplay loop volume="0" poster="../VDO/Road-Tripping.jpg">
                <source src="../VDO/Road-Tripping.mp4" type="video/mp4">
                <source src="../VDO/Road-Tripping.mov" type="video/mov">
                <source src="../VDO/Road-Tripping.ogv" type="video/ogv">
                <source src="../VDO/Road-Tripping.webm" type="video/webm">
            </video>
        </div>
    </header>
    <!-----------------main section-------------->
    <main>
        <!------------About section------------->
        <div class="section-0">
            <div class="about" id="about">
                <section class="container text-center text-capitalize">
                    <h1 class="display-1 mt-4 text-center">about the site</h1>
                    <section class="info">
                        <div class="row text-left">
                            <p class="col-sm-12 col-md-12 col-lg-12 lead">CarsDirect helps you get a great deal on a new
                                or used car by giving you up-to-the-minute car pricing information so
                                that you're fully armed with the knowledge you need as you shop for a car. We also help
                                buyers with less-than-perfect
                                credit find special financing options through our network of trusted lending partners.
                            </p>
                        </div>
                    </section>
                    <img src="../IMG/newDotted.png" alt="" class="img-fluid">
            </div>
        </div>
        <!-------------why use this site section-------------->
        <section class="section-1" id="site">
            <div class="container text-capitalize text-center">
                <div class="row">
                    <div class="col-md-6 column">
                        <div class="pray">
                            <img src="../IMG/sectionImg1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="panel text-left">
                            <h1 class="display-1 head">why use this site?</h1>
                            <div class="para mt-5">
                                <p class="lead">Our full-time team of pricing experts is constantly analyzing the latest
                                    car pricing data to identify hot deals and
                                    pricing trends that are useful to car shoppers. In fact, our pricing experts dig so
                                    deep that they often break industry
                                    news stories that are reported by the world's biggest car news publications!

                                    As an independent company, you can rest assured that our pricing information is
                                    totally objective and not influenced by
                                    any outside factors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------------Blog post------------>
        <section class="section-3 mb-5" id="blogPost">
            <div class="container text-capitalize text-center">
                <h1 class="display-2">Blog Posts</h1>
                <div class="team row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/Toyota Fortuner.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota FORTUNER</h2>
                                <p class="card-text">Toyota Fortuner, also known as the Toyota SW4, is a mid-size SUV
                                </p>
                                <a href="../PHP/BlogPost_1.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/Toyota Camry.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota Camry</h2>
                                <p class="card-text">Toyota Camry is an automobile sold internationally by the Japanese
                                    manufacturer Toyota
                                </p>
                                <a href="../PHP/BlogPost_3.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/Toyota Hilux.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota Hilux</h2>
                                <p class="card-text">The Toyota Hilux is a series of
                                    light commercial vehicles produced and marketed Toyota
                                </p>
                                <a href="../PHP/BlogPost_4.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/LC200.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota LC200</h2>
                                <p class="card-text">Toyota Land Cruiser is a series of four-wheel drive vehicles
                                    produced by Toyota.
                                </p>
                                <a href="../PHP/BlogPost_2.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/YARIS 1.3L.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota YARIS 1.3L</h2>
                                <p class="card-text">The Toyota Yaris 1.3L (XP150)
                                    is a subcompact car produced and sold by Toyota since
                                    2013.
                                </p>
                                <a href="../PHP/BlogPost_5.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/YARIS 1.5L.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota YARIS 1.5L</h2>
                                <p class="card-text">The Toyota Yaris 1.5L (XP150)
                                    is a subcompact car produced and sold by Toyota since
                                    2013.
                                </p>
                                <a href="../PHP/BlogPost_6.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <a href="../PHP/BlogPost.php" target="_self" class="btn btn-outline-warning btn-lg btn-block">More
                    Posts</a>
            </div>
        </section>
    </main>
    <!----------------footer------------->
    <footer id="contact">
        <div class="container-fluid p-0 text-capitalize">
            <div class="row text-left">
                <div class="col-md-5">
                    <p class="text-muted">Copyright &copy;2020 all rights reserved | website is created by
                        <span>"Ariyan"</span></p>
                </div>
                <div class="col-md-5">
                    <h3 class="text-light">newsletter</h3>
                    <form action="../PHP/Subscribe.php" method="POST" class="form-inline">
                        <div class="col pl-0">
                            <div class="input-group-append">
                                <input type="email" class="form-control text-left" placeholder="Enter Your Email"
                                    name="email">
                            </div>
                            <input type="submit" value="Subscribe" class="btn btn-danger text-center subscribe"
                                name="Subscribe">
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-12 mt-4">
                    <h3 class="text-light foot">Follow Me</h3>
                    <div class="column text-light">
                        <a href="https://www.facebook.com/" target="_blank" class="icon">
                            <i class="fab fa-facebook-f  ml-2"></i>
                        </a>
                        <a href="https://github.com/" target="_blank" class="icon">
                            <i class="fab fa-github ml-2"></i>
                        </a>
                        <a href="https://mail.google.com/mail/u/0/?tab=wm1#inbox" target="_blank" class="icon">
                            <i class="fab fa-stack-overflow  ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-------------------Smooth Scrolling------------>
    <?php
            include '../PHP/smoothScroll.php';
    ?>
    <!----------------script files---------->
    <script type="text/javascript" src="../JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="../JS/jquery.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript" src="../Icons/js/all.min.js"></script>

</body>

</html>