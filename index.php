<?php
/* Displays user information and some useful messages */
ob_start();
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  include_once 'header.php';
  include_once 'modal.php';
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    include_once 'headerLogged.php';
    include_once 'modalLogged.php';

}
?>
<?php include_once 'jumbotron.php'; ?>
<?php include_once 'divCards.php'; ?>
<?php include_once 'divHow.php'; ?>
<?php include_once 'footer.php'; ?>
