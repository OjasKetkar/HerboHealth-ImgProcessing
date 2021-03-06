<?php
session_start();


if( isset($_SESSION['loggedin']) || $_SESION['loggedin'] == true ){
   
}
else{
  header("location: login.php");
  exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Online Herbs delivery in Pune | HerboHealth</title>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=PT+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/logo.jpeg" alt="HerboHealth">
        </div>

        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Medicinal Herbs</a></li>
            <li class="item"><a href="#client-section">Immunity Section</a></li>
            <li class="item"><a href="nurseries/nursery.html">Nurseries Near You</a></li>
            <li class="item"><a href="vfl/vfl.html">Vocal for Local</a></li>
            <li class="item"><a href="sell/sell.php">Sell your plant</a></li>
            <li class="item"><a href="logout.php">Logout</a></li>
            <li class="item"><a href="http://127.0.0.1:5000/" target="_blank">Image Process</a></li>
            <li class="button-item"><a href="#"> <button class = "note" onclick = "notifyMe()" >Notify Me</button></a> </li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to HerboHealth</h1>
        <p class="para">Medicinal Herbs heal more than just the physical body. Order the medicinal Herbs you want from local people here. </p>
        <p class="para">Use Natural Be Natural </p>
        <a href="order/order1.html">
            <button class="btn" >Order Now</button>
        </a>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Medicinal Herbs</h1>
        <div id="services">
            <div class="box">
                <img src="https://5.imimg.com/data5/AE/OK/MY-10909108/neem-leaves-2-500x500.jpg" alt="">
                <h2 class="h-secondary">Neem</h2>
                <p class="center"> A natural herb that comes from the neem tree. It has a wide range of medicinal properties starting from its pesticidal properties to skin care and hair treatments. It can be someone's Family doctor. Want to try it out ? order below now.</p>
                <a href="order/order1.html">
                    <button class="btn">Order Now</button>
                </a>
            </div>
            <div class="box">
                <img src="https://financialtribune.com/sites/default/files/field/image/Ta_Medicinal%20Herb%20509-ab.jpg" alt="">
                <h2 class="h-secondary">More about Herbs</h2>
                <p class="center">Medicinal Herbs can be a total replacement of the chemically produced tablets and medicines if used over a longer period. They provide numerous health benefits one cant even imagine. Click Below to know more about Medicinal herbs and how to use them.</p> 
                <a href="info/info.html">
                    <button class="btn">Click Here</button>
                </a>
            </div>
            <div class="box" >
                <img src="https://femina.wwmindia.com/photogallery/2020/sep/mainimageinsider15657742551565774344156577648815657828881565782944156578911515668292031566829239156682926415668293071566829365157060866215706086721600946165_760x568.jpg" alt="" id="bulk">
                <h2 class="h-secondary">Aloevera</h2>
                <p class="center"> Aloe is a cactus-like plant that grows in hot, dry climates. One of the most commonly found plants in Indian homes. It can heal and soften your skin, lower your blood sugar level and even be used as antioxident and antibacterial. Click below to get one at home</p>
                <a href="order/order1.html">
                    <button class="btn">Order Now</button>
                </a>
            </div>
        </div>
    </section>
    <hr>

    <section id="client-section">
        <h1 class="h-primary center">Immunity Section</h1>
        <div id="clients">
            <div class="client-item">
                <p>Despite being originated in India, Ayurveda is little known to Indian Citizens. It is not just a science but a way of lifestyle. This 3000 year old science can provide solution to nearly all physical and mental helth problems. Medicinal herbs play a major role in Ayurveda. Take a dive to know more about it and </p>
                    <button class="btn"><a href="ayurveda/ayurveda.html">AYURVEDA</a></botton>
                
            </div>
            <div class="client-item">
                <p>In times of COVID 19, we realised that boosting our immunity power was the only way to keep ourselves protected from the danger of coronavirus. There are some simple gome remedies which if regurarly followed can make a person so healthy that he/she doesn't need to go to hospital. To know about such remedies, click below</p>
                <a class="ibutton" href="immunity/immunity.html">
                    <button class="btn">IMMUNITY</botton>
                </a>
            </div>
        </div>
    </section>
    <hr>

    <section id="contact">

            <div id="contactus">
                <p><br></p>
                <p>Contact us on:</p>
                <p>email : hhealth626@gmail.com</p>
                <p>instagram : instagram.com/herbo_health</p>
                <p>twitter : twitter.com/@health_herbo</p>
            </div>
        </div>
    </section>

<footer>
    <div class="center">
        Copyright &copy; www.HerboHealth.com All rights reserved!
    </div>
</footer>
    
</body>

</html>


<script type="module">
    import { Toast } from 'bootstrap.esm.min.js'
  
    Array.from(document.querySelectorAll('.toast'))
      .forEach(toastNode => new Toast(toastNode))
  </script>



<script>
    alert("What's up <?php echo $_SESSION['username'] ?>, U have entered Herbohealth.");
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
 if (!Notification) {
  alert('Desktop notifications not available in your browser. Try Chromium.');
  return;
 }

 if (Notification.permission !== 'granted')
  Notification.requestPermission();
});


function notifyMe() {
 if (Notification.permission !== 'granted')
  Notification.requestPermission();
 else {
  var notification = new Notification('Notification title', {
   icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
   body: 'Hey there! You\'ve been notified!',
  });
  notification.onclick = function() {
   window.open('http://stackoverflow.com/a/13328397/1269037');
  };
 }
}
</script>