<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM brand WHERE b_id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Brand deleted Successfully');
            window.location.href='brand.php';
        </script>";
    }else{
        echo "Something went wrong".mysqli_error($con);
    }
}else{
    header('Location:brand.php');
}
?>