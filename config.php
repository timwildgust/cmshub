<?php
ini_set( "display_errors", true );
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "timwildgust" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
define("STUDENT_USERNAME", "x12104604");
define("STUDENT_PASSWORD", "enter");
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
