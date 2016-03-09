<?php include "templates/include/header.php" ?>

</br>
<div class="jumbotron1" style="border: 1px solid #FFFFFF;">
<div class="container">
<div class="center">
      <div class="row">
     <div><h1 style="width: 100%;"><?php echo htmlspecialchars( $results['article']->title )?></h1></div>
      <div style="width: 100%; font-style: italic;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
      <div style="width: 100%;"><?php echo $results['article']->content?></div>
      <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>

</div>
</div>
</div>
</div>
      <p><a href="./">Return to Homepage</a></p>



<?php include "templates/include/footer.php" ?>

