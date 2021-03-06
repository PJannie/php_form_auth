
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php

    // Starting Session
    session_start();
    if(isset($_POST['register'])){
   
        $name = $email = $address = $password = "";
        
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }


        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);     
        $password = test_input($_POST["password"]);   

        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

        $_SESSION['userDetail']= array(
            "name" => $name, 
            "email" => $email,  
            "password" => $hashed_password
        );
      
        // session message
        $_SESSION['message'] = "Successful!";
        $_SESSION['msg_type'] = "success";
        header(
            'location: index.php?login'
        );
    }
  
        //  Login Authentication Section

        if(isset($_POST['login'])){

            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }

            // login form data
            $name = test_input($_POST['name']);
            $password = test_input($_POST['password']);
            
            $username = $_POST['user'];
            $hashed_password = $_POST['pass'];
            if(password_verify($password, $hashed_password) && $username === $name){
            
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;                            
            
            // Redirect user to home page
            header("location: home.php");
            } 
            
            else{
                // Display an error message if password is not valid
              echo  $password_err = "<div class='alert alert-danger'>
              The password you entered was not valid!.
              <a href='index.php?signin'>back</a>
              </div>";
              
            }  
        
        }
?>