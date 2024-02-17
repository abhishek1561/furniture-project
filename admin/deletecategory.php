<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM category WHERE c_id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Category deleted Successfully');
            window.location.href='category.php';
        </script>";
    }else{
        echo "Something went wrong".mysqli_error($con);
    }
}else{
    header('Location:category.php');
}
?>