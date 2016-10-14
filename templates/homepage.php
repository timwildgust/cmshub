<?php include "templates/include/nav.php" ?>
<?php include "templates/include/header.php" ?>


<br>

<div classs="center">
  
 
  
  
      <h1 align="center"> College News </h1>
<hr class="hr">
      
    <?php foreach ( $results['articles'] as $article ) { ?>



<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="thumbnail1">
      <div class="caption">
        <h3 align="center"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></h3>
        <p class="pubDate" align="center"><?php echo date('j F Y', $article->publicationDate)?></p>
        <p><p class="summary" align="center"><?php echo htmlspecialchars( $article->summary )?></p></p>
        <p align="center"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="btn btn-primary" role="button">Click to view</a></p>
      </div>
    </div>
  </div>
</div>

<?php } ?>



<!-- Free Rooms include -->
<h1 align="center"> Free Classes </h1>
<hr class="hr">

  <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12"><?php include "freeRooms/buttonIndex.php" ?></div>
  
</div>
<!--/ Free Rooms include -->

  </br> </br> </br> </br> </br>
<?php include "templates/include/footer.php" ?>

