<?php
session_start();
if(!isset($_SESSION['Id'])){
    header('Location:../signIn.php');
}else{
    session_destroy();
    header('Location:../signIn.php');
}
?>

