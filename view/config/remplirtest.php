<?php
include 'database.php';
$pw = hash("whirlpool", "blopblop");
$compte = "INSERT INTO users (login, pass, facebooktoken, mail, photo, nblike, follow) VALUES ('evoisin', '". $pw ."', 'NULL', 'eleonore.v@hotmail.fr', 'profil.png', 0, 'NULL');";
$connection->exec($compte);


$gif= "INSERT INTO gifs (link, content, tags, timedate, iduser, likers, report) VALUES ('http://welcomephagets.tumblr.com/post/51224026643/when-youre-full-on-starving', 'blablablablabalbalbaaa blbalablaaaaa', 'food,repas,manger', NOW(), 1, 0, 0);";
$connection->exec($gif);

$gif= "INSERT INTO gifs (link, content, tags, timedate, iduser, likers, report) VALUES ('https://media.giphy.com/media/ueRbr6r0Lev5e/giphy.gif', 'blablablablbalbaaa blbalablaaaaa', 'shock,marionnette,omg', NOW(), 1, 0, 0);";
$connection->exec($gif);

$gif= "INSERT INTO gifs (link, content, tags, timedate, iduser, likers, report) VALUES ('https://media.giphy.com/media/Kasr3rTYnUo92/giphy.gif', 'blabla blbalablaaaaa', 'happy,enjoy', NOW(), 1, 0, 0);";
$connection->exec($gif);



 ?>
