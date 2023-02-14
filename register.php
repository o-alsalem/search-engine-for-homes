<?php 

session_start();

require 'php/config.php';

require 'php/insert_user.php';

// IF USER LOGGED IN

if(isset($_SESSION['user_email'])){

header('Location: home.php');

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
    <link rel="stylesheet" href="css/register.css">

    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/e110a6d74d.js" crossorigin="anonymous"></script>

    <script src="script/script.js"></script>

 <script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js"></script>
 <script src="script/slideshow.js"></script>
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

</head>

<body>
   <div class="nav-bar">
   <button class="login-btn" onclick="myFunction1()"value="Logga In">Logga In</button>

  
   <a href="register.php" ><button class="register-btn" value="Registrera">Bli Medlem</button></a>

 

    <button class="menu-button" onclick="myFunction()" id="toggle-nav"><i class="fa-solid fa-bars"></i></button>

    <img class="logo-img" src="img/logo.png" alt="logo" onclick="location.href = 'index.php';" >

   </div> 

   <div class="second-nav-bar" id="second-nav-bar" >


<center>
<ul>
<li><a href="index.php">Hem</a></li>
<li><a href="#email-form">Artiklar</a></li>
<li><a href="#email-form">Kontakta Oss</a></li>





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
<div class="registration-container">
<center>
<form action="" method="post" class="reg-inner">

<h2>Skapa ett konto</h2>


<input type="text" placeholder="Will Smith" name="username" required>
</br>
</br>



<input type="email" placeholder="example@example.com"  name="user_email" required>
</br>

</br>

<input type="password" placeholder="Lösenord"  name="user_password" required>

</br>
</br>

<button type="submit">Bli Medlem</button></br></br>
<a href="index.php">Har du redan ett konto?</a>
</center>



</div>

<?php

if(isset($success_message)){

echo '<center><div class="success_message">'.$success_message.'</div></center>'; 

}

if(isset($error_message)){

echo '<center><div class="error_message">'.$error_message.'</div></center>'; 

}

?>



</div>

</form>

</body></html>