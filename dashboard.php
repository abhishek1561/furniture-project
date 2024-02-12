<?php
session_start();
if(!isset($_SESSION['Id'])){
    header('Location:signIn.php');
}

?>
<a href="section/logout.php">Logout</a>

