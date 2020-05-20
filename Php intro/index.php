<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // We use echo to create HTML (print)
      echo("<h1>Hello World</h1>");

      // Variables always start as $
      $name = "Donald Mouse";

      // Variables can be inserted into strings, such as when we are echoing something
      echo("Hello $name");

      // if statement use () brackets for the condition and {} for the code to run
      if ($name == "Mickey Mouse") {
        echo("Kill Donald");
      } else {
        echo("Kill Mickey");
      }

      $counter = 1;
      do {
        echo($counter);
        $counter += 1;
      } while ($counter <= 10);

     ?>
  </body>
</html>
