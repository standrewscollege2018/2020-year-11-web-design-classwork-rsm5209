<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="db.css">
    <title></title>


  </head>
  <body>

    <form class="return-button" action="tutorgroup.php" method="post">
      <button class="submit-box" type="submit" name="button">Go to Tutor groups</button>
    </form>
    <?php include('navbar.php');
    ?>

    <div class="container">
    <div class="module-border-wrap"><div class="module">

      <form class="" action="results.php" method="post">
        <p>Search for a student</p>
        <input required type="text" name="search" class="input-guess" placeholder="Enter first name to search">
        <button type="submit" name="button" class="submit-button">Search</button>
      </form>


    </div></div>
    </div>
  </body>
</html>
