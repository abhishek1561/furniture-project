<?php include 'layout/header.php';
include 'dbconnect/config.php';
$emailerr=$passerr=$failer="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['signin'])){
        if(empty($_POST['email']) || $_POST['email']==''){
            $emailerr="*Please Enter your email";
        }else if(empty($_POST['password']) || $_POST['password']==''){
            $passerr="*Please Enter your password";
        }
        else{
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query="SELECT * FROM users WHERE Email='$email' && Password='$password' ";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>=1){
                $data=mysqli_fetch_assoc($result);
                //  print_r($data);
                //  die();
                session_start();
                $_SESSION['Id']=$data['id'];
                $_SESSION['Name']=$data['FirstName'].' '.$data['LastName'];
                $_SESSION['Email']=$data['Email'];
                $_SESSION['Mobile_No']=$data['Phone'];
                $_SESSION['role']=$data['Role'];
                if($data['Role']=='admin'){
                    header('Location:admin/dashboard.php');
                }else{
                    header('Location:dashboard.php');
                }
            }else{
                $failer="* You are Entering Wrong Email and Password.";
            }
        }
    }
}
?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12"></div>
            <div class="col-lg-6 contact-info col-md-12 col-sm-12">
                <h1 style="text-decoration:underline;">Sign In</h1>
                <form class="row g-3 mt-4 contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                    <div class="col-lg-12 col-md-12">
                        <small style="color:red"><?php echo $failer;?></small>
                    </div>


                    <div class="col-lg-12 col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control news-field" name="email" id="email">
                        <small style="color:red"><?php echo $emailerr;?></small>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <label for="msg">Password</label>
                        <input type="password" name="password" id="msg" class="form-control" />
                        <small style="color:red"><?php echo $passerr;?></small>
                    </div>

                    <div class="col-auto">
                        <input type="submit" name="signin"
                            class="btn  mb-3 px-4 rounded-pill text-white news-field bg-dark" value="Sign In"
                            style="background:#3b5d50;">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <p class="haveAccount">If you have not any account?<b><a href="signup.php">Sign Up</a></b></p>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-lg-3 col-md-12 col-sm-12"></div>
    </div>
    </div>
</section>
<?php include 'layout/footer.php';?>