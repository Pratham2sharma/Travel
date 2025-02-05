<?php

  session_start();
  require '../DB.php';

  

  $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

  //for insert
  if(isset($_POST["save_data"]))
  {
    $place_name = $_POST["dest_name"];
    $description = $_POST["description"];
    $tip1 = $_POST["tip1"];
    $tip2 = $_POST["tip2"];
    $tip3 = $_POST["tip3"];
    $tip4 = $_POST["tip4"];
    $time_visit = $_POST["best_time"];
    $totalFiles = count($_FILES["fileImg"]['name']);
    $filesArray = array();

    for($i = 0; $i < $totalFiles; $i++){
     
      $imageName = $_FILES["fileImg"]["name"][$i];
      $tempName = $_FILES["fileImg"]["tmp_name"][$i];

      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));

      $newImageName = uniqid() . '.' . $imageExtension;

      move_uploaded_file($tempName, '../uploads/' . $newImageName);
      $filesArray[] = $newImageName;
    }
    
    $filesArray = json_encode($filesArray);
    $city = $_POST["city"];
    $state = $_POST["states"];
    $budget = $_POST["budget"];

    // Step 4: Prepare the SQL query
    $stmt = $connection->prepare("INSERT INTO destination(dest_name , description , tip1 , tip2 , tip3 , tip4 , best_time , fileImg ,city , states, budget) 
    VALUES (?, ?, ?,?,?,?,?,?,?,?,?)");

   if ($stmt === false) {
       die("Error in preparing the SQL statement: " . $connection->error);
   }

    $stmt->bind_param("ssssssssssi", $place_name  , $description , $tip1, $tip2 , $tip3 , $tip4, $time_visit , $filesArray ,$city , $state , $budget);

  

    // Step 5: Execute the query
   if ($stmt->execute()) {
       echo "Record successfully inserted!";
       header("location: manage_destination.php");
   } else {
       echo "Error: " . $stmt->error;

   }

  

   // Step 6: Close the connection
   $stmt->close();
   $conn->close();
  }


  //for Edit
  if(isset($_POST["click_edit_btn"]))
  {
    $id = $_POST['place_id'];
    $arrayresult =  [];

    

    $fetch_query = "SELECT * FROM destination WHERE place_id='$id'";
    $fetch_query_run = mysqli_query($connection , $fetch_query);

    if(mysqli_num_rows($fetch_query_run) > 0){
       while($row = mysqli_fetch_array($fetch_query_run)){
          array_push($arrayresult, $row);
          header('content-type: application/json');
          echo json_encode($arrayresult);
       }
    }
    else{
      echo '<h4>No Record Found</h4>';
    }
  }

  //for update
  if(isset($_POST["update_data"]))
  {
    $id = $_POST['place_id']; 
    $place_name = $_POST["dest_name"];
    $description = $_POST["description"];
    $tip1 = $_POST["tip1"];
    $tip2 = $_POST["tip2"];
    $tip3 = $_POST["tip3"];
    $tip4 = $_POST["tip4"];
    $time_visit = $_POST["best_time"];
   
    $city = $_POST["city"];
    $state = $_POST["states"];
    $budget = $_POST["budget"];


    

    $update_query = "UPDATE  destination SET dest_name='$place_name', description='$description', tip1='$tip1', tip2='$tip2', tip3='$tip3', tip4='$tip4', best_time='$time_visit', city='$city', states='$state', budget='$budget' WHERE place_id='$id'";
    $update_query_run = mysqli_query($connection , $update_query);

    if($update_query_run)
    {
        $_SESSION["status"] = "Data Updated Succesfully";
        header("location: manage_destination.php");
    }
    else
    {
        $_SESSION["status"] = "Data Updation Failed";
        header("location: manage_destination.php");
    }
  }




  /* Delete Data */

  if(isset($_POST['click_delete_btn']))
  {
    $id = $_POST['place_id'];

    $delete_query = "DELETE FROM destination WHERE place_id='$id'";
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