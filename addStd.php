  <?php
  
  include "inc/header.php";

?>

  <body>
   
      <!-- form secttion Start -->
      <section>
        
          <div class="container">

            <div class="row">
              
              <div class="col-md-4 offset-md-4">

                <h2>Add Student Data</h2>

                <form action="" method="POST"> 
                  
                  <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" name="name" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" name="email" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Phone No.</label>
                  <input type="text" name="phone" class="form-control" required="required">
                  </div>

                  <div class="form-group">
                  <label>Gender</label>
                  <Select class="form-control" name="gender">
                  <option>Please select the Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </Select>
                  </div>

                  <div class="form-group">
                    <input type="submit" name="register" class="btn btn-primary btn-block" value="Register">
                  </div>

          <!-- form secttion End -->

                  <!-- PHP Post Section -->
                  <?php
                    if( isset( $_POST['register'])){

                    $name     = $_POST['name'];
                    $email    = $_POST['email'];
                    $phone    = $_POST['phone'];
                    $address  = $_POST['address'];
                    $gender   = $_POST['gender'];

                  $sql = "INSERT INTO users(name,email,phone,address, gender, joindate) VALUES('$name ','$email','$phone','$address','$gender',now())";

                  $addStudent = mysqli_query($db,$sql); 

                  if ( $addStudent){

                   header("Location: index.php");   
                    }

                    else{
                      die("MySQLi Connection Failed." . mysqli_error($db));
                    }
                  }


                  ?>

                  <!-- PHP Post Section -->

                </form>

                
              </div>
            </div>

            <div>
              
            </div>
            

          </div>

      </section>


  <?php
  
  include "inc/footer.php";

?>