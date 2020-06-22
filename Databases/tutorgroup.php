<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="db.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("dbconnect.php");
    if(!isset($_GET['tutorgroupID'])) {
      header("Location: navbar.php");
    }

    $tutorgroupID = $_GET['tutorgroupID'];
    $tutorcode_sql = "SELECT firstname, lastname, image FROM student WHERE tutorgroupID = $tutorgroupID";
    $tutorcode_qry = mysqli_query($dbconnect, $tutorcode_sql);
    ?>
    <div class="banner">
      <form class="return-button" action="navbar.php" method="post">
        <button class="submit-box" type="submit" name="button">Return to Tutor</button>
      </form>
      <form class="return-button" action="search.php" method="post">
        <button class="submit-box" type="submit" name="button">Go to Search</button>
      </form>
      <div class="title">
      <h2>Search Results</h2>
    </div>
  </div>

  <div class="container">
    <div class="module-border-wrap"><div class="module">
  <?php
    if (mysqli_num_rows($tutorcode_qry)==0) {
      //If no results are found print a message
      echo "<h1 class='no-results'>No results found</h1>";
    } else {

    $tutorcode_aa = mysqli_fetch_assoc($tutorcode_qry);
    do {
      $firstname = $tutorcode_aa['firstname'];
      $lastname = $tutorcode_aa['lastname'];
      $image = $tutorcode_aa['image'];

      echo "<p>$firstname $lastname</p><img src='images/$image' class='image-resize'>";




      // the while () condition is just the thrid step of our process
      // of running the query
      // It effectively means we repeat the code in the do{} part as
      // many times as there are results coming back from the database

    } while($tutorcode_aa = mysqli_fetch_assoc($tutorcode_qry));




}
  ?>
</div></div>

</div
  </body>
</html>
