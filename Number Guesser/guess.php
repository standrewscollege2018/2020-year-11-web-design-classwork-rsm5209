<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <div class="container">



    <div class="module-border-wrap"><div class="module">
      <form class="" action="check.php" method="post">
        <p>Guess a number between 1 and 100</p>
        <input required type="number" name="guess" class="input-guess" placeholder="0">
        <button type="submit" name="button" class="submit-button">Guess</button>
      </form>
      <!-- check response from check page -->
      <div class="text-reply">
      <?php
        if (isset($_GET['reply'])) {
          if($_GET['reply'] == "correct") {
            echo "Well Done, you got it right!" ;
          }
          elseif ($_GET['reply'] == "out of range") {
            echo "Please enter a number between 1 and 100";
          }
          elseif ($_GET['reply'] == "too high") {
            echo "That number is too high";
          }
          elseif ($_GET['reply'] == "too low") {
            echo "That number is too low";
          }
        }
       ?>
     </div>
    </div> </div>
    </div>

    </div>
  </body>
</html>
