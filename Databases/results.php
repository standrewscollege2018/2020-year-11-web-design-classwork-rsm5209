<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="db.css">
    <title></title>
  </head>
  <body>

    <?php
    // this page will run  a query and display the result(s)

    // we include the dbconnect.php code
    include("dbconnect.php");
    if(!isset($_POST['search'])) {
      header("Location: search.php");
    }

    $name = $_POST['search'];

    // there are 3 steps to running a select query
    // 1. Set up the query in a variable
    $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$name%' OR lastname LIKE '%$name%'";

    ?>
    <div class="banner">
      <form class="return-button" action="search.php" method="post">
        <button class="submit-box" type="submit" name="button">Return to search</button>
      </form>
      <div class="title">
      <h2>Search Results</h2>
    </div>
  </div>

    <div class="container">
      <div class="module-border-wrap"><div class="module">

      <?php

    // 2. WE go to the database and run the query
    $result_qry = mysqli_query($dbconnect, $result_sql);
    // check if there are any results to display
    // use mysqli_num_rows(), which counts the number of results
    if (mysqli_num_rows($result_qry)==0) {
      //If no results are found print a message
      echo "<h1 class='no-results'>No results found</h1>";
    } else {
      // 3. We organise our results into an associative array
      // Basically, we can use the coloum headings from the database table
      // We use the mysqli_fetch_assoc() fuction
      $result_aa = mysqli_fetch_assoc($result_qry);

      // Loop through $result_aa to display all results




      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $tutor = $result_aa['tutorgroupID'];

        ?>

              <p><?php echo "$firstname $lastname $tutor"; ?></p>

        <?php
        // the while () condition is just the thrid step of our process
        // of running the query
        // It effectively means we repeat the code in the do{} part as
        // many times as there are results coming back from the database

      } while($result_aa = mysqli_fetch_assoc($result_qry));



    }

    ?>
  </div></div>

</div>




  </body>
</html
