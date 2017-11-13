<?php
/* Log out process, unsets and destroys session variables */
ob_start();
session_start();
session_unset();
session_destroy();

header("location: index");
exit();
?>
