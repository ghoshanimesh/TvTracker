<?php 
function checkUser(){
	if(!isset($_SESSION['email_id'])){
		die("<p style='color:white'>You have not logged in, please login from <a href='../index.php'>here</a></p>");
	}else{
		$username = $_SESSION['email_id'];
		return $username;
}
}
    function confirmQuery($result){
        global $connection;
        if(!$result){
            die("QUERY FAILED :" .mysqli_error($connection));
        }
    }

?>