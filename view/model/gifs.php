<?php

function get_nb_gif($login) {
  $iduser = get_iduser($login);
  include 'config/database.php';
  $req = $connection->prepare("SELECT * FROM gifs WHERE iduser ='".$iduser."';");
  $req->execute();
  $nbgif = $req->rowCount();
  return $nbgif;
}

function get_iduser($login) {
  include 'config/database.php';
  $req = $connection->prepare("SELECT id FROM users WHERE login ='".$login."';");
  $req->execute();
  $iduser = $req->fetchAll(PDO::FETCH_ASSOC);
  $id = $iduser[0];
  $iduser = $id['id'];
  return $iduser;
}

function getlike_user($login) {
  include 'config/database.php';
  $req = $connection->prepare("SELECT nblike FROM users WHERE login ='".$login."';");
  $req->execute();
  $nblike = $req->fetchAll(PDO::FETCH_ASSOC);
  $like = $nblike[0];
  $nblike = $like['nblike'];
  return $nblike;
}


function get_topgif() {
  include 'config/database.php';
  $result = $connection->prepare('SELECT * FROM gifs;');
  $result->execute();
  $gifs = $result->fetchAll(PDO::FETCH_ASSOC);
  return $gifs;
}
