<?php include 'layout/header.php';
include '../dbconnect/config.php';
$firstnameerr=$lastnameerr=$emailerr=$messageerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addcontact'])){
        if(empty($_POST['firstname']) || $_POST['firstname']==''){
            $firstnameerr="*Please Enter your First name";
        }else if(empty($_POST['lastname']) || $_POST['lastname']==''){
            $lastnameerr="*Please Enter your Last Name";
        }else if(empty($_POST['email']) || $_POST['email']==''){
            $emailerr="*Please Enter your Email";
        }else if(empty($_POST['message']) || $_POST['message']==''){
            $messageerr="*Please Enter your Message";
        }
        else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $query = "INSERT INTO contact(firstName,lastName,email,message) VALUES('$firstname','$lastname','$email','$message')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product add successfully');
                    window.location.href='product.php';
                </script>";
                // print_r('$result');
            }else{
                echo "Something went wrong".mysqli_error($con);
            }
        }
    }
}
?>

<div class="addproduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="text-center">Addproduct</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="firstname" class="form-label fw-bold">FirstName:</label>
                        <input type="text" id="firstname" class="form-control" name="firstname"
                            placeholder="Enter your product name">
                            <small><?php echo $firstnameerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label  fw-bold">Last Name</label>
                        <input type="file" id="lastname" name="lastname" class="form-control">
                        <small><?php echo $lastnameerr; ?></small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label  fw-bold">Email</label>
                        <input type="text" id="email" class="form-control" name="email"
                            placeholder="Enter your Email">
                        <small><?php echo $emailerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label  fw-bold">Message</label>
                        <input type="text" id="message" class="form-control" name="message"
                            placeholder="Enter your Message">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add Product" name="addcontact">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>