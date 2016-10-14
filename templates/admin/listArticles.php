<?php include "templates/include/nav.php" ?>
<?php include "templates/include/header.php" ?>

      <div id="adminHeader">
        <h2>News Admin</h2>
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>

     <div align="center"> <h1>All News</h1></div>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

<div class="jumbotron1">

<div class="container">
<div align="center">
<div class="row">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 tim">Publication Date</div>
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 tim">News Feed</div>
  </div>
<?php foreach ( $results['articles'] as $article ) { ?>

  <div class="row" onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 tim2" ><a><?php echo date('j M Y', $article->publicationDate)?></a></div>
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 tim2" ><a><?php echo $article->title?></a></div>
  </div>


<?php } ?>
<div align="center">  
<div class="row">

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>
</div>
</div>

<div align="center">  
<div class="row">
  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tim2">
      <p><a href="admin.php?action=newArticle">Add News</a></p>
      </div>
</div>

<div class="container">
  <h1 align="center"> Time Tables </h1>
<hr class="hr">

  <div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12" align="center"><a href= "/templates/timeTableBuilder.php">Time Table Builder</a></div>
  
</div>

</div>
</div>
</div>
</div>
<?php include "templates/include/footer.php" ?>

