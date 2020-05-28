<?php
  // checking to see if user has placed a guess
  if(!isset($_POST['guess'])) {
    header("Location: guess.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <?php
        // set number they are guessing
        $number = 32;
        // get number out of POST array and put into $guess variable
        $guess = $_POST['guess'];
        // check if it is right, too high or too low
        if ($guess == $number) {
          header("Location: guess.php?reply=correct");
        } else if ($guess < 0 or $guess > 100) {
          header("Location: guess.php?reply=out of range");
        } else if ($guess > $number) {
          header("Location: guess.php?reply=too high");
        } else {
          header("Location: guess.php?reply=too low");
        }
       ?>

    </div>



  </body>

</html>
