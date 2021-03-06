<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if(isset($_POST['logout'])){
    $_SESSION = array();
    
    // Destroy the session.
    session_destroy();
    
    // Redirect to Signin form
    
    header("location: index.php?signin");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
<body>
    <div>
        <h3>Hi, <b><?php echo $_SESSION["username"]; ?><br />
        </b></h3>
        <p>You've Successful logged in.</p>
    </div>
    <p>
    <a href="home.php?logout">Log Out</a></button>
    </p>
</body>
</html>
