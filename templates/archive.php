<?php include "templates/include/header.php" ?>
<div class="container" align="center">
    <div align="center">
      <h1>Article Archive</h1>
      </div>
      
      
<?php foreach ( $results['articles'] as $article ) { ?>
         
         <div class="container" style="width:70%;">
  <div class="row">
       <div class="tim" align="center"><?php echo date('j F Y', $article->publicationDate)?></div>
</div>  
<div class="row">
       <div class="tim2" align="center"><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></div>
</div>
<div class="row">
       <div class="tim2" align="center"><p class="summary"><?php echo htmlspecialchars( $article->summary )?></p></div>
</div>         
 </div>


<?php } ?>



      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

<div align="center">
      <a  href="./" class="btn btn-primary" role="button" >Return to Homepage</a>
</div>
     </br>
</div>
<?php include "templates/include/footer.php" ?>

