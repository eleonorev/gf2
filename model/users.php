<?php


if (isset($_POST['connexion'])) {
  session_start();
  login();
}

if (isset($_POST['inscription'])) {
  session_start();
  create_user();
}

 if (isset($_GET['e']) && ($_GET['e'] == 12)) {
   session_start();
    session_destroy();
    header('Location: ../index.php');
  }


function get_pp($login) {
  include 'config/database.php';
  $result = $connection->prepare("SELECT photo FROM users WHERE login ='".$login."';");
  $result->execute();
  $users = $result->fetchAll(PDO::FETCH_ASSOC);
  $photo =  $users[0]['photo'];
  return $photo;
}

function get_followers($login) {
  include 'config/database.php';
  $result = $connection->prepare("SELECT follow FROM users WHERE login ='".$login."';");
  $result->execute();
  $users = $result->fetchAll(PDO::FETCH_ASSOC);
  $follow =  $users[0]['follow'];
  $followers = explode(",", $follow);
  unset($followers[count($followers) - 1]);
  return $followers;
}

function nb_follow($login) {
  $tab = get_followers($login);
  $nbfollow = count($tab);
  return $nbfollow;
}

function get_login($iduser) {
  include 'config/database.php';
  $result = $connection->prepare("SELECT login FROM users WHERE id ='".$iduser."';");
  $result->execute();
  $login = $result->fetchAll(PDO::FETCH_ASSOC);
$log =  $login[0]['login'];
  return $log;
}

function create_user() {
  $error = 0;
  if ($_POST['passwd_one'] != $_POST['passwd_two']) {
     $error = 2;
  }
  else {
       $pass = hash("whirlpool", $_POST['passwd_one']);
  }
  if (strlen($_POST['passwd_one']) < 8 || strlen($_POST['passwd_one']) > 40) {
     $error = 3;
  }
  if (strlen($_POST['login']) < 3 || strlen($_POST['login']) > 18) {
     $error = 4;
  }
  if (strlen($_POST['mail']) < 7) {
    $error = $_POST['mail'];
  }
if ($error != 0) {
   header('Location: ../index.php?r=' . $error);
   exit;
}
$login = $_POST['login'];
$mail = $_POST['mail'];
$val = uniqid();

include '../config/database.php';
$register = $connection->prepare("SELECT * FROM users WHERE login ='" . $login . "';");
$register->execute();
$user = $register->fetch();
if (!(isset($user))) {
   $error = 5;
}


else if ($error == 0) {
     include '../config/database.php';
     $register = "INSERT INTO users (login, pass, facebooktoken, mail, photo, nblike, follow) VALUES
     ('" . $login . "','" . $pass . "', 'NULL', '" . $mail . "', 'profil.png', 0, 0);";
     $connection->exec($register);
     $error = $_POST['login'];
}

header('Location: ../index.php?r=' . $error);
exit;

}


function login() {
      if (strlen($_POST['login']) < 3 || strlen($_POST['login']) > 18) {
      	$error = 12;
      }
      $login = $_POST['login'];
      $passwd = hash("whirlpool", $_POST['pass']);
      include '../config/database.php';
      $motdepasse = $connection->prepare("SELECT * FROM users WHERE login ='".$login."';");
      $motdepasse->execute();
      $blop = $motdepasse->fetchAll(PDO::FETCH_ASSOC);
      $blop = $blop[0];
      $result = $blop['pass'];
      $photo = $blop['photo'];

      if ($passwd == $result) {
      		$_SESSION['login'] = $login;
      		$_SESSION['id'] = $iduser;
      		$_SESSION['photo'] = $photo;
      		$error = 3;
      	}
      	else {
      		$error = 1;
      	}
      if ($error === 3 && isset($_SESSION['login'])) {
      	header('Location: ../index.php?e=' . $error);
      }
      else {
      header('Location: ../index.php?l=' . $error);
        }
}


?>
