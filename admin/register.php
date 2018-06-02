<!DOCTYPE html>
<html lang="en">

<head>
   <?php
        $title = "TV Time Admin: Register";
        include_once("includes/head.php");
    ?> 
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center text-uppercase mb-3">Register</h3>
              <form>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between pull-right">
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
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
