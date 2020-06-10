<?php
  // the dbconnect.php file contains all the information
  // that we need to connect to the database

  // we use the mysqli_connect() function
  // this has 4 parameters (location, username, password, db name)
  // we put this into a variable so we can use it anytime
  $dbconnect = mysqli_connect("localhost", "root", "", "studentdb");
 ?>
