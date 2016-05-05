<?php
include('database.php');
$users = "CREATE TABLE IF NOT EXISTS users(
      id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      login varchar(20) NOT NULL,
      pass text NOT NULL,
      facebooktoken varchar(255),
      mail text NOT NULL,
      photo text NOT NULL,
      nblike int,
      follow text,
      following text); ";
$connection->exec($users);


$gif = "CREATE TABLE IF NOT EXISTS gifs (
       id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       link text NOT NULL,
       content text NOT NULL,
       tags text NOT NULL,
       timedate datetime NOT NULL,
       iduser int NOT NULL,
      likers text NOT NULL,
      report int NOT NULL); ";
$connection->exec($gif);

$events = "CREATE TABLE IF NOT EXISTS events (
       id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
       source varchar(100) NOT NULL,
       cible text NOT NULL,
       content text NOT NULL,
       idgif text,
       timedate datetime NOT NULL); ";
$connection->exec($events);

$admin = "admin";
$adminpw = hash("whirlpool", "admin");

include 'database.php';
$compte = "INSERT INTO users (login, pass, facebooktoken, mail, photo, nblike, follow) VALUES ('admin', '". $adminpw ."', 'NULL', 'eleonore.v@hotmail.fr', 'profil.png', 0, 'NULL');";
$connection->exec($compte);

echo "Une pomme."

?>
