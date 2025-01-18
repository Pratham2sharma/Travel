<?php 
session_start();
if (isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit;
}     
    include('DB.php');  

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    $username = $_POST['uname'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select * from user_detail where uname = '$username' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            header("location: index.php");
        }  
        else{  
            alert("Invalid Info!");
        }    
 }        
?>  