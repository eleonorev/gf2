
<div class="container active">

<div id="wall">
    <?php
    include('model/gifs.php');
    include('model/users.php');
    $gifs = get_topgif();
    foreach ($gifs as $gif) {
      $login = get_login($gif['iduser']);
      echo "<div class='post'>";
      $date = new DateTime("now");
      $date2 = $gif['timedate'];
      $date2 = date('Y-m-d', strtotime($date2));
      echo "<span class='heure'>" . $date2 . "</span>";
      echo "<span class='texte'>" . $gif['content'] . "</span>";
      echo "<img src='". $gif['link'] ."'/>";
      echo "<img class='pp' src='upload/profilpictures/" . get_pp($login) . "'/>";
      echo "<a href='profile?login=" . $login . "'><span class='login'>" . $login . "</span></a>";

      //echo "<span class='heure'> report content(" . $gif['report'] .") </span>";
      echo "<i class='fa fa-heart coeur' aria-hidden='true'></i>";
      echo "<span class='like'>" . get_nblike($gif['id']) . "</span>";
      echo "</div>";
    }

    ?>

</div>


</div>
