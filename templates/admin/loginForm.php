<?php include "templates/include/header.php" ?>


      <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

<!-- Conatiner with Login Form-->

</br></br></br>
<div class="jumbotron1">
    <div class="container" style="width:70%;">
        <div class="row">
            <div class="col-md-12">
                <div class="form-wrap-form" align="center">
                    <p class="form-title-form">Sign In</p>
                    </br>
                        <form class="login-torm" method="post" action="../php/dbConnection.php">                       
                        <input class="chform" type="text" name="username" id="username" placeholder="Student Number" required autofocus maxlength="20" />
                        <input class="chform" type="password"  name="password" id="password" placeholder="Password" required autofocus maxlength="20" />
                        <div class="row">
                        <input type="submit" value="login" name='login' class="btn btn-success btn-md LoginButton"/>
                        </br>
                        <input type="submit" value="Register" class="btn btn-primary btn-md LoginButton"/>
                        </div>
                        <div class="remember-forgot-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" />Remember Me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div> 
    <!-- Conatiner with Login Form-->
        
      </form>

<?php include "templates/include/footer.php" ?>

