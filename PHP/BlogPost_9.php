<?php
  include_once './Connection.php';
  include './Comment_9.php';
  date_default_timezone_set('Asia/Dhaka');
  $script_tz = date_default_timezone_get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/all.min.css">
    <link rel="stylesheet" href="../CSS/BlogPost_1.css">
    <title>B-Motors</title>
</head>

<body>
    <?php
      include './navBlog.php';
    ?>
    <section class="newHead-section mb-5">
        <div class="container text-capitalize text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="pray">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block  img-fluid newimg" src="../IMG/bmw1.jpg" alt=" First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block  img-fluid newimg" src="../IMG/bmw2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block  img-fluid newimg" src="../IMG/bmw3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block  img-fluid newimg" src="../IMG/bmw4.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <h1 class="display-1 text-center">BMW 2 Series</h1>
                        <div class="mt-5">
                            <p class="lead text-muted">The BMW 2 Series is a subcompact executive car (C-segment)
                                produced by BMW. The 2 Series has several different body
                                styles. It is available as a compact coupé that replaced the 1 Series coupé, or as a
                                convertible model that replaces the
                                1 Series convertible in the BMW lineup. There is also a new compact MPV body style,
                                which BMW refers to as an Active
                                Tourer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------table section----------------------->
    <section class="sec">
        <div class="container text-capitalize mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h1 class=" text-center theading text-light">Engine</h1>
                    <table class="table tabledark chasis table-striped table-hover table-bordered">
                        <tbody class="text-center table_heading text-light">
                            <tr>
                                <td>Engine Model</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Engine_Model']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Engine Type</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                     while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Engine_Type']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Piston Displacement</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Piston_Displacement']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Fuel System</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Fuel_System']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center theading text-light">Chasis</h1>
                    <table class="table tabledark chasis table-striped table-hover table-bordered">
                        <tbody class="text-center table_heading text-light">
                            <tr>
                                <td>Transmission Type</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Transmission_Type']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Front Suspension</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Front_Suspension']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Rear Suspension</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Rear_Suspension']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Fuel Tank Capacity</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                         echo "<td>".$row['Fuel_Tank_Capacity']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-center theading text-light">DIMENSIONS & WEIGHT</h1>
                    <table class="table tabledark chasis table-striped table-hover table-bordered">
                        <tbody class="text-center table_heading text-light">
                            <tr>
                                <td>Overall Length</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Overall_length']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Overall Width</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Overall_Width']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Overall Height</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                          echo "<td>".$row['Overall_Height']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                            <tr>
                                <td>Seating Capacity</td>
                                <td>:</td>
                                <?php
                                  $table_01 = "SELECT * FROM cardetails WHERE ID = 55;";
                                  $newTable_01 = mysqli_query($conn,$table_01);
                                  $finalTable_01 = mysqli_num_rows($newTable_01);
                                  if ($finalTable_01 > 0){
                                      while($row = mysqli_fetch_assoc($newTable_01)){
                                         echo "<td>".$row['Seating_Capacity']."</td>";
                                      }
                                  }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!---------------comment section-------------------->
    <h1 class="display-1 text-muted text-center mt-5 review">Review Car</h1>
    <div class="container mt-5 mb-5">
        <?php echo 
        "<form method='POST' id='comment_form' class='mb-5' action='".setComment($conn)."'>
            <div class='form-group'>
                <input type='hidden' name='uid' value='Anonymous'>
            </div>
            <div class='='form-group'>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            </div>
            <div class='form-group'>
                <textarea name='message' id='message' class='form-control' placeholder='Enter Comment'
                    rows='2'></textarea>
            </div>
            <div class='form-group'>
                <input type='submit' name='commentSubmit' id='submit' class='btn btn-info' value='Submit' />
            </div>
        </form>";
        getComment($conn);
        ?>
    </div>
    <!-----------------footer------------->
    <?php
      include './footer.php';
    ?>
    <!-----------------smoothscroll------------->
    <?php
     include './smoothScroll.php';
    ?>

    <!-------------js files--------------->

</body>

</html>