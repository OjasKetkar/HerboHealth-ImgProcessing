<?php
// $insert = false;
if($_SERVER["REQUEST_METHOD"] == "POST" ){
$server = "localhost";
$username = "root";
$password = "";
$database = "sell";

$con = mysqli_connect($server,$username,$password, $database);

if(!$con)
{
    die("Connection to this database falied due to".mysqli_connect_error());
}

  

  $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $plant=$_POST['plant'];
 $quantity=$_POST['quantity'];
 $price=$_POST['price'];
 

 
 $sql = "INSERT INTO `sell1` (`name`, `email`, `phone`, `plant`, `quantity`, `price`, `date`) VALUES ('$name', '$email', '$phone', '$plant', '$quantity', '$price', current_timestamp());";
 $result = mysqli_query($con, $sql);

//  $sql1 = "Select * from orders where username='$username' ";

//  if($result){
//       header("location: ../arrive/arrive.html");
//  }


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

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="test.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Best Online Herbs delivery in Pune | HerboHealth</title>
         <link rel="stylesheet"  href="test.css"> 
     <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=PT+Serif&display=swap" rel="stylesheet">

</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpeg" alt="HerboHealth">
        </div>

        <ul>
        <!-- <li class="item"><a href="#home">Home</a></li> -->
        <li class="item"><a href="../home2.php">Home</a></li>
            <li class="item"><a href="../order/order1.html">Order</a></li>
            <li class="item"><a href="../info/info.html">Know your Plants</a></li>
            <li class="item"><a href="../ayurveda/ayurveda.html">Ayurveda</a></li>
            <li class="item"><a href="../immunity/immunity.html">Immunity</a></li>
            <li class="item"><a href="../nurseries/nursery.html">Nurseries Near You</a></li>
            <li class="item"><a href="../vfl/vfl.html">Vocal for Local</a></li>
            <li class="item"><a href="../sell/sell.php">Sell your plant</a></li>
            <li class="item"><a href="http://127.0.0.1:5000/" target="_blank">Image Process</a></li>
        </ul>
    </nav>

    <section id="contact">
        <h1 class="h-primary"></h1>
        <div id="contact-box">
            <form action = "sell.php"  method="post">
                <div class="formgroup">
                     <label for="name">Username: </label>
                         <input type="text" name="name" id="name" placeholder="Enter your Name">
                </div>
                <div class="formgroup">
                     <label for="email">Email: </label>
                         <input type="email" name="email" id="email" placeholder="Enter your Email">
                </div>
                <div class="formgroup">
                      <label for="phone">Phone Number: </label> 
                         <input type="number" name="phone" id="phone" placeholder="Enter your Phone number">
                </div>
                <div class="formgroup">
                      <label for="plant">Plant </label> 
                         <input type="text" name="plant" id="plant" placeholder="Enter name of plant">
                </div>
                <div class="formgroup">
                     <label for="quantity">Quantity</label>
                     <input type="text" name="quantity" id="quantity" placeholder="Enter number of plants">
                </div>
                <div class="formgroup">
                    <label for="price">price range </label>
                     <input type="text" name="price" id="price" placeholder="Enter price range"></input>
                    </div>
                    
                    
                    
                 <div class = "formgroup center" >
                        <button type="submit" class="btn">SUBMIT</button>
                </div> 
                    
                </form>
                       

                    
                    
             <div id="contactus">
                <p><br></p>
                <p>Contact us on:</p>
                <p>email : hhealth626@gmail.com</p>
                <p>instagram : instagram.com/herbo_health</p>
                <p>twitter : twitter.com/@health_herbo</p>
            </div> 
            </a>  -->

            
        </div>
    </section>
    
   
        </body>
        </html>
        






