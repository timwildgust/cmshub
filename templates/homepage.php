<?php include "templates/include/header.php" ?>


<br>
<div class="container">
<div classs="center">
    <?php foreach ( $results['articles'] as $article ) { ?>



<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="thumbnail1">
      <div class="caption">
        <h3 align="center"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></h3>
        <p class="pubDate" align="center"><?php echo date('j F Y', $article->publicationDate)?></p>
        <p><p class="summary" align="center"><?php echo htmlspecialchars( $article->summary )?></p></p>
        <p align="center"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="btn btn-primary" role="button">Link to Article</a></p>
      </div>
    </div>
  </div>
</div>

<?php } ?>


<div align="center">
      <a  href="./?action=archive" class="btn btn-primary" role="button" >Article Archive</a>
</div>

</div>
</br>
<?php include "templates/include/footer.php" ?>

