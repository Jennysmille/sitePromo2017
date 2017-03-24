<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/sitepromo.css"/>
    <title>Site promo simplon narbonne</title>
  </head>
  <body>
    <div class="background-image"></div>



  <div class="contact">
  <ul>
    <li>Nicolas Villa</li>
    <li>Formateur/Facilitateur École Régionale du Numérique INESS</li>
    <li><img src="assets/img/mail.png">nvilla@simplon.co</li>
  </ul>
  <ul>
    <li>Patrick Belaire</li>
    <li>Formateur/Facilitateur École Régionale du Numérique INESS</li>
    <li><img src="assets/img/mail.png">pbelaire@simplon.co</li>
  </ul>
  <ul>
  <li>Laurent Darras</li>
  <li>Chargé de promotion TRE École Régionale du Numérique INESS</li>
  <li><img src="assets/img/mail.png">ldarras@simplon.co</li>
</ul>
</div>

<div class="formulaire">
<form action="/my-handling-form-page" method="post">
  <div>
    <label for="name">Nom:</label>
    <input type="text" id="name" name="user_name">
  </div>

  <div>
    <label for="mail">E-mail:</label>
    <input type="email" id="mail" name="user_email">
  </div>

  <div>
    <label for="msg">Message:</label>
    <textarea id="msg" name="user_message"></textarea>
  </div>

  <div class="button">
    <button type="submit">Envoyez votre message</button>
  </div>
</div>

 <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d20384.295043716134!2d2.969329854056524!3d43.18003977879723!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1ac52defc6925%3A0xb10f76c5fd1d874a!2sIN&#39;ESS+Le+Grand+Narbonne!5e1!3m2!1sfr!2sfr!4v1488979146577" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php include("includes/templates/footer.php"); ?>

</body>
</html>
