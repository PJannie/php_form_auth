<?php  include_once 'operation.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>PHP FORM</title>
</head>
<body>
    
            <?php

            $user = $pass = "";
            // success message and data display of user 
            if (isset($_GET['login'])): ?>

            
                
            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php
                
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                   $user =  $_SESSION['userDetail']['name'];
                   $pass = $_SESSION['userDetail']['password'];
                   
                ?>
            </div>
            
            <div class="row justify-content-center mt-5">
                
                <form action="operation.php" method="post" enctype="multipart/form-data">
                    <h2>Login</h2>

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" class="form-control" required>
                        <!-- username -->
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control" required>
                        <!-- password -->
                    </div>
                    <input type="hidden" name="user" value="<?= $user;?>">
                    <input type="hidden" name="pass" value="<?= $pass; ?>">
                    <div class="form-group">
                        <button type="submit" name="login">Login</button>
                        <p>Don't have an account? <a href="index.php">SignUp here</a>.</p>
                    </div>
                </form>
       
            </div>

            <?php elseif(isset($_GET['signin'])): ?>
                <div class="row justify-content-center mt-5">
                
                    <form action="operation.php" method="post" enctype="multipart/form-data">
                        <h2>Login</h2>

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="name" class="form-control" required>
                            <!-- username -->
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="password" class="form-control" required>
                            <!-- password -->
                        </div>
                        <input type="hidden" name="user" value="<?= $user;?>">
                        <input type="hidden" name="pass" value="<?= $pass; ?>">
                        <div class="form-group">
                            <button type="submit" name="login">Login</button>
                            <p>Don't have an account? <a href="index.php">SignUp</a></p>
                        </div>
                    </form>
       
                 </div>

            <?php else: ?>
            <div class="row justify-content-center mt-5">
                <form action="operation.php" method="post" enctype="multipart/form-data">
                    <h2>SignUp</h2>
                    <p>Create a new account.</p>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="name" class="form-control" required>
                        <!-- name -->
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <!-- email -->
                    </div>

                    
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control" required>
                        <!-- password -->
                    </div>

                    <div class="form-group">
                        <input type="submit"  name="register" value="SignUp">
                        <input type="reset" value="Reset">    
                    
                        <p>Already have an account? <a href="index.php?signin">Login here</a>.</p>  
                    </div>
                </form>
                    
            </div>
        <?php endif; ?>
           
    </div>
</body>
</html>
