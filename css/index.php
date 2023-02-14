<?php

session_start();

require 'php/config.php';

require 'php/login.php';

// IF USER LOGGED IN

if(isset($_SESSION['user_email'])){

header('Location: ../php/home.php');

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

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/e110a6d74d.js" crossorigin="anonymous"></script>

    <script src="script/script.js"></script>

 <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
 <script src="script/slideshow.js"></script>


</head>

<body>

   <div class="nav-bar">

    <button class="menu-button" onclick="myFunction()" id="toggle-nav"><i class="fa-solid fa-bars"></i></button>

    <img class="logo-img" src="img/logo.png" alt="logo">

   </div> 

   <div class="second-nav-bar" id="second-nav-bar" >



<ul>

<li>Hem</li>

<li>Artiklar</li>

<li></li>

<li></li>

<li></li>

    </ul>

    <button class="login-btn" onclick="myFunction1()"value="Logga In">Logga In</button>

    <a href="register.php" ><button class="register-btn" value="Registrera">Registrera</button></a>



   </div>

   <div class="login-form" id="login-form">



      

<button class="close-login" onclick="myFunction1()"><i class="fa-solid fa-xmark"></i></button>



<form class="login-content" action="" method="post">
<div class="social-login">


<button id="bid" class="bid"><i class="fa-solid fa-building-columns" ></i> Bank ID</button>
<button id="gg" class="gg"><i class="fa-solid fa-user"></i> Användarnamn</button>

    </div>
</br>
<input type="email" name="user_email" placeholder="Användarnamn">

</br>

</br>

<input type="password" name="user_password" placeholder="Lösenord">

</br>

</br>

<input type="submit" value="Logga In" class="lgn">

<checkbox></checkbox>

    </form>

    </div>

   <div class="content">

    <center>

   <form class="search-form" method="post" action="search.php">

    <p class="header-text">Sveriges största bostadsplattform</p>



<input type="text" name="stad" placeholder="Göteborg, Stockholm, Jönköping">
 

    </form>

    </center>


   <div class="second-content">

    <p>Nya bostäder till salu</p>
<style>



</style>
        
    <?php
    include ("fetch/dom_parser.php");
    $html = file_get_html("https://www.svenskfast.se/bostad/");
    echo '<div class="post">';
    echo '<img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
   echo '<a href="">';
    echo $html->find('.search-hit__link',0)->href;
    echo '';


    echo $html->find('.h__reset',0)->plaintext;

    echo ' - ';
    echo $html->find('.serach-hit__street',0)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',0)->plaintext;
    echo '</div>';

    echo '<div class="post">';
    echo '<a href=""><img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
    echo $html->find('.h__reset',1)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',1)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',1)->plaintext;
    echo '</div>';

    echo '<div class="post">';
    echo '<a href=""><img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
    echo $html->find('.h__reset',2)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',2)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',2)->plaintext;
    echo '</div>';

    echo '<div class="post">';
    echo '<a href=""><img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
    echo $html->find('.h__reset',3)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',3)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',3)->plaintext;
    echo '</div>';

    echo '<div class="post">';
    echo '<a href=""><img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
    echo $html->find('.h__reset',4)->plaintext;
    echo ' - ';    echo $html->find('.serach-hit__street',4)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',4)->plaintext;
    echo '</div>';

    echo '<div class="post">';
    echo '<a href=""><img src="https://si.sfcdn.se/Resurs/Image/343385/Medium/637895380140000000/MDIyNnwwMDAxMzg0MTMxMXw5Ng...jpg" class="result-img"></img>';
    echo $html->find('.h__reset',5)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',5)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',5)->plaintext;
    echo '</div>';
?>

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

            <a href="article.php">

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