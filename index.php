<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Kilberry</title>
  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
  
</head>

<body id="haut">

<?php include('navbar.php');?> 

<div class="main_title zoomIn animated"><a><img src="img/logo3.png"></a></div>
  <div id="contenedor-slider" class="contenedor-slider">
 <div id="slider" class="slider">
    <section class="slider__section"><img src="img/1.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="img/2.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="img/3.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="img/4.jpg" class="slider__img"></section>
  </div>
  <div id="btn-prev" class="btn-prev">&#60;</div>
  <div id="btn-next" class="btn-next">&#62;</div>
 </div>


 
 <div class="carousel">
  <div class="holder">
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/300x200" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/400x300" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/500x400" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/210x105" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
    <img id="img_carou" src="http://fakeimg.pl/250x150" alt="" />
    <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
    <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
    <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
    <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
  </div>
</div>
  
  

<!----------------------------------------PARALLAX--------------------------------------->


<div class="parallax-window" data-parallax="scroll" data-image-src="img/photokil.jpg"></div>

<!----------------------------------------PRESENTATION--------------------------------------->

<div class="présentation">
    <div class="pres_gauche">
        <img src="img/logo.png" class="pres_logo">
    </div>
    <div class="pres_droite">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br/> Assumenda aliquid commodi est, natus architecto ducimus fugit, enim eius, corrupti cupiditate veritatis sed harum saepe corporis veniam placeat magnam cumque quam.</p>
    </div>
</div>

<!----------------------------------------CAROUSEL2--------------------------------------->

<div class="carousel">
    <div class="holder">
        <img id="img_carou" src="img/a.png" alt="" />
        <img id="img_carou" src="img/b.png" alt="" />
        <img id="img_carou" src="img/c.png" alt="" />
        <img id="img_carou" src="img/d.png" alt="" />
        <img id="img_carou" src="img/e.png" alt="" />
        <img id="img_carou" src="img/f.png" alt="" />
        <img id="img_carou" src="img/g.png" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/250x150" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
      <img id="img_carou" src="http://fakeimg.pl/200x100" alt="" />
    </div>
  </div>

  <?php include('foot_top.php');?> 

<!----------------------------------------SCRIPTS--------------------------------------->
<script
src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI="
crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/parallax.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script  src="js/index.js"></script>




</body>

</html>
