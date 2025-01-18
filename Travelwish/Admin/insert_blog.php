<?php

  session_start();
  require '../DB.php';

  $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

  if(isset($_POST["save_data"]))
  {
    $blog_title = $_POST["blog_title"];
    $content = $_POST["content"];

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



      // Step 4: Prepare the SQL query
      $stmt = $connection->prepare("INSERT INTO blog(blog_title , content , fileImg ) 
      VALUES (?, ?, ?)");
 
     if ($stmt === false) {
         die("Error in preparing the SQL statement: " . $connection->error);
     }
 
      $stmt->bind_param("sss", $blog_title  , $content , $filesArray );
 
    
 
      // Step 5: Execute the query
     if ($stmt->execute()) {
         echo "Record successfully inserted!";
         header("location: manage_blogs.php");
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
    $id = $_POST['blog_id'];
    $arrayresult =  [];

    

    $fetch_query = "SELECT * FROM blog WHERE blog_id='$id'";
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
    $id = $_POST['blog_id'];
    $blog_title = $_POST["blog_title"];
    $content = $_POST["content"];


    

    $update_query = "UPDATE  blog SET blog_title='$blog_title', content='$content' WHERE blog_id='$id'";
    $update_query_run = mysqli_query($connection , $update_query);

    if($update_query_run)
    {
        $_SESSION["status"] = "Data Updated Succesfully";
        header("location: manage_blogs.php");
    }
    else
    {
        $_SESSION["status"] = "Data Updation Failed";
        header("location: manage_blogs.php");
    }
  }


  /* Delete Data */

  if(isset($_POST['click_delete_btn']))
  {
    $id = $_POST['blog_id'];

    $delete_query = "DELETE FROM blog WHERE blog_id='$id'";
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