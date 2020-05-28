<?php
  if(!isset($_POST['firstname'])) {
    header("Location: Ms Larby in Holocaust.zip");
  }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $firstname = $_POST['firstname'];

      if ($firstname == "Riley") {
        echo "Well Done, you guessed it right";
      }
      else {
        echo "Sorry that is wrong";
      }
     ?>

  </body>
</html>
