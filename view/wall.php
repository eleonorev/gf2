
<div class="container">

<div class="wall">
  <h3> caca </h3>
    <?php
    include('model/gifs.php');
    $gifs = get_topgif();
    foreach ($gifs as $gif) {
      echo "<h3>" . $gif['content'] . "</h3>";
      echo "<img src='". $gif['link'] ."'/>";
    }

    ?>

</div>


</div>
