
<!-- signup-form-php  -->
<?php
  
  include "DB.php";
  if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connection, $_POST['fullname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $secure_password = password_hash($password,PASSWORD_BCRYPT);

    $insertquery = "INSERT INTO signup(Name,Email,Pasword)VALUES('$name','$email','$secure_password')";
    $query = mysqli_query($connection,$insertquery);

    if($query){
      ?>
      <script>
        alert("Data Inserted Successfully");
      </script>
      <?php
    }
    else{
      ?>
      <script>
        alert("Data Is Not Inserted ");
      </script>
      <?php
    } 
  
  } 





?> 






<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
         <!-- Signup Modal form  -->       
         <div class="signup-container">
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="signup-close"></button>
                <h1>Sign Up</h1>
                <form action="index.php" method="POST" class="signup-form-content">
                    <input type="text" name="fullname" placeholder="Full name" required>
                    <input type="email" name="email"  placeholder="Enter your email" required>
                    <input type="password" name="password" id="" placeholder="Enter your password" required>
                    <div class="signup-checkbox">
                    <input type="checkbox" name="" id="checkbox">  
                     <p>Do you want to get daily weekly notifications about our new stationery items ?</p>   
                    </div>
                    <input type="submit" value="Sign Up" name="submit" class="signup-submit">
                </form>
        </div>
      </div>
    </div>
  </div>
</div>