<?php
 	session_start();
  //	session_unregister();
 	if(isset($_SESSION['userData'])){
 		session_destroy();
 	}
    header('location:index.php');
?>