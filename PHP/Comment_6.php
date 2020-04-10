<?php

  function setComment($conn){
      if (isset($_POST['commentSubmit'])){
          $uid = $_POST['uid'];
          $date = $_POST['date'];
          $message = $_POST['message'];

          $sql = "INSERT INTO comment_6(uid,date,msg) VALUES('$uid','$date','$message');";

          $result = mysqli_query($conn,$sql);
      }
  }

  function getComment($conn){
          $sql = "SELECT * FROM comment_6;";
          $result = mysqli_query($conn,$sql);
          while($row = $result->fetch_assoc()){
            echo "<div class='container comment_box text-left text-uppercase'><p>";
                echo "DATE : ".$row['date']."<br><hr>";
                echo "COMMENT : ".$row['msg']."<br>";
            echo "</p></div>";
          }
  }