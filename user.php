<?php

require( "config.php" );
session_start();

$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}

switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  default:
    listArticles();
}


function login() {

  $results = array();
  $results['pageTitle'] = " Login | Year Trackr ";

  if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log the user in
if ( $_POST['username'] == STUDENT_USERNAME && $_POST['password'] == STUDENT_PASSWORD ) {
   
      // Login successful: Create a session and redirect to the user homepage
   
      
    if ( $_POST['username'] == STUDENT_USERNAME && $_POST['password'] == STUDENT_PASSWORD ) {
      $_SESSION['username'] = STUDENT_USERNAME;
      header( "Location: user.php" );
}
      
    } else {

      // Login failed: display an error message to the user
      $results['errorMessage'] = "Incorrect username or password. Please try again.";
      require( TEMPLATE_PATH . "/admin/loginForm.php" );
    }

  } else {

    // User has not posted the login form yet: display the form
    require( TEMPLATE_PATH . "/admin/loginForm.php" );
  }

}


function logout() {
  unset( $_SESSION['username'] );
  header( "Location: user.php" );
}

function listArticles() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>
