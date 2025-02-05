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
    <title>Manage Hill Stations</title>
</head>
<body>

<!-- Modal for insert-->
<div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Insert Hill Stations</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_hillstation.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="">Destination Title</label>
            <input type="text" class="form-control" name="dest_name" placeholder="Destination Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="description" name="description" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">Tips</label>
            <input type="text" class="form-control" name="tip1" placeholder="Tip 1" required>
            <input type="text" class="form-control" name="tip2" placeholder="Tip 2" required>
            <input type="text" class="form-control" name="tip3" placeholder="Tip 3" required>
            <input type="text" class="form-control" name="tip4" placeholder="Tip 4" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Best Time To Visit</label>
            <input type="text" class="form-control" name="best_time" placeholder="Best Time to Visit" required>
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Choose Destinations Images</label>
          <input class="form-control" type="file" name="fileImg[]" accept=".jpg, .jpeg, .png, .webp" multiple required>
        </div>
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states" placeholder="State" required>
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

<!-- Modal for update-->
<div class="modal fade" id="updatedata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="insertdataLabel">Insert Hill Stations</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="insert_hillstation.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      <input type="hidden" id="edit_id" name="hill_station_id">
        <div class="form-group mb-3">
            <label for="">Destination Title</label>
            <input type="text" class="form-control" id="edit_dest_name" name="dest_name" placeholder="Destination Title" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Description</label>
            <textarea id="edit_description" name="description" rows="4" cols="50" class="form-control" placeholder="description"></textarea>
            
        </div>
        <div class="form-group mb-3">
            <label for="">Tips</label>
            <input type="text" class="form-control" name="tip1" id="edit_tip1" placeholder="Tip 1" required>
            <input type="text" class="form-control" name="tip2" id="edit_tip2" placeholder="Tip 2" required>
            <input type="text" class="form-control" name="tip3" id="edit_tip3" placeholder="Tip 3" required>
            <input type="text" class="form-control" name="tip4" id="edit_tip4" placeholder="Tip 4" required>
        </div>
        <div class="form-group mb-3">
            <label for="">Best Time To Visit</label>
            <input type="text" class="form-control" name="best_time" id="edit_best_time" placeholder="Best Time to Visit" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="">City</label>
            <input type="text" class="form-control" name="city" id="edit_city" placeholder="City" required>
        </div>
        <div class="form-group mb-3">
            <label for="">State</label>
            <input type="text" class="form-control" name="states" id="edit_states" placeholder="State" required>
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
            <input type="number" class="form-control" name="budget" id="edit_budget" placeholder="Budget" required>
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
                    <h4 class="text-center">Manage Hill Stations</h4>
                    <a href="dashboard.php"><button type="Submit" class="btn btn-primary">Back To Dashboard </button></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                       Add New Hill Station
                    </button>
                </div>
                <div class="card-body">
                <table class="table table-striped table-brodered table-danger">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Place title</th>
                            <th scope="col">description</th>
                            <th scope="col">Tips</th>
                            <th scope="col">Time to Visit</th>
                            <th scope="col">Images</th>
                            <th scope="col">city</th>
                            <th scope="col">state</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                            require '../DB.php';

                            $connection = mysqli_connect("$servername" , "$username", "$password" , "$dbname");

                            $fetch_query = "SELECT * FROM hillstation";
                            $fetch_query_run = mysqli_query($connection , $fetch_query);
                           
                            if(mysqli_num_rows($fetch_query_run) > 0 )
                            {
                            while($row = mysqli_fetch_assoc($fetch_query_run))
                            {
                             
                              ?>
                                        <tr>
                                            <td class="hill_station_id"><?php echo $row['hill_station_id']; ?></th>
                                            <td><?php echo $row['dest_name']; ?></td>
                                            <td class="description"><?php echo $row['description']; ?><span id="dots">...</span><span id="more"></span><a onclick="myFunction()" id="myBtn">Read more</a></td>
                                            <td class="tips">
                                                <ul>
                                                    <li><?php echo $row['tip1']; ?></li>
                                                    <li><?php echo $row['tip2']; ?></li>
                                                    <li><?php echo $row['tip3']; ?></li>
                                                    <li><?php echo $row['tip4']; ?></li>
                                               </ul>
                                            </td>
                                            <td><?php echo $row['best_time']; ?></td>
                                            <td class="images">
                                            <?php
                                               foreach(json_decode($row["fileImg"]) as $image) :
                                            ?>

                                           <img src="../uploads/<?php echo $image;  ?>" alt="image" width="60" height="60">
                                           <?php endforeach; ?>    
                                           </td>
                                            </td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['states']; ?></td>
                                            <td><?php echo $row['budget']; ?></td>
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
     
     var hill_station_id = $(this).closest('tr').find('.hill_station_id').text();
       /* console.log('tile_id'); */

       $.ajax({
         method: "POST",
         url: "insert_hillstation.php",
         data: {
           'click_delete_btn': true,
           'hill_station_id': hill_station_id,
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
     
     var hill_station_id = $(this).closest('tr').find('.hill_station_id').text();
        console.log(hill_station_id); 

       $.ajax({
         method: "POST",
         url: "insert_hillstation.php",
         data: {
           'click_edit_btn': true,
           'hill_station_id': hill_station_id,
         },
         success: function (response) {
             /*console.log(response);*/

             $.each(response , function(key , value){
                  $('#edit_id').val(value['hill_station_id']);
                  $('#edit_dest_name').val(value['dest_name']);
                  $('#edit_description').val(value['description']);
                  $('#edit_tip1').val(value['tip1']);
                  $('#edit_tip2').val(value['tip2']);
                  $('#edit_tip3').val(value['tip3']);
                  $('#edit_tip4').val(value['tip4']);
                  $('#edit_best_time').val(value['best_time']);
                  /*$('#edit_fileImg').val(value['fileImg']);*/
                  $('#edit_city').val(value['city']);
                  $('#edit_states').val(value['states']);
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