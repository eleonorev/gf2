<?php

  if(!isset($_GET['profile'])) {
    header('Location: ../index.php?e=5');
  }

  $user = $_GET['profile'];
  ?>

<div id="userprofil" class="container">
  <div class="profil">
    <div class="pp">
      <img src="upload/profilpictures/<?php echo get_pp($user); ?> "/>
    </div>
      <h2> <?php echo $user; ?></h2>
      <div id="stat">
        <div class="block"> <span class="number"><?php echo get_nb_gif($_SESSION['login']); ?></span><span class="text">Gifs</span></div>
        <div class="block"> <span class="number"><?php echo getlike_user($_SESSION['login']); ?></span><span class="text">Likes</span></div>
        <div class="block"> <span class="number"><?php echo nb_follow($_SESSION['login']); ?></span><span class="text">Followers</span></div>
      </div>
    </div>
</div>
