<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
<?php
  // this page will run a query and display the result(s)
  // we include the dbconnect.php code
  include("dbconnect.php");

  // check to see if the user searched something to come to this page
  if(!isset($_POST['search'])) {
      header("Location: search.php");
    }

  // there are 3 steps to running a select query
  // 1. Set up the query in a variable
  $search = $_POST['search'];
  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  // 2. We go to the database and run the query.
  // we use mysqli_query(). This takes two parameters: dbconnect and query
  $result_qry = mysqli_query($dbconnect, $result_sql);

  // 3. we organise our results into an associative array
  // Basically, we can use the column headings from the database table
  // we use the mysqli_fetch_assoc() function
  $result_aa = mysqli_fetch_assoc($result_qry);
?>
<div class="banner">
  <div class="title">
    <h1>Search Results</h1>
  </div>
</div>
<div class="container">
  <div class="module-border-wrap"><div class="module-results">
    <div class="left">
    <form class="" action="search.php" method="post">
      <button type="submit" name="button" class="return-button">Return</button>
    </form>
    </div>
<?php
do {
  // display info
  $firstname = $result_aa['firstname'];
  $lastname = $result_aa['lastname'];
  $tutor = $result_aa['tutorgroup']
?>
      <p><?php echo "$firstname $lastname $tutor" ?></p>
<?php
// the while() condition is just the third step of our process
// of running this theory
// It effectively means we repeat this code in the do{} part
// as many times as there are results coming back from the database
} while ($result_aa = mysqli_fetch_assoc($result_qry));
?>
</div></div>
</div>
<!-- echo "<div class=''><p>$firstname $lastname</p></div>" -->
