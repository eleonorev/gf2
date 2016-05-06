
<div class="container">

<div id="wall">
    <?php
    include('model/gifs.php');
    include('model/users.php');
    $gifs = get_topgif();
    foreach ($gifs as $gif) {
      $login = get_login($gif['iduser']);
      echo "<div class='post'>";
      echo "<span class='texte'>" . $gif['content'] . "</span>";
      echo "<img src='". $gif['link'] ."'/>";
      echo "<img class='pp' src='upload/profilpictures/" . get_pp($login) . "'/>";
      echo "<a href='profile?login=" . $login . "'><span class='login'>" . $login . "</span></a>";
      $date = new DateTime("now");
      $date2 = $gif['timedate'];
      $date2 = date('Y-m-d', strtotime($date2));
      echo "<span class='heure'>" . $date2 . "</span>";
      echo "<span class='heure'> report content(" . $gif['report'] .") </span>";
      echo "</div>";
    }

    ?>

</div>


</div>
