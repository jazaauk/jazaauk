<?php 
ob_start();
session_start(); 
include 'dbconn.php'; 

// Get the data collected from the user 
   $username = $_POST["username"]; 
   $password=md5(strip_tags($_POST['password'])); 
//Check for errors 
   if (empty($username) or empty($password ))  
   { 
       $_SESSION["message"] = "Must enter Username and Password " ; 
       header("Location: login.php"); //This sets the redirection information 
       exit; //Ends the script and redirects to above 
   } 
  //NEED MORE SECURITY - ESCAPE BAD CHARACTERS AND ENCRYPT PASSWORD - SEE ADVANCED. 
   
  //Create and run a query with the given details  
   $query = "SELECT * FROM login1 WHERE username= '$username' AND  password = '$password' ";  
   $result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
   
  // see if any rows were returned  
   if ($row = mysql_fetch_array($result)) { //Then we have a successful login  
    //Create a session variable to store the user name. 
     $_SESSION["authenticatedUser"] = $username; 
    //We could also use information drawn from the database eg ID 
     $_SESSION['userid']= $row['userid']; 
     // Relocate to the logged-in page 
     header("Location: user.php"); 
   } 
   else { //Login was unsuccesful 
       $_SESSION["message"] = "Could not login as $username " ; 
       header("Location: login.php"); //Go back to the login pages 
    } //End else     
?> 