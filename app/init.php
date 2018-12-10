<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('pgsql:dbname=php_to_do;host=localhost');
// $conn = pg_pconnect("dbname=php_to_do");
// if (!$conn) {
//   echo "An error occurred.\n";
//   exit;
// }

if(!isset($_SESSION['user_id'])) {
    die("You are not signed");
}