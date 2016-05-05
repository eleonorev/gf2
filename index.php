<?php include 'view/header.php';

if (isset($_SESSION['login'])) {
  include('view/profile.php');
}
include('view/wall.php');

 include 'view/footer.php'; ?>
