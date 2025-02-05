<?php

  session_start();
  require '../DB.php';

  $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

 



  /* Delete Data */

  if(isset($_POST['click_delete_btn']))
  {
    $id = $_POST['user_id'];

    $delete_query = "DELETE FROM user_detail WHERE user_id='$id'";
    $connection = mysqli_connect("localhost" , "root", "" , "travelwish");
    $delete_query_run = mysqli_query($connection, $delete_query);

    if($delete_query_run)
    {
        echo "Data Deleted Successfully";
    }
    else
    {
        echo "Data Deletion Failed";
    }
  }
?>