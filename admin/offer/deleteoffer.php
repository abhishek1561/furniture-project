<?php
include 'header.php';
include '../../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM offers WHERE o_id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Offer deleted Successfully');
            window.location.href='offer.php';
        </script>";
    }else{
        echo "Something went wrong".mysqli_error($con);
    }
}else{
    header('Location:offer.php');
}
?>