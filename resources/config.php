<?php 

  ob_start();

  session_start();

  defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

  defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
  defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

  defined("DB_NAME") ? null : define("DB_NAME", "single_db");
  defined("DB_USER") ? null : define("DB_USER", "single_user");
  define("DB_PASS") ? null : define("DB_PASS", "single_pass");
  defined("DB_HOST") ? null : define("DB_HOST", "localhost");
  
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Functions will be available everywhere
  require_once("functions.php");

?>