<?php 
  /**
   * PHP + MySQL CRUD
   */
  
   define("DB_NAME", "crud_db");
   define("DB_USER", "crud_user");
   define("DB_PASSWORD", "crud_pass");
   define("DB_HOST", "localhost");

   $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

   if ($connection === false) {
    die("ERROR: Could not connect - " . mysqli_connect_error());
   } else {
    //  echo "Connected.";
   }

?>