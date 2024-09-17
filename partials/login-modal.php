<<<<<<< HEAD
<?php
  include 'DB.php';

  if(isset($_POST['loginsubmit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection,  $_POST['password']);


    $email_search = "SELECT * FROM signup WHERE email = '$email'";
    $query = mysqli_query($connection,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass ['Pasword'];

      $pass_decode = password_verify($password,$db_pass);

      if($pass_decode){
=======

<?php

include 'DB.php';

if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string( $connection, $_POST['email']);
  $password = mysqli_real_escape_string( $connection, $_POST['password']);

  $email_search = "SELECT * FROM signup WHERE email= '$email'";
  $query = mysqli_query($connection,$email_search);

  $email_count = mysqli_num_rows($query);
  
  if($email_count>0){
    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['pasword'];

    $pass_decode = password_verify($password,$db_pass);

    if($pass_decode){
>>>>>>> 382a450c7e4d2d204d67a274e88899c8a92e6a23
        ?>
        <script>
          alert("Login succesfull");
        </script>
        <?php
<<<<<<< HEAD
      }
      else{
        ?>
        <script>
          alert("Password is Incorrect");
        </script>
        <?php
      }
=======
>>>>>>> 382a450c7e4d2d204d67a274e88899c8a92e6a23
    }
    else{
      ?>
      <script>
<<<<<<< HEAD
        alert("Invalid email");
      </script>
      <?php
    }

  }
=======
        alert("password Incorrect")
      </script>
      <?php
    }
  }
  else{
    ?>
    <script>
      alert("Invalid email");
    </script>
    <?php
  }
}






>>>>>>> 382a450c7e4d2d204d67a274e88899c8a92e6a23
?>









<<<<<<< HEAD
=======

>>>>>>> 382a450c7e4d2d204d67a274e88899c8a92e6a23
<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
         <!-- Login form  -->
      <form action="index.php" method="POST" class="login-container">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="login-close"></button>
                <h1>Login</h1>
                <div class="login-inputs">
<<<<<<< HEAD
                    <input type="email" name="email" id="login-email" placeholder="Enter your email" require>
                    <input type="password" name="password" id="login-pass" placeholder="Enter your password" required>
                    <button name="loginsubmit" id="loginsubmit">Submit</button>
=======
                    <input type="email" name="email" id="login-email" placeholder="Enter your email">
                    <input type="password" name="password" id="login-pass" placeholder="Enter your password">
                    <button name="submit">Login</button>
>>>>>>> 382a450c7e4d2d204d67a274e88899c8a92e6a23
                    <p>Don't have an account? <span>Signup</span></p>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>