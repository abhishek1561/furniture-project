<?php include 'layout/header.php'; ?>
<?php include 'dbconnect/config.php'; ?>
<!-- ========================================================1================================================================ -->
<!-- ----------------------------Hero Section Start------------------------------ -->
<?php
$fnameerr=$emailerr=$messerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['firstname'])||$_POST['firstname']==''){
        $fnameerr="Please your Fisrt Name";
    }else if(empty($_POST['email'])||$_POST['email']==''){
        $emailerr="Please your Email";
    }else if(empty($_POST['message'])||$_POST['message']==''){
        $messerr="Please your Messege";
    }else{
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $query="INSERT INTO contact(firstName,lastName,email,message) VALUES('$fname','$lname','$email','$message')";
        if(mysqli_query($con,$query)){
            echo "<script>
                alert('Your Message Successfully.you get response through email.');
                form.reset();
            </script>;";
        }
    }
}

?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="hero-content">
                    <h1 class="hero-heading">Contact</h1>
                    <p class="hero-des">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis deleniti
                        nobis consequuntur fuga explicabo officiis magnam culpa voluptate hic nesciunt.</p>
                    <button class="btn btn-warning rounded-pill">Shop Now</button>
                    <button class="btn rounded-pill btn-techsima text-white px-4">Explore</button>
                </div>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-12">
                <div class="hero-image">
                    <img src="images/couch.png" alt="hero image" class="img-gluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------------------Hero Section End--------------------------------------------- -->
<!-- ==================================================================2==================================================== -->
<!-- -----------------------------contact section start ----------------------------------------------->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"> </div>
            <div class="col-lg-8 contact-info">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="col-lg-10">
                                <p class="ps-2"> Darshan Nagar, Kushmaha, Ayodhya,
                                    Uttar Pradesh 224135</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-envelope"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3"> abhishek@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 d-flex">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 contact-icon"><span><i class="fa-solid fa-phone"></i></span></div>
                            <div class="col-lg-10">
                                <p class="ps-3"> +91 123456890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="row g-3 mt-4">
                    <div class="col-lg- col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control new-field" id="first_name" name="firstname">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control new-field" id="last_name" name="lastname">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control new-field" id="email" name="email">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="inputPassword2">Message</label>
                        <textarea class="form-control" rows="5" id="message" rows="3" name="message" style="resize:none"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    <button class="btn btn-dark mt-4 mb-5 px-4 py-3 rounded-pill ">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- -----------------------------contact section end ----------------------------------------------->
<?php include 'layout/footer.php'; ?>