<?php

$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST" ){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existsql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numexistsrows = mysqli_num_rows($result);
    if($numexistsrows > 0){
      $showerror = "Username Already Exists, try a different one.";
    }
    else{
      
      if(($password == $cpassword)  ){ 
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `username`, `email` ,`password`, `dt`) VALUES ( '$username', '$email' ,'$hash', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if($result){
          $showalert = true;
        }
      }
      else{
        $showerror = "Passwords do not match.";
      }
    }
      
}

?>

<style>
    .center{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        
    }
</style>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showalert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if($showerror){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' .$showerror.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    
    <div class="container">
        <h1 class = "text-center pt-3" >Signup to Herbohealth</h1>

<form action = "/loginsystem/signup.php" class="center" method = "post" >
  <div class="mb-3 col-md-6 ">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength = "25" class="form-control" id="username" name = "username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-md-6 ">
    <label for="email" class="form-label">Mail Id</label>
    <input type="text" maxlength = "30" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength = "15" class="form-control" id="password" name = "password" >
  </div>
  <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name = "cpassword" >
    <div id="emailHelp" class="form-text">Make sure you enter the same password.</div>

  </div>

  <button type="submit" class="btn btn-outline-dark">SignUp</button>
</form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>