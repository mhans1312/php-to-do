<?php

session_start();

$_SESSION['users_id'] = 1;

$db = new PDO('pgsql: dbname=php_to_do; host=localhost');

//handle this in some other way
if(!isset($_SESSION['users_id'])) {
    die("You are not signed");
}