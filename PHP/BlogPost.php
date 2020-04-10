<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/BlogPost.css">
    <link rel="stylesheet" href="../CSS/Media1.css">
    <title>B-Motors</title>
</head>

<body>
    <?php
        include './navBlog.php';
    ?>
    <header>    
        <div class="Head-section">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid img" src="../IMG/carouselImg1.jpg" alt=" First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img" src="../IMG/lanser.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid img" src="../IMG/sectionImg2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </header>
    <!---------------------blog post--------------------->
    <main class="section-1 mb-5">
        <div class="container">
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
                                <a href="./BlogPost_1.php" target="_self" class="btn btn-outline-info mt-3">See
                                    More</a>
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
                                <a href="./BlogPost_3.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
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
                                <a href="./BlogPost_4.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
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
                                <a href="./BlogPost_2.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
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
                                <a href="./BlogPost_5.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
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
                                <a href="./BlogPost_6.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/bmw.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">BMW 2 Series</h2>
                                <p class="card-text">The first-ever BMW 2 Series Gran Coupé introduces a new form of
                                    the compact class.
                                </p>
                                <a href="./BlogPost_9.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/lanser2.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Mitsubishi Lancer GT</h2>
                                <p class="card-text">The Mitsubishi Lancer is a compact car produced by the Japanese
                                    Mitsubishi since 1973.
                                </p>
                                <a href="./BlogPost_8.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card d-inline-block shadow-lg mb-4">
                            <div class="card-img-top">
                                <img src="../IMG/supra.jpg" class="img-fluid radius" alt="">
                            </div>
                            <div class="card-body pb-4 d-inline-block shadow-lg">
                                <h2 class="card-title">Toyota Supra</h2>
                                <p class="card-text">2021 Toyota Supra First Look: New Four-Cylinder Detailed, Six Gets
                                    More Power
                                </p>
                                <a href="./BlogPost_7.php" target="_self" class="btn btn-outline-info mt-3">See More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!----------------footer------------->
    <?php
        include '../PHP/footer.php';
    ?>
    <!-------------------Smooth Scrolling------------>
    <?php
        include '../PHP/smoothScroll.php';
    ?>
</body>

</html>