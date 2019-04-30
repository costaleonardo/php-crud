<?php 

// if (!connection) {
//   echo "Connection failed: " . mysqli_error;
// } else {
//   echo "Connection successful.";
// }

function site_info() {

  global $connection;

  $query = "SELECT * FROM `Site Info`";
  $send_query = mysqli_query($connection, $query);

  if (!$send_query) {
    die("QUERY FAILED" . mysqli_error($connection));
  }

  return mysqli_fetch_array($send_query);
} 

function get_posts() {
  global $connection;

  $query = "SELECT * FROM `Posts`";
  $send_query = mysqli_query($connection, $query);

  if (!$send_query) {
    die("QUERY FAILED" . mysqli_error($connection));
  }

  return mysqli_fetch_array($send_query);
}

?>