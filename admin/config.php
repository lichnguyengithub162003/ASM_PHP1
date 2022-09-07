<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "admin_ivy");

$mysqli = new mysqli("localhost","root","","admin_ivy");


if ($mysqli -> connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>