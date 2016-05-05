<div id="profile">
  <div class="imgprofile">
    <img src="upload/profilpictures/<?php echo $_SESSION['photo']; ?>"/>
  </div>
  <?php
    include('model/gifs.php');
    include('model/users.php');
   ?>
    <h3> @<?php echo $_SESSION['login'] ?> </h3>
    <div id="stat">
      <div class="block"> <span class="number"><?php echo get_nb_gif($_SESSION['login']); ?></span><span class="text">Gifs</span></div>
      <div class="block"> <span class="number"><?php echo getlike_user($_SESSION['login']); ?></span><span class="text">Likes</span></div>
      <div class="block"> <span class="number"><?php echo nb_follow($_SESSION['login']); ?></span><span class="text">Followers</span></div>
    </div>

    <a class="button logout" href="model/users.php?e=12">Log out</a>
</div>
