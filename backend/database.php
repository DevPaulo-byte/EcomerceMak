<?php

$db = new mysqli("localhost", "root", "paulo29", "ecomerce", "3306");

if ($db->connect_error) {
    echo("Connection failed: {$db->connect_error}");
    exit();
}

echo("Connected successfully");
