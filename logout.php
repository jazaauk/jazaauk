<?php 
 ob_start();
  session_start(); 

  $username = $_SESSION["username"]; 
  $_SESSION["message"] =  "User $username has logged out"; 
  
  session_unregister("username"); 

  // Relocate back to the login page 
  header("Location: index.php"); 
  //session_destroy();    
  
?>  