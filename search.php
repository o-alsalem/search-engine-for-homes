
<!DOCTYPE html>

<html lang="en">

<head>

    <title>hej</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">

    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/e110a6d74d.js" crossorigin="anonymous"></script>

    <script src="script/script.js"></script>
    <script src="script/dark.js"></script>

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
 

<body>
<button class='dark-button button'><i class="fa-solid fa-moon"></i> </button>

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
<input type="email" name="user_email" minlength="3" maxlength="50" placeholder="Användarnamn" required>

</br>

</br>

<input type="password" name="user_password" minlength="8" maxlength="50" placeholder="Lösenord" required>

</br>

</br>

<input type="submit" value="Logga In" class="lgn">


   </form>

    </div>

    <div class="search-list-form">
 <form class="search-form-box" action="search.php" method="post">
<center>
 <h3 style="font-family: Helvetica; font-size: 15px;">Var vill du bo? Sök bland tusentals hem.</h3>
</center>
 <input name="stad" type="text" minlength="3" maxlength="50" placeholder="Göteborg, Jönköping, Stockholm">

<select class="search-list-selector">

<option>Sverige</option>

</select>
<input type="submit">

   </form>

</div>
<div class="search-list">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $stad = $_POST['stad'];

}

    include ("fetch/dom_parser.php");
    $html = file_get_html("https://www.svenskfast.se/lagenhet/vastra-gotaland/$stad");
    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',0)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',0)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',0)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',0)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',0)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',1)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',1)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',1)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',1)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',1)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';


    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',2)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',2)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',2)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',2)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',2)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    
    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',3)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',3)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',3)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',3)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',3)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    
    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',4)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',4)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',4)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',4)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',4)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',5)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',5)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',5)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',5)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',5)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';


    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',6)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',6)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',6)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',6)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',6)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    
    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',7)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',7)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',7)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',7)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',7)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',8)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',8)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',8)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',8)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',8)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',9)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',9)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',9)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',9)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',9)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';

    
    echo '<div class="result">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',10)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',10)->getAttribute('data-src');
echo'" class="result-img"></img>';    echo '<p class="result-title">';
    echo $html->find('.h__reset',10)->plaintext;
    echo '</p>';
    echo '<p class="result_adress">';
    echo $html->find('.serach-hit__street',10)->plaintext;
    echo '</p>';
    echo '<p class="result_price">';
    echo $html->find('.search-hit__info--text',10)->plaintext;
    echo '</p>';
    echo '</a>';
    echo '</div>';




    
?>


</div>
</body>

</html>
