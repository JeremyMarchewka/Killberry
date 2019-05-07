<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulaire de Contact</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <?php include 'gestion-form-contact.php';?>
  <?php include('navbar.php');?>
  <div class="entetecontact">
    <img src="img/petitlogo.png" alt="logo du Kilberry"/>
    <h1 class="titrecontact">Nous contacter<h1>
  </div>
  <form class="form" method="post" action="gestion-form-contact.php" >
          <div class="left">
            <input type="text" name="name" required placeholder="NOM et prénom"><br/>
            <input type="email" name="email" required placeholder="Adresse email"><br/>
            <input type="text"  name="object" required placeholder="Objet de votre demande"><br/>
          </div>
          <div class ="right">
            <textarea id="demande" name="message" rows="auto" cols="67%"></textarea></p><br/>
            <button type="submit" class="send" name="envoi">Envoyer</button>
          </div>
  </form>
  <?php include('foot_top.php');?>
  <!----------------------------------------SCRIPTS--------------------------------------->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js'></script>
  <script  src="js/index.js"></script>
  <script src="js/parallax.min.js"></script>
</body>
</html>
