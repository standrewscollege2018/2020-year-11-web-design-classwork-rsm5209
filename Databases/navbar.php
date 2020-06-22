<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="db.css">
    <meta charset="utf-8">
    <title>Tutorgroups</title>
  </head>
  <body>
    <div class="navbar">


    <div class="module-border-wrap"><div class="module">
    <?php
    include("dbconnect.php");

    $tutorselect_sql = "SELECT * FROM tutorgroup";
    $tutor_qry = mysqli_query($dbconnect, $tutorselect_sql);
    $tutor_aa = mysqli_fetch_assoc($tutor_qry);


      ?>
      <div class="Nav">
        <?php
        do {
          $tutorcode = $tutor_aa['tutorcode'];
          $tutorID = $tutor_aa['tutorgroupID'];
         ?>
               <a href="tutorgroup.php?tutorgroupID=<?php echo $tutorID; ?>"><?php echo $tutorcode; ?></a>
         <?php
         // the while () condition is just the thrid step of our process
         // of running the query
         // It effectively means we repeat the code in the do{} part as
         // many times as there are results coming back from the database
        } while($tutor_aa = mysqli_fetch_assoc($tutor_qry));
         ?>
      </div>
   </div></div>
   </div>

  </body>
</html>
