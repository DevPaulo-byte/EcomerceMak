<?php

ini_set('display_errors', 1);
error_reporting(1);

header('content-type: charset=utf-8');
// Start the session

session_start();
// <?php unset($_SESSION['userLogged']);


define("TITLE", "Mary Cosméticos");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "paulo29");
define("DB_SCHEMA", "ecomerce");
define("DB_PORT", "3306");
