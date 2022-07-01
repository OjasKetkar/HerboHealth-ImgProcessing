<?php

$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST" ){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $sql = "Select * from users where username='$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // echo $num;
    if($num==1){
        while($row = mysqli_fetch_assoc($result)){
          if(password_verify($password, $row['password'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true; 
            $_SESSION['username'] = $username;
            header("location: home2.php");
          }
          else{
            $showerror = "Invalid Credentials";
          }
        }
    }
    else{
        $showerror = "Username does not exist";
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

    <title>Login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in.
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
        <h1 class = "text-center pt-3" >Login to HerboHealth</h1>

<form action = "/loginsystem/login.php" class = "center" method = "post" >
  <div class="mb-3 col-md-6 ">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name = "username" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name = "password" >
  </div>
  

  
 
  <button type="submit" class="btn btn-outline-success">Login</button>
</form>

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>