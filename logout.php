<?php
require_once('includes/header.php');
session_destroy();
if (isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er nu logget ud af Mutuum. Ha en rigtig dejlig dag!");';
        echo 'window.location.href="maja-index.php";';
        echo '</script>' ;
        die();
}
?>

