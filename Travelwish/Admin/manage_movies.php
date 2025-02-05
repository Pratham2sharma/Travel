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
    <title>Manage Movies</title>
</head>
<body>

<!-- Modal for Insert -->
<div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Insert Movies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_movies.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="">Movie Title</label>
            <input type="text" class="form-control" name="movie_title" placeholder="Movie Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description" name="description" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Choose Destinations Images</label>
          <input class="form-control" type="file" name="fileImg[]" accept=".jpg, .jpeg, .png, .webp" multiple required>
        </div>
        <div class="form-group mb-3">
            <label for="">Destination 1</label>
            <input type="text" class="form-control" name="dest_1" placeholder="Destination 1" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description1" name="description1" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city1" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states1" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 2</label>
            <input type="text" class="form-control" name="dest_2" placeholder="Destination 2" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description2" name="description2" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city2" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states2" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 3</label>
            <input type="text" class="form-control" name="dest_3" placeholder="Destination 3" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description3" name="description3" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city3" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states3" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 4</label>
            <input type="text" class="form-control" name="dest_4" placeholder="Destination 4" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description4" name="description4" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city4" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states4" placeholder="State" required>
        </div>
       
 
        <!-----<div class="form-group mb-3">
            <label for="">State</label>
            <select name="states"  class="form-select" required>
	              <option value="AP">Andhra Pradesh</option>
	              <option value="AR">Arunachal Pradesh</option>
	              <option value="AS">Assam</option>
	              <option value="BR">Bihar</option>
	              <option value="CT">Chhattisgarh</option>
	              <option value="GA">Gujarat</option>
	              <option value="HR">Haryana</option>
	              <option value="HP">Himachal Pradesh</option>
	              <option value="JK">Jammu and Kashmir</option>
	              <option value="GA">Goa</option>
	              <option value="JH">Jharkhand</option>
	              <option value="KA">Karnataka</option>
	              <option value="KL">Kerala</option>
	              <option value="MP">Madhya Pradesh</option>
	              <option value="MH">Maharashtra</option>
                      <option value="MN">Manipur</option>
                      <option value="ML">Meghalaya</option>
	              <option value="MZ">Mizoram</option>
	              <option value="NL">Nagaland</option>
	              <option value="OR">Odisha</option>
	              <option value="PB">Punjab</option>
	              <option value="RJ">Rajasthan</option>
	              <option value="SK">Sikkim</option>
	              <option value="TN">Tamil Nadu</option>
	              <option value="TG">Telangana</option>
	              <option value="TR">Tripura</option>
	              <option value="UT">Uttarakhand</option>
	              <option value="UP">Uttar Pradesh</option>
	              <option value="WB">West Bengal</option>
	              <option value="AN">Andaman and Nicobar Islands</option>
	              <option value="CH">Chandigarh</option>
	              <option value="DN">Dadra and Nagar Haveli</option>
	              <option value="DD">Daman and Diu</option>
	              <option value="DL">Delhi</option>
	              <option value="LD">Lakshadweep</option>
	              <option value="PY">Puducherry</option>
              </select>
        </div>---->
        <div class="form-group mb-3">
            <label for="">Budget</label>
            <input type="number" class="form-control" name="budget" placeholder="Budget" required>
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




<!-- Modal for Update -->
<div class="modal fade" id="updatedata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Update Movies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_movies.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <input type="hidden" id="edit_id" name="movie_id">
        <div class="form-group mb-3">
            <label for="">Movie Title</label>
            <input type="text" id="edit_movie_title" class="form-control" name="movie_title" placeholder="Movie Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description" name="description" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        
        <div class="form-group mb-3">
            <label for="">Destination 1</label>
            <input type="text" id="edit_dest1" class="form-control" name="dest_1" placeholder="Destination 1" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description1"  name="description1" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" id="edit_city1" class="form-control" name="city1" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" id="edit_states1" class="form-control" name="states1" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 2</label>
            <input type="text" id="edit_dest2" class="form-control" name="dest_2" placeholder="Destination 2" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description2" name="description2" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" id="edit_city2" class="form-control" name="city2" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" id="edit_states2" class="form-control" name="states2" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 3</label>
            <input type="text" id="edit_dest3" class="form-control" name="dest_3" placeholder="Destination 3" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description3" name="description3" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" id="edit_city3" class="form-control" name="city3" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" id="edit_states3" class="form-control" name="states3" placeholder="State" required>
        </div>

        <div class="form-group mb-3">
            <label for="">Destination 4</label>
            <input type="text" id="edit_dest4" class="form-control" name="dest_4" placeholder="Destination 4" required>
 
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description4" name="description4" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" id="edit_city4" class="form-control" name="city4" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" id="edit_states4" class="form-control" name="states4" placeholder="State" required>
        </div>
       
 
        <div class="form-group mb-3">
            <label for="">Budget</label>
            <input type="number" id="edit_budget" class="form-control" name="budget" placeholder="Budget" required>
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


