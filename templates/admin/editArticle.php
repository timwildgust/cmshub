<?php include "templates/include/nav.php" ?>
<?php include "templates/include/header.php" ?>

</br></br>
<div class="container" align="center">
      
      <div id="adminHeader"><div>
   </div>     
        <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
      </div>


</br>
      <h1><?php echo $results['pageTitle']?></h1>

<div class="jumbotron1">
<div class="container" align="center">
<div class="cneter">

<form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

        <?php if ( isset( $results['errorMessage'] ) ) { ?>
                <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
        <?php } ?>


<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stupid"><label for="title">Title</label></div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" /></div>
</div>


<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><label for="summary">Summary</label></div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><textarea name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea></div>
</div>

 
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><label for="content">Content</label></div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea></div>
</div>
  
 
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><label for="publicationDate">Publication Date</label></div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" /></div>
</div>

<div class="container" style="width:20%;">
</br>
<div class="row">
<input type="submit" name="saveChanges" value="Save Changes" class="btn btn-success btn-md"/>
</div>
</br>
<div class="row">
<input type="submit" formnovalidate name="cancel" value="Cancel" class="btn btn-success btn-md"/>
</div>
</div>
  
  


</form>
</div>
</div>
</div>

<?php if ( $results['article']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>


</br>
<?php include "templates/include/footer.php" ?>

