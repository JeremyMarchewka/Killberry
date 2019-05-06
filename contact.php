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
  <div class="entetecontact">
    <img src="img/petitlogo.png" alt="logo du Kilberry"/>
    <h1 class="titrecontact">Nous contacter<h1>
  </div>
  <form action="/index.php" method="POST" class="form">
          <div class="left">
            <input type="text" name="name" required placeholder="NOM et prénom" class="name"><br/>
            <input type="email" name="mail" required placeholder="Adresse email" class="mail"><br/>
            <input type="text"  name="objet" required placeholder="Objet de votre demande" class="object"><br/>
          </div>
          <div class ="right">
            <textarea id="demande" name="votre demande" rows="auto" cols="67%" class="zonetext">
            </textarea><br/>
            <button type="submit" class="send">Envoyer</button>
          </div>
  </form>
</body>
</html>
