<!DOCTYPE html>
<html lang="en">

<head>
   <?php
        $title = "TV Time Admin: Register";
        include_once("includes/head.php");
    ?> 
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<!-- INDEX PAGE -->
<!DOCTYPE html>
<html lang="en">

<?php 
	$title = "Register Yourself!";
	include_once("includes/db.php");
	include_once("includes/functions.php");
	
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		//cleaning all inputs
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		
		$query = "SELECT * FROM user WHERE email_id='$username'";
		$check_user_query = mysqli_query($connection, $query);

		if($row = mysqli_fetch_assoc($check_user_query)){
			echo " UserName already Taken. Try something else";
		}else{
			$current_date=date("Y-m-d h:i:sa");
			$query = "INSERT INTO user(email_id, password, user_image, role, created_at, created_by) VALUES ('$username', '$password', '', 'user', '$current_date', 1)";
			
			$insert_user_query = mysqli_query($connection, $query);
			confirmQuery($insert_user_query);
			echo "User Registered Successfully!";
			
		}

	}
?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row login">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center text-uppercase mb-3">Register</h3>
              <form method="POST" id="registerUser">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input" id="username" name="username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input" id="password" name="password">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control p_input" id="user_image" name="user_image">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between pull-right">
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" name="register">Register</button>
                </div>
                <div class="d-flex">
                  <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook
                  </button>
                  <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google +
                  </button>
                </div>
                <p class="sign-up text-center">Already have an Account?<a href="login.php"> Log In</a></p>
                <p class="terms">By creating an account you are accepting our<a href=""> Terms &amp; Conditions</a></p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
