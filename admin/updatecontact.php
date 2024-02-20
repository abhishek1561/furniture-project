<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
$firstnameerr=$lastnameerr=$emailerr=$messageerr=$descriptionerr='';
if(isset($_POST['updatecontact'])){
    $id=$_POST['c_id'];
    if(empty($_POST['firstname']) || $_POST['firstname']==''){
        $firstnameerr="*Please Enter your First Name";
    }else if(empty($_POST['lastname']) || $_POST['lastname']==''){
        $lastnameerr="*Please Enter your Last Name";
    }else if(empty($_POST['email']) || $_POST['email']==''){
        $emailerr="*Please Enter your Email";
    }else if((empty($_POST['message']) || $_POST['message']=='')){
        $messageerr="*Please Enter your Message";
    }else{
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        // $created_at = $_POST['created_at'];
        $query="UPDATE  contact SET firstName='$firstname',lastName='$lastname',email='$email',message='$message' WHERE c-id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your Contact Update successfully');
                window.location.href='userContact.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM contact WHERE c_id=$id";
    $result=mysqli_query($con,$select);
    // print_r($result);
    if(mysqli_num_rows($result)){
        $row=mysqli_fetch_assoc($result);
?>
<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">UpdateContact</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="firstname" class="form-label fw-bold">First Name:</label>
                        <input type="text" id="firstname" value="<?= $row['firstName'];?>" class="form-control" name="firstname"
                            placeholder="Enter your product name">
                        <input type="hidden" value="<?= $row['c_d']?>" name="c_id">
                        <small style="color:red"> <?= $firstnameerr?></small>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label  fw-bold">Last Name</label>
                        <input type="text" id="lastname" value="<?= $row['lastName']?>" name="lastname" class="form-control" />
                        <small style="color:red"> <?= $lastnameerr?></small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label  fw-bold">Email</label>
                        <input type="text" id="email" value="<?= $row['email']?>" class="form-control" name="email"
                            placeholder="Enter your Email">
                        <small style="color:red"> <?= $emailerr ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label  fw-bold">Message</label>
                        <input type="text" value="<?= $row['message']?>" class="form-control" name="message"
                            placeholder="Enter your Message">
                        <small style="color:red"> <?= $messageerr;?></small>
                    </div>
                    <input type="submit" class="btn btn-primary" name="updatecontact" value="UpdateContact">
                </form>
                <?php
                  }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>