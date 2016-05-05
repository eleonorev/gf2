<?php
$DB_DSN = 'mysql:dbname=gifyou;host=localhost';
$DB_USER = 'rootroot';
$DB_PASSWORD = 'root';
$connection = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
