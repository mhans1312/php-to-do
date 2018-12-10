<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('pgsql: dbname=php_to_do; host=localhost');


if(!isset($_SESSION['user_id'])) {
    die("You are not signed");
}