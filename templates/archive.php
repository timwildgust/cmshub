<?php include "templates/include/nav.php" ?>
<?php include "templates/include/header.php" ?>
<div class="container" align="center">
    <div align="center">
      <h1>News Archive</h1>
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
     
</div>         
 </div>


<?php } ?>



      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>


      </br> </br> </br> </br> </br>
</div>
<?php include "templates/include/footer.php" ?>

