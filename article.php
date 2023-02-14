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

    <img class="logo-img" src="img/logo.png" alt="logo">

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

</br>

<div class="slides-container">
  <img class="mySlides" src="../img/slideshow/0.jpg" >
  <img class="mySlides" src="../img/slideshow/1.jpg" >
  <img class="mySlides" src="../img/slideshow/2.jpg" >
  <img class="mySlides" src="../img/slideshow/3.jpg" >

  <button class="left-button" onclick="plusDivs(-1)">&#10094;</button>
  <button class="right-button" onclick="plusDivs(1)">&#10095;</button>
</div>

<style>
    .right-button, .left-button{
        margin-top: 10px;
        background-color: #394dff;
        border: none;
        outline: none;
        border-radius: 10px;
        height: 35px;
        width: 35px;
        color: #FFFFFF;
    }
.slides-container{
    margin-top: 70px;
    margin-left: 5%;
background-color: #F8F8F8;
    width: 90%;
    height: 400px;
}.mySlides{

    height: 100%;
    width: 100%;
}
    </style>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>



</br>
    <?php
    include ("fetch/dom_parser.php");
    $html = file_get_html("https://www.svenskfast.se/bostad/vastra-gotaland/");
    echo '<div class="post" >';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',0)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',0)->getAttribute('data-src');
echo'" class="result-img"></img>';
 
    echo $html->find('.h__reset',0)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',0)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',0)->plaintext;
    echo '</a>';
    echo '</div>';

    echo '<div class="post">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',1)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',1)->getAttribute('data-src');
    echo'" class="result-img"></img>';    

    echo $html->find('.h__reset',1)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',1)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',1)->plaintext;
    echo '</a>';
    echo '</div>';

    echo '<div class="post">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',2)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',2)->getAttribute('data-src');
    echo'" class="result-img"></img>';        
  
    echo $html->find('.h__reset',2)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',2)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',2)->plaintext;
    echo '</a>';
    echo '</div>';

    echo '<div class="post">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',3)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',3)->getAttribute('data-src');
    echo'" class="result-img"></img>';  
    echo $html->find('.h__reset',3)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',3)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',3)->plaintext;
    echo '</a>';
    echo '</div>';

    echo '<div class="post">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',4)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',4)->getAttribute('data-src');
    echo'" class="result-img"></img>';  
    echo $html->find('.h__reset',4)->plaintext;
    echo ' - ';   
     echo $html->find('.serach-hit__street',4)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',4)->plaintext;
    echo '</a>';
    echo '</div>';

    echo '<div class="post">';
    echo '<a href="https://www.svenskfast.se/';
    echo $html->find('.search-hit__link',5)->href;
    echo '">';
    echo '<img src="';
    echo $html->find('.search-hit__image',5)->getAttribute('data-src');
    echo'" class="result-img"></img>';  
    echo $html->find('.h__reset',5)->plaintext;
    echo ' - ';
    echo $html->find('.serach-hit__street',5)->plaintext;
    echo '</br>';
    echo $html->find('.search-hit__info--text',5)->plaintext;
    echo '</a>';
    echo '</div>';
?>
<!-----<div class="articles">


    <div class="opened-article">

        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80">

    

    </img>



        <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec suscipit ut nibh in pulvinar. Donec non hendrerit purus. Donec vulputate lacus sit amet rutrum facilisis. Donec tempus velit magna, in sodales nunc faucibus sit amet. Etiam tincidunt elit massa, placerat eleifend nulla porttitor non. Cras rutrum vel massa vitae aliquet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vel dui diam. Donec interdum lacinia tempus.

        </br>

    </br>

Cras vitae est augue. Nam ac rhoncus leo. Nullam nec lacinia metus, a volutpat dui. Maecenas pharetra nec felis nec facilisis. Vivamus aliquam aliquam volutpat. Maecenas ornare justo vel ex elementum, id ultrices est porta. Nunc consectetur tempor purus, quis dignissim augue consequat sit amet. Cras eu elit nisl. Donec consequat, dolor sit amet placerat dignissim, est est bibendum felis, ut dictum justo velit at ipsum. Etiam luctus, nisl ut elementum tristique, ipsum justo efficitur sapien, eu posuere tellus diam sed libero. Fusce vitae vestibulum dui. Aliquam sed dolor sem. Nullam maximus tempor leo, eget semper nibh pharetra in. Proin nisi justo, cursus ac varius id, dictum eget dui. Aliquam aliquet lorem in risus fringilla malesuada.

</br>

</br>

Fusce ac ornare mauris, eget interdum mauris. Vestibulum eu justo ut ante bibendum efficitur sit amet id nisl. Mauris mattis condimentum erat sed aliquet. Nam ac velit vitae sem placerat auctor. Vivamus hendrerit nisi quis sem euismod, efficitur pretium leo sagittis. Nunc vitae ex metus. Suspendisse placerat, nulla vitae suscipit sodales, ex dolor lobortis nisi, non dictum leo turpis sit amet quam. Mauris lacinia elit in leo posuere, id molestie lectus aliquam. Cras vitae varius tortor, convallis interdum mauris. Aliquam gravida ac orci in aliquet.

