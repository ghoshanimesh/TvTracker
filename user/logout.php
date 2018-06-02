
<?php
session_start();
$_SESSION['email_id'] = null;
$_SESSION['role'] = null;
$_SESSION['user_id'] = null;
session_destroy();
header("Location: login.php");
?>
