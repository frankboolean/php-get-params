<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio 2</title>
  </head>
  <body>
    <?php
    $mail = $_GET["mail"];

     ?>

     <?php if (stripos($mail, "@") !== false && stripos($mail, ".") !== false){
       echo "ok";
     }

     ?>


  </body>
</html>