</br></br>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum bibendum sollicitudin. Maecenas euismod ante sit amet ligula interdum ultricies. Integer efficitur eget leo vitae hendrerit. Ut tincidunt eleifend justo ut aliquet. Cras tincidunt ante turpis, vitae volutpat urna suscipit sed. Nam dictum, ipsum vitae fringilla tincidunt, erat ligula sodales magna, eu consectetur lorem elit nec nibh. Suspendisse laoreet feugiat elit. Etiam tincidunt eget sapien in molestie. In eu lacus risus. Ut cursus condimentum quam, at imperdiet erat porta a. Maecenas luctus dui eget nunc mattis rutrum. Mauris sem magna, fermentum sit amet nibh ac, sagittis mattis augue.

</br></br>

Curabitur eleifend mollis ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin nunc arcu, molestie sit amet euismod at, hendrerit at eros. Sed vulputate commodo efficitur. Suspendisse potenti. Etiam a diam pulvinar, scelerisque dui vitae, auctor quam. Curabitur sit amet tempus ipsum, consectetur fringilla metus. Ut ultrices dignissim molestie. Sed vitae tortor ex. Praesent fringilla varius nisl, convallis facilisis ex auctor sed. Quisque eu vulputate felis. Pellentesque quis rutrum metus, sit amet malesuada orci. Nullam viverra lorem nisl, malesuada tincidunt lacus laoreet a. Nullam turpis sem, eleifend vitae nulla non, fermentum mollis nisi. Ut purus erat, placerat vel purus quis, fermentum iaculis nibh.

</br></br>

Nullam facilisis diam vel vestibulum suscipit. Sed ut facilisis dolor. Donec eget magna elit. Cras fermentum elit a nunc facilisis, a sodales leo efficitur. Vestibulum venenatis nunc vitae purus sollicitudin condimentum. Ut nec neque nec sapien malesuada gravida. In facilisis massa eget ex ullamcorper, non eleifend massa pellentesque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi vestibulum tellus eget elit pellentesque auctor. Vivamus at aliquam nisl. Curabitur a mauris quis justo posuere gravida. Sed id consectetur felis, ut porta libero. Suspendisse vel risus sed turpis congue hendrerit.

</br></br>

Aliquam quis laoreet massa. Sed et lorem sed quam ornare volutpat vestibulum et elit. Etiam congue enim metus. In sagittis erat ac malesuada accumsan. Integer luctus volutpat massa eget scelerisque. Nam interdum ultricies odio eget auctor. Aliquam et aliquam nibh. Phasellus sit amet mauris orci. Etiam dictum porta nibh, porta hendrerit sem ornare sit amet. Aliquam erat volutpat. Quisque tempor placerat neque, eleifend pretium arcu ultrices sit amet. Aenean sit amet nisl tincidunt, sodales est eu, scelerisque turpis. Nullam ac mauris mi. Etiam eget quam enim. Sed ac mattis erat.

</br></br>

Phasellus est purus, condimentum et orci quis, suscipit lobortis nulla. Pellentesque eleifend turpis quis leo feugiat faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi pulvinar non enim eget egestas. Vivamus scelerisque urna eu neque ultrices, in lobortis mi tempor. Fusce lobortis elementum neque, quis sodales urna bibendum et. Cras dolor nibh, feugiat quis nisl ac, blandit vehicula diam. Quisque ornare at velit vel hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed at sollicitudin ligula. Aliquam bibendum, velit nec lacinia feugiat, libero est semper tortor, eu commodo nisi ex in ante. Fusce finibus augue ac lorem elementum, a tincidunt ipsum blandit. Nunc ornare fringilla massa, in semper felis mollis mollis. Vivamus nisi libero, faucibus ac mattis non, mattis vel ligula. Sed dictum feugiat metus tempus molestie.

</br></br>

Praesent cursus hendrerit nibh sed fermentum. Donec vestibulum augue sed sapien auctor sodales. Ut nunc leo, ultrices nec augue nec, aliquet lobortis elit. Donec molestie a arcu vitae euismod. Quisque elementum pretium quam, scelerisque fringilla turpis volutpat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla eu condimentum enim, sed consectetur nunc. Cras fermentum a est eu egestas. In id porta nisi. Ut et ante venenatis, semper eros vel, molestie dui. Sed libero magna, bibendum vitae varius non, pulvinar sit amet eros. Proin sit amet magna nec ipsum rhoncus pretium at eu ante. Aenean eleifend pellentesque feugiat. In ut magna eu augue consequat rhoncus. In hac habitasse platea dictumst. Curabitur malesuada placerat laoreet.

</br></br>

Aliquam consequat arcu sed lacus pellentesque laoreet. Quisque eros orci, porta eget sem id, euismod accumsan nisi. Vestibulum volutpat aliquet elit. Nullam nec vulputate arcu, ut iaculis erat. Nullam at dictum ligula, quis pellentesque risus. Suspendisse malesuada in ligula consequat scelerisque. Proin tincidunt diam nec facilisis blandit. Nulla eu sollicitudin felis. Aliquam erat volutpat.



</p>

        </div>
---->

        

</body>

</html>