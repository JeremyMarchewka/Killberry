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
            <p><label for="name"></label><input type="text" name="name" required placeholder="NOM et prénom"></p><br/>
            <p><label for="email"></label><input type="email" name="mail" required placeholder="Adresse email"></p><br/>
            <p><label for="object"></label><input type="text"  name="object" required placeholder="Objet de votre demande"></p><br/>
          </div>
          <div class ="right">
            <p><label for="message"></label><textarea for ="message" id="demande" name="votre-demande" rows="auto" cols="67%">
            </textarea></p><br/>
            <button type="submit" class="send">Envoyer</button>
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
