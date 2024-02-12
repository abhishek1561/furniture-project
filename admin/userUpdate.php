<?php
include 'layout/header.php';
include '../dbconnect/config.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $firstname=$_POST['first_name'];
    $lastname=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $query="UPDATE users SET FirstName='$firstname',LastName='$lastname',Email='$email',Phone='$phone',Password='$password', Role='$role' WHERE id=$id";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>
                alert('Your data Updated successfully');
                window.location.href='userList.php';
        </script>";
    }else{
        echo mysqli_error($con);
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM users WHERE id=$id";
    $secResult = mysqli_query($con,$select);
    if(mysqli_num_rows($secResult)>0){
        $row=mysqli_fetch_assoc($secResult);
       
        // print_r($row);
 ?>       

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-12 col-sm-12"></div>
            <div class="col-lg-10 contact-info col-md-12 col-sm-12">
                <h1 style="text-decoration:underline;">Update Table</h1>
                <form class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="col-lg-6 col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control news-field" value="<?= $row['FirstName'];?>" name="first_name" id="fname">
                    </div>
                    <input type="hidden" name="id"value="<?=  $row['id']; ?>">
                    <div class="col-lg-6 col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control news-field" value="<?= $row['LastName']; ?>" name="last_name" id="lname">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control news-field" value="<?= $row['Email']; ?>" name="email" id="email">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control news-field" value="<?= $row['Phone']; ?>" name="phone" id="phone">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="msg">Password</label>
                        <input type="password" name="password" id="msg" value="<?= $row['Password']; ?>" class="form-control" />
                    </div>
                    <div class="col-lg-6 col-md-6">
                    <label for="role">Role</label>
                        <select name="role" id="role" value="<?= $row['Role']; ?>">
                            <option <?php echo $row['Role']=='user'?'selected':''; ?> value="user">user</option>
                            <option <?php echo $row['Role']=='admin'?'selected':''; ?> value="admin">admin</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        
                            <input type="submit" name="update"
                                class="btn  mb-3 px-4 rounded-pill text-white news-field bg-dark" value="update"
                                style="background:#3b5d50;">
                    

                        
                    </div>
                </form>
            </div>

        </div>

        <div class="col-lg-1 col-md-12 col-sm-12"></div>
    </div>
    </div>
</section>

<?php
    }
}else{
    header('Location:userlist.php');
}
?>