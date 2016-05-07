<?php
  session_start();
  ini_set("error_reporting", E_ALL);
  ini_set("display_errors", 1);
  ini_set("display_startup_errors", E_ALL);
  include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Gifyou</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
  <link href='https://fonts.googleapis.com/css?family=Mr+Dafoe|Dancing+Script|Marck+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="assets/js/editor.js"></script>

</head>
<body>
<div id="header">
      <ul class="menu">
          <div class="menuright">
            <span class="logo"> Gifyou </span>
                  </div>

                </ul>
  <div id="toggle" class="on">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
  </div>
</div>

    <div id="navigation" class="active">
        <?php
          if (isset($_SESSION['login'])) {
            include('navconnect.php');}
       else {
          include('navdisconnect.php');
        }


        ?>

    </div>
