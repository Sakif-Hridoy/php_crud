<?php

	include "inc/header.php";

?>

<?php

if (isset($_GET['update'])){

		$theUpdateId = $_GET['update'];
			// For the specific data
		$sql = "SELECT * FROM users WHERE id = '$theUpdateId' ";
		$allStd  = mysqli_query($db, $sql);

		while($row = mysqli_fetch_assoc($allStd)){
        $id       = $row['id'];
        $name     = $row['name'];
        $email    = $row['email'];
        $phone    = $row['phone'];
        $gender   = $row['gender'];
        $address  = $row['address'];
        $joindate = $row['joindate'];
        ?>

        <section>
        
          <div class="container">

            <div class="row">
              
              <div class="col-md-4 offset-md-4">

                <h2>Update Student Information</h2>

                <form action="" method="POST"> 
                  
                  <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="name" class="form-control" required="required" value="<?php echo $name; ?>">
                  </div>

                  <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="email" class="form-control" required="required"
                  value="<?php echo $email; ?>">
                  </div>

                  <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required="required" 
                  
                  value="<?php echo $address; ?>">
                  </div>

                   <div class="form-group">
                  <label>Gender</label>
                  <Select class="form-control" name="gender">
                  <option>Please select the Gender</option>
                  <option value="1"  <?php if( $gender == 1){echo 'selected';} ?>> Male</option>
                  <option value="2"  <?php if( $gender == 2){echo 'selected';} ?>>Female</option>
                </Select>
                  </div>


                  <div class="form-group">
                  <label>Phone No.</label>
                  <input type="text" name="phone" class="form-control" required="required"
                  value="<?php echo $phone; ?>">
                  </div>

                  <div class="form-group">
                    <input type="submit" name="updateInfo" class="btn btn-primary btn-block" value="Save Changes">
                  </div>

          <!-- form secttion End -->

                 

                  <!-- PHP Post Section -->

                </form>

                
              </div>
            </div>

            <div>
              
            </div>
            

          </div>

      </section>
        
<?php   }

}
?>

<?php

 //update the dataset into the db

    if ( isset($_POST['updateInfo']) ){
      $name     = $_POST['name'];
      $email    = $_POST['email'];
      $phone    = $_POST['phone'];
      $address  = $_POST['address'];
      $gender   = $_POST['gender'];

      // SQL FOR UPDATE
      $sql = "UPDATE users SET name='$name', email='$email',phone='$phone',address='$address', gender = '$gender' WHERE id = '$theUpdateId' ";
      $updateUserInfo = mysqli_query($db, $sql);

      if ( $updateUserInfo ){
        header("Location: index.php");
      }
      else{
        die("Operation Faild. " . mysqli_error($db));
      }
    
    }

?>

<?php

	include "inc/footer.php";

?>