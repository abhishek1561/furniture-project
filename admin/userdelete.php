<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM users WHERE id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your data deleted');
            window.location.href='userList.php';
        </script>";
    }else{
        echo "Something went wrong".mysqli_error($con);
    }
}else{
    header('Location:userList.php');
}