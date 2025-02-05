<?php

  session_start();
  require 'DB.php';

     $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

  if(isset($_POST["save_data"]))
  {
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
  
 

    $insert_query = "INSERT INTO user_detail(uname, email, password, cpassword) VALUES ('$uname' , '$email' , '$password' , ' $cpassword')";
    $insert_query_run = mysqli_query($connection , $insert_query);

    if($insert_query_run )
    {
        $_SESSION["status"] = "Data Inserted Succesfully";
        header("location: signup.php");
    }
    else
    {
        $_SESSION["status"] = "Data Insertion Failed";
        header("location: signup.php");
    }
  }



  
?>