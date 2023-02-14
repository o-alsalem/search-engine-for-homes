<?php
session_start();
require 'config.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>hej</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">

    <script src="https://kit.fontawesome.com/e110a6d74d.js" crossorigin="anonymous"></script>

    <script src="../script/script.js"></script>

 <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
 <script src="../script/slideshow.js"></script>


</head>

<body>

   <div class="nav-bar">

    <button class="menu-button" onclick="myFunction()" id="toggle-nav"><i class="fa-solid fa-bars"></i></button>

    <img class="logo-img" src="../img/logo.png" alt="logo">
  <h3> Välkommen, <?php echo $userData['username'];?></h3>
   </div> 

   <div class="second-nav-bar" id="second-nav-bar" >



<ul>
<Li><a href="logout.php">Logga ut</a></li>
<li>Hem</li>

<li>Artiklar</li>

<li></li>

<li></li>

<li></li>

    </ul>




   </div>




   <div class="content">

    <center>

   <form class="search-form" method="GET" action="">

    <p class="header-text">Sveriges största bostadsplattform</p>



<input type="text" placeholder="Göteborg, Stockholm, Jönköping">
 

    </form>

    </center>

   </divr>

   <div class="second-content">

    <p>Nya bostäder till salu</p>

        

<div class="post">

    <a href="d">

    <img src="https://images.unsplash.com/photo-1480074568708-e7b720bb3f09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80" alt="">

    Adress: Läroverksgatan 11, Borås. Pris: 2 50000</a>



    </div>

    <div class="post">

        <img src="https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2065&q=80" alt=""/>

        Adress: Storgatan 32, Stockholm. Pris: 2 50000</a>



    </div>

    <div class="post">

        <a href="d">

        <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">

        Adress: Tunbindargatan 6, Göteborg. Pris: 2 50000</a>



    </div>

    <div class="post">

        <a href="d">

        <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">

        Adress: Färgesundsvägen 19, Alle. Pris: 2 50000</a>



    </div>

    <div class="post">

        <a href="d">

        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">

        Adress: Sjögatan 1, Kisa. Pris: 2 50000</a>

    </div>

    <div class="post">

        <a href="d">

        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">

        Adress: Färilavägen 23, Ramsjö. Pris: 2 50000</a>

    </div>

    </div>

    </div>



<div class="email-form">

   <!--- <div class="email-in">

    <h3> lorem ipsum</h3>

    <center>

<form  class="email-content" method="post" action="">

<input type="email" placeholder="example@example.se">

<input type="text" placeholder="Namn">

<br><br>

<textarea></textarea>

<br>

<input type="submit">



    </form>

  

    </div> ------->

    <div class="articles">

        <p>Insperartion</p>

        <div class="blog-article">

            <a href="article.html">

        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80">

          </a>

    </div>

         

            <div class="blog-article article-mini">

                <img src="https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80">

            </div>

            <div class="blog-article article-mini">

                <img src="https://images.unsplash.com/photo-1585412727339-54e4bae3bbf9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">

            </div>

            <div class="blog-article article-mini">

                <img src="https://images.unsplash.com/photo-1596900779744-2bdc4a90509a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=638&q=80">

            </div>

            <div class="blog-article article-mini">

                <img src="https://images.unsplash.com/photo-1592247350271-c5efb34dd967?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">

            </div>

</div>





    



</body>

</html>