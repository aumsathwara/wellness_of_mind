<?php
//handling login 
session_start();

//check if user is already logged in

if(isset($_SESSION['username'])){
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

//if request method is post

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
        $err = "Please enter usrname + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

    }
}
if(empty($err)){
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s" , $param_username);
    $param_username = $username;
   

    if(mysqli_stmt_execute($stmt)){
        
        mysqli_stmt_store_result($stmt);
        
        if(mysqli_stmt_num_rows($stmt) == 1){
            
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            
            if(mysqli_stmt_fetch($stmt)){
             
                if(password_verify($password, $hashed_password)){
                    //this means pswd is correct 
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["id"] = $id;
                    $_SESSION["loggedin"] = true;
                    
                    //redirect user to welcome page
                    header("location: welcome.php");
                }
            }
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<form method="post" action="">

    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/login.css">

    </head>

    <body>
        <!-- partial:index.partial.html -->
        <div id="login-form-wrap">
            <h2>Please Login here</h2>
            <form id="login-form" action="" method="post">
                <p>
                    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
                </p>
                <p>
                    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
               </p>
                <p>
                    <input type="submit" id="login" value="Login">
                </p>
            </form>
            <div id="create-account-wrap">
                <p>Not a member? <a href="register.php">Create Account</a>
                    <p>
            </div>
        </div>

    </body>

</html>