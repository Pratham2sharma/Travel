<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <title>Manage Blogs</title>
</head>
<body>

<!-- Modal for insert -->
<div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Insert Blogs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_blog.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        
        <div class="form-group mb-3">
            <label for="">Blog Title</label>
            <input type="text" class="form-control" name="blog_title" placeholder="Blog Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Blog Content</label>
            <textarea id="description" name="content" rows="4" cols="50" class="form-control" placeholder="Content"></textarea>
            
        </div>
        
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Choose Images for Blogs</label>
          <input class="form-control" type="file" name="fileImg[]" accept=".jpg, .jpeg, .png, .webp" multiple required>
        </div>
       
       
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary" name="save_data">save data</button>
      </div>
</form>
    </div>
  </div>
</div>

<!-- Modal for update -->
<div class="modal fade" id="updatedata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Update Blogs</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_blog.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <input type="hidden" id="edit_id" name="blog_id">
        <div class="form-group mb-3">
            <label for="">Blog Title</label>
            <input type="text" class="form-control" id="edit_blog_title" name="blog_title" placeholder="Blog Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Blog Content</label>
            <textarea id="edit_content" name="content" rows="4" cols="50" class="form-control" placeholder="Content"></textarea>
            
        </div>
        
       
       
       
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary" name="update_data">save data</button>
      </div>
</form>
    </div>
  </div>
</div>


<!---------Data Tables -------->
<div class="container-place">
    <div class="row justify-content-center">
        <div class="col-md-12">
       
        <?php 
            if(isset($_SESSION['status']) && $_SESSION['status'] != '') 
            {
              
              ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hey !</strong> <?php echo $_SESSION['status']; ?>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              unset($_SESSION['status']);
            }
          ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Blogs</h4>
                    <a href="dashboard.php"><button type="Submit" class="btn btn-primary">Back To Dashboard </button></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                       Add New Blog
                    </button>
                </div>
                <div class="card-body">
                <table class="table table-striped table-brodered table-danger">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Blog title</th>
                            <th scope="col">Content</th>
                        
                            <th scope="col">Images</th>
                          
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            require '../DB.php';

                            $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

                            $fetch_query = "SELECT * FROM blog";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);
                           
                            if(mysqli_num_rows($fetch_query_run) > 0 )
                            {
                            while($row = mysqli_fetch_assoc($fetch_query_run))
                            {
                             
                              ?>
                                        <tr>
                                            <td class="blog_id"><?php echo $row['blog_id']; ?></th>
                                            <td><?php echo $row['blog_title']; ?></td>
                                            <td class="description"><?php echo $row['content']; ?><span id="dots">...</span><span id="more"></span><a onclick="myFunction()" id="myBtn">Read more</a></td>
                                            
                                            <td class="images">
                                            <?php
                                               foreach(json_decode($row["fileImg"]) as $image) :
                                            ?>

                                           <img src="../uploads/<?php echo $image;  ?>" alt="image" width="60" height="60">
                                           <?php endforeach; ?>    
                                           </td>
                                            </td>
                                            
                                            <td>
                                                <a href="#" class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#updatedata">Edit</a>
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
     
     var blog_id = $(this).closest('tr').find('.blog_id').text();
       /* console.log('tile_id'); */

       $.ajax({
         method: "POST",
         url: "insert_blog.php",
         data: {
           'click_delete_btn': true,
           'blog_id': blog_id,
         },
         success: function (response) {
             console.log(response);
             window.location.reload();
         }
       })
   });
 });
 

 // Ajax for Update
$(document).ready(function () {
   $('.edit-btn').click(function (e) {
     e.preventDefault();
     
     var blog_id = $(this).closest('tr').find('.blog_id').text();
        console.log(blog_id); 

       $.ajax({
         method: "POST",
         url: "insert_blog.php",
         data: {
           'click_edit_btn': true,
           'blog_id': blog_id,
         },
         success: function (response) {
             /*console.log(response);*/

             $.each(response , function(key , value){
                  $('#edit_id').val(value['blog_id']);
                  $('#edit_blog_title').val(value['blog_title']);
                  $('#edit_content').val(value['content']);
                  
                 
                  
             });
             $('#updatedata').modal('show');
         }
       })
   });
 });
 
</script>

  <script src="admin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>