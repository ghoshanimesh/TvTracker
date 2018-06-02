<!DOCTYPE html>
<html lang="en">

<head>
   <?php
        $title = "TV Time: Account";
        include_once("includes/head.php");
		if(!isset($_SESSION['email_id'])){
			session_start();
		}
		if(!isset($_SESSION['email_id'])){
			header("Location: login.php");
		}
		if($_SESSION['role']=='admin')
			header("Location: login.php");
	?>        
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        <?php
            include_once("includes/navbar.php");
        ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
            <?php include_once("includes/sidebar.php"); ?>
        
        <!-- partial -->
            <?php include_once("includes/incl-account.php"); ?>
        <!-- content-wrapper ends -->
        
        <!-- partial:partials/_footer.html -->
                <?php include_once("includes/footer.php"); ?>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
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
