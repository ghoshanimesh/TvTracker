<!DOCTYPE html>
<html lang="en">

<head>
   <?php
        $title = "TV Time Admin: Login";
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
              <h3 class="card-title text-center text-uppercase mb-3">Login</h3>
              <form>
                <div class="form-group">
                  <label>Username or email *</label>
                  <input type="text" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="text" class="form-control p_input">
                </div> 
                <div class="form-group d-flex align-items-center justify-content-between pull-right">
                  <a href="" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex">
                  <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook
                  </button>
                  <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google +
                  </button>
                </div>
                <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
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
  <!-- Plugin js for this page-->
  <script src="plugins/chart.js/Chart.js"></script>
  <script src="assets/js/chart.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
