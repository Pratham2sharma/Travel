<?php

  session_start();
  require '../DB.php';

  file_put_contents("debug.log", print_r($_POST, true), FILE_APPEND);

  $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

  //for insert
  if(isset($_POST["save_data"]))
  {
    $movie_title = $_POST["movie_title"];
    $description = $_POST["description"];
    $dest1 = $_POST["dest_1"];
    $description1 = $_POST["description1"];
    $city1 = $_POST["city1"];
    $state1 = $_POST["states1"];
    $dest2 = $_POST["dest_2"];
    $description2 = $_POST["description2"];
    $city2 = $_POST["city2"];
    $state2 = $_POST["states2"];
    $dest3 = $_POST["dest_3"];
    $description3 = $_POST["description3"];
    $city3 = $_POST["city3"];
    $state3 = $_POST["states3"];
    $dest4 = $_POST["dest_4"];
    $description4 = $_POST["description4"];
    $city4 = $_POST["city4"];
    $state4 = $_POST["states4"];
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
    $budget = $_POST["budget"];

    // Step 4: Prepare the SQL query
    $stmt = $connection->prepare("INSERT INTO movie(movie_title , description ,dest_1 , description1 , city1 , states1 ,dest_2 , description2 , city2 , states2 , dest_3 , description3 , city3 , states3 ,dest_4 , description4 , city4 , states4 , fileImg , budget) 
    VALUES (?, ?, ?,?,?,?,?,?,?,?,?,?, ? , ? ,?,?,?,?,?,?)");

   if ($stmt === false) {
       die("Error in preparing the SQL statement: " . $connection->error);
   }

    $stmt->bind_param("sssssssssssssssssssi", $movie_title  , $description ,$dest1 , $description1 , $city1 ,$state1 , $dest2 , $description2 , $city2 , $state2 , $dest3 , $description3 , $city3 , $state3 ,$dest4 , $description4 , $city4 , $state4 ,   $filesArray , $budget);

  

    // Step 5: Execute the query
   if ($stmt->execute()) {
       echo "Record successfully inserted!";
       header("location: manage_movies.php");
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
    $id = $_POST['movie_id'];
    $arrayresult =  [];

    

    $fetch_query = "SELECT * FROM movie WHERE movie_id='$id'";
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
    $id = $_POST['movie_id']; 
    $movie_title = $_POST["movie_title"];
    $description = $_POST["description"];
    $dest1 = $_POST["dest_1"];
    $description1 = $_POST["description1"];
    $city1 = $_POST["city1"];
    $state1 = $_POST["states1"];
    $dest2 = $_POST["dest_2"];
    $description2 = $_POST["description2"];
    $city2 = $_POST["city2"];
    $state2 = $_POST["states2"];
    $dest3 = $_POST["dest_3"];
    $description3 = $_POST["description3"];
    $city3 = $_POST["city3"];
    $state3 = $_POST["states3"];
    $dest4 = $_POST["dest_4"];
    $description4 = $_POST["description4"];
    $city4 = $_POST["city4"];
    $state4 = $_POST["states4"];
    $budget = $_POST["budget"];


   

    $stmt = $connection->prepare("UPDATE movie SET movie_title=?, description=?, dest_1=? , description1=?, city1=?, states1=?,dest_2=? , description2=?, city2=?, states2=?, dest_3=? , description3=?, city3=?, states3=?,dest_4=? , description4=?, city4=?, states4=?, budget=? WHERE movie_id='$id'");
    $stmt->bind_param("ssssssssssssssssssi", $movie_title  , $description , $dest1, $description1 , $city1 , $state1,  $dest2, $description2 , $city2 , $state2, $dest3, $description3 , $city3 , $state3 , $dest4, $description4 , $city4 , $state4 , $budget);

    if ($stmt->execute()) {
      $_SESSION["status"] = "Data Updated Succesfully";
      header("location: manage_movies.php");
  } else {
    $_SESSION["status"] = "Data Updation failed";
      echo "Error: " . $stmt->error;

  }

   // Step 6: Close the connection
   $stmt->close();
   $conn->close();
  }




  /* Delete Data */

  if(isset($_POST['click_delete_btn']))
  {
    $id = $_POST['movie_id'];

    $delete_query = "DELETE FROM movie WHERE movie_id='$id'";
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