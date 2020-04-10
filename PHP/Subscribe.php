<?php
   
   include './Connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['email'])){
            $email = "Missing";
            header('Location: ../DIST/index.php');
        }
        else{
            $email = $_POST['email'];
            $sql = "INSERT INTO subscription(EMAIL) VALUES('$email');";
            $result = mysqli_query($conn,$sql); 
            header('Location: ./Subscribed.php');
        }
  }
  
  