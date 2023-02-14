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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <meta name="theme-color" content="#394dff" >
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
    <script src="https://kit.fontawesome.com/e110a6d74d.js" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script src="script/dark.js"></script>
 <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
<script>
$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $(".nav-bar").css("background" , "#FFFFFF");
	  }

	  else{
		  $(".nav-bar").css("background" , "transparent");  	
	  }
  })
})
    </script>
<script>


//Replace Text function		 
$(function () { 
  count = 0; 
  wordsArray = ["semesterboende", "renoveringsobjekt", "lägenhet", "sommarstuga", "gård", "tomt", "mark"]; 
  setInterval(function () { 
    count++; 
    $("#word").fadeOut(500, function () { 
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(500); 
    }); 
  }, 2000); 
}); 
//End Replace Text function	 

</script>


</head>

<body id="body">

<button class='dark-button button'><i class="fa-solid fa-moon"></i> </button>

   <div class="nav-bar" id="dark">
   <button class="login-btn" onclick="myFunction1()"value="Logga In">Logga In</button>

  
   <a href="register.php" ><button class="register-btn" value="Registrera">Bli Medlem</button></a>

 

    <button class="menu-button" onclick="myFunction()" id="toggle-nav dark"><i class="fa-solid fa-bars"></i></button>

    <img class="logo-img" src="img/logo.png" alt="logo" onclick="location.href = 'index.php';" >

   </div> 

   <div class="second-nav-bar" id="second-nav-bar" >


<center>
<ul>
<li id="dark"><a href="index.php">Hem</a></li>
<li id="dark"><a href="article.php">Artiklar</a></li>
<li id="dark"><a href="#email-form">Kontakta Oss</a></li>





<li></li>

<li></li>

<li></li>

    </ul>

</center>

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
    <video style="" autoplay muted loop class="video">
  <source src="video/hem.mp4" type="video/mp4">
</video>
   <div class="content" id="first">


  <div class="counter">

<h3 style="color:#FFFFFF;font-family:Helvetica; margin-left: 5px;">  Antal bostäder hos oss:</h3>

<div class="count1">
<h3>8</h3>
</div>
<div class="count2">
<h3>5</h3>
</div>
<div class="count3">
<h3>9</h3>
</div>
<div class="count4">
<h3>2</h3>
</div>


</div>

   <form class="search-form" method="post" action="search.php">

    <p class="header-text">Sveriges bostadsplattform, sök bland tusentals bostäder.</p>
    <p class="header-text" id="header-text" style="font-size: 30px;">Sveriges bostadsplattform, sök bland tusentals bostäder.</p>



<input type="text" name="stad" placeholder="Sök på adress, ort, område, kommun." value="Ale" required>
</br>
</br>
 <select>

 <option>Alla länder</option>
 <option selected>Sverige</option>
 <option>Frankrike</option>
 <option>Italien</option>
 <option>Portugal</option>
 <option>Spanien</option>
 <option>USA</option>
</select>
<button style="text-decoration: none; height: 48px; width: 80px;color: #FFFFFF; background-color: #394dff; border-radius: 5px; border: 1px solid #394dff;">Hitta</button>


  
</form>





    <center>
   <button id="latest-floater" style="visibility: hidden;" value="" ><a href="#nytt"><i class="fa-sharp fa-solid fa-arrow-down"></i></a></button>
</center>


   <div class="second-content" id="second" >
    <div class="second-content-box">
      <center>
<p style="font-family: Helvetica; font-size: 35px; color: #FFFFFF;">Söker du <span id="word">drömboende</span>? </br>- Hitta ditt bland tusentals annonser.</p>
</center>
</div>

    </div>

    <div class="third-content">
<div class="third-content-box" >

<h3 style="text-decoration: underline; padding-left: 40px; padding-top: 20px;font-size: 20px; font-family:Helvetica; color: black;">Skaffa kunskap</h3>

<p style="padding-left: 40px; padding-right: 40px;font-size: 15px; color: black; font-family: Helvetica;">
Se till att du vet vad du vill ha och vad du kan köpa. Vi hjälper dig att förstå områden, bopriser och bostäders värde.
</p>
<!---<button value="Hitta din drömbostad" class="third-content-button"></button>--->
</div>

<div class="third-content-box" id="third" >

<h3 style="text-decoration: underline; padding-left: 40px; padding-top: 20px;font-size: 20px; font-family:Helvetica; color: black;">Förstå värdet
</h3>

<p style="padding-left: 40px; padding-right: 40px;font-size: 15px; color: black; font-family: Helvetica;">
Vi hjälper dig att förstå värdet på din bostad månad för månad. Oavsett om du har ett intresse för statistik eller bara är nyfiken.</p>
<!---<button value="Värdera din bostad" class="third-content-button"></button>--->
</div>

<div class="third-content-box" >

<h3 style="text-decoration: underline; padding-left: 40px; padding-top: 20px;font-size: 20px; font-family:Helvetica; color: black;">Hitta rätt mäklare

</h3>

<p style="padding-left: 40px; padding-right: 40px;font-size: 15px; color: black; font-family: Helvetica;">
Känner du en mäklare? Vi känner alla! Berätta var du bor så matchar vi dig med de bästa mäklarna för just dig.
<!---<button value="Hitta mäklare" class="third-content-button"></button>--->
</div>

<div class="third-content-box" >

<h3 style="text-decoration: underline; padding-left: 40px; padding-top: 20px;font-size: 20px; font-family:Helvetica; color: black;">Smart lånelöfte


</h3>

<p style="padding-left: 40px; padding-right: 40px;font-size: 15px; color: black; font-family: Helvetica;">
Med Smart lånelöfte från SBAB kan du själv uppdatera och anpassa ditt lånelöfte efter bostäderna som du kollar på.
<!---<button value="Ansök om lånelöfte" class="third-content-button"></button>-->
</div>
<div class="email-subscription">
<h3 style="color: #F8F8F8;padding-left: 150px; font-family: Helvetica;">-</h3>

<h3 class="e-t">Nyhetsbrev</h3>
<p class="e-t">Registrera dig för vårt nyhetsbrev och så att du inte missar några tips, inlägg eller annat som kanske passar dig!</p>
<center>
<form action="" method="post">
  
<input type="email" placeholder="example@example.com">
<input type="submit">
</form>
</center>
</div>
</div>
    <footer id="footer">
        <div class="footer-content" id="footer-content">
<ul>
<li><a href="#">Om OSALEM</a></li>
<li><a href="#">Artiklar</a></li>
<li><a href="#">Cookies</a></li>
<li><a href="#">Villkor</a></li>
</ul>

</div>
    <form id="email-form" class="email-content" method="post" action="">
<h3>Några frågor? Inga problem. Kontakta oss.</h3>
<input type="text" placeholder="Namn">
<input type="email" placeholder="example@example.se">

</br>
</br>
<textarea placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque rutrum orci nisi, vel ornare arcu facilisis et. Donec mollis risus odio, eu malesuada nulla vestibulum quis. Nullam ut libero non nulla feugiat vestibulum eu quis tortor. Sed augue ex, bibendum accumsan metus non, sodales placerat ex. Nullam venenatis cursus eros ac interdum."></textarea>

</br>
<input type="submit">

</br>

    </form>


    </div> 
    
</footer>
    </div>





</body>

</html>