<!-- Modal for View -->
<div class="modal fade" id="viewdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">View Full Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?php 
                            require '../DB.php';

                            $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

                            $fetch_query = "SELECT * FROM movie";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);
                           
                          
                            while($row = mysqli_fetch_assoc($fetch_query_run))
                            {
                             
                              ?>
  
      <div class="modal-body">
        <div class="view-data">
          <label for="">Movie ID :</label>
          <p><?php echo $row['movie_id'];?></p>
        </div>
        <div class="view-data">
          <label for="">Movie Name :</label>
          <p><?php echo $row['movie_title'];?></p>
        </div>
        <div class="view-data">
          <label for="">Movie Description :</label>
          <p><?php echo $row['description'];?></p>
        </div>
        <div class="view-data">
         <label for="">Images :</label>
              <div class="images">
                  <?php
                     foreach(json_decode($row["fileImg"]) as $image) :
                  ?>

                  <img src="../uploads/<?php echo $image;  ?>" alt="image" width="60" height="60">
                  <?php endforeach; ?>
               </div>                              
        </div>
        <hr>
        <div class="view-data">
          <label for="">Movie Destination 1 :</label>
          <p><?php echo $row['dest_1'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 1 Description :</label>
          <p><?php echo $row['description1'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 1 City :</label>
          <p><?php echo $row['city1'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 1 State:</label>
          <p><?php echo $row['states1'];?></p>
        </div>
       <hr>
        <div class="view-data">
          <label for="">Movie Destination 2 :</label>
          <p><?php echo $row['dest_2'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 2 Description :</label>
          <p><?php echo $row['description2'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 2 City :</label>
          <p><?php echo $row['city2'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 2 State:</label>
          <p><?php echo $row['states2'];?></p>
        </div>
        <hr>
        <div class="view-data">
          <label for="">Movie Destination 3 :</label>
          <p><?php echo $row['dest_3'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 3 Description :</label>
          <p><?php echo $row['description3'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 3 City :</label>
          <p><?php echo $row['city3'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 3 State:</label>
          <p><?php echo $row['states3'];?></p>
        </div>
        <hr>
        <div class="view-data">
          <label for="">Movie Destination 4 :</label>
          <p><?php echo $row['dest_4'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 4 Description :</label>
          <p><?php echo $row['description4'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 4 City :</label>
          <p><?php echo $row['city4'];?></p>
        </div>
        <div class="view-data">
          <label for="">Destination 4 State:</label>
          <p><?php echo $row['states4'];?></p>
        </div>
        <hr>
        <div class="view-data">
          <label for="">Budget:</label>
          <p><?php echo $row['budget'];?></p>
        </div>

      </div>
      <?php
                            }

                          ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

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
                    <h4 class="text-center">Manage Destinations</h4>
                    <a href="dashboard.php"><button type="Submit" class="btn btn-primary">Back To Dashboard </button></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                       Add New Movies
                    </button>
                </div>
                <div class="card-body">
                <table class="table table-striped table-brodered table-danger">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Movie title</th>
                            <th scope="col">description</th>
                            <th scope="col">Images</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            require '../DB.php';

                            $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

                            $fetch_query = "SELECT * FROM movie";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);
                           
                            if(mysqli_num_rows($fetch_query_run) > 0 )
                            {
                            while($row = mysqli_fetch_assoc($fetch_query_run))
                            {
                             
                              ?>
                                        <tr>
                                            <td class="movie_id"><?php echo $row['movie_id']; ?></th>
                                            <td><?php echo $row['movie_title']; ?></td>
                                            <td class="description"><?php echo $row['description']; ?><span id="dots">...</span><span id="more"></span><a onclick="myFunction()" id="myBtn">Read more</a></td>
    
                                            <td class="images">
                                            <?php
                                               foreach(json_decode($row["fileImg"]) as $image) :
                                            ?>

                                           <img src="../uploads/<?php echo $image;  ?>" alt="image" width="60" height="60">
                                           <?php endforeach; ?>    
                                           </td>
                                            </td>

                                            <td><?php echo $row['budget']; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#updatedata">
                                                       Edit
                                                  </a>

                                                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewdata">
                                                       View 
                                                  </a>  
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
// Ajax for delete for Delete
$(document).ready(function () {
   $('.delete_btn').click(function (e) {
     e.preventDefault();
     
     var movie_id = $(this).closest('tr').find('.movie_id').text();
       /* console.log('tile_id'); */

       $.ajax({
         method: "POST",
         url: "insert_movies.php",
         data: {
           'click_delete_btn': true,
           'movie_id': movie_id ,
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
     
     var movie_id  = $(this).closest('tr').find('.movie_id').text();
        console.log(movie_id ); 

       $.ajax({
         method: "POST",
         url: "insert_movies.php",
         data: {
           'click_edit_btn': true,
           'movie_id': movie_id ,
         },
         success: function (response) {
             /*console.log(response);*/

             $.each(response , function(key , value){
                  $('#edit_id').val(value['movie_id']);
                  $('#edit_movie_title').val(value['movie_title']);
                  $('#edit_description').val(value['description']);
                  $('#edit_dest1').val(value['dest_1']);
                  $('#edit_description1').val(value['description1']);
                  $('#edit_city1').val(value['city1']);
                  $('#edit_states1').val(value['states1']);
                  $('#edit_dest2').val(value['dest_2']);
                  $('#edit_description2').val(value['description2']);
                  $('#edit_city2').val(value['city2']);
                  $('#edit_states2').val(value['states2']);
                  $('#edit_dest3').val(value['dest_3']);
                  $('#edit_description3').val(value['description3']);
                  $('#edit_city3').val(value['city3']);
                  $('#edit_states3').val(value['states3']);
                  $('#edit_dest4').val(value['dest_4']);
                  $('#edit_description4').val(value['description4']);
                  $('#edit_city4').val(value['city4']);
                  $('#edit_states4').val(value['states4']);
                  $('#edit_budget').val(value['budget']);
                  
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