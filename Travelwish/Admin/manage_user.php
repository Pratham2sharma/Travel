<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Manage Users</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
       
              
            
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey !</strong>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
             
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Users</h4>
                    <a href="dashboard.php"><button type="Submit" class="btn btn-primary">Back To Dashboard </button></a>
                   
                </div>
                <div class="card-body">
                <table class="table table-striped table-brodered table-danger">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">User Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            require '../DB.php';

                            $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

                            $fetch_query = "SELECT * FROM user_detail";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);
                           
                            if(mysqli_num_rows($fetch_query_run) > 0 )
                            {
                            while($row = mysqli_fetch_assoc($fetch_query_run))
                            {
                             
                              ?>
                                        <tr>
                                            <td class="user_id"><?php echo $row['user_id']; ?></th>
                                            <td><?php echo $row['uname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                              
                                                <a href="#" class="btn btn-danger delete_btn">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                }
                            }
                            else
                            {
                              ?>
                               <tr colspan="4">NO RECORDS FOUND</tr>
                              <?php
                            }

                          ?>
                                      

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
  </div>

  <script>

$(document).ready(function () {
   $('.delete_btn').click(function (e) {
     e.preventDefault();
     
     var user_id = $(this).closest('tr').find('.user_id').text();
       /* console.log('tile_id'); */

       $.ajax({
         method: "POST",
         url: "delete_user.php",
         data: {
           'click_delete_btn': true,
           'user_id': user_id,
         },
         success: function (response) {
             console.log(response);
             window.location.reload();
         }
       })
   });
 });
 
 
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>