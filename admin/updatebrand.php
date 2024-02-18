<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
$brandnameerr='';
if(isset($_POST['updatebrand'])){
    $id=$_POST['b_id'];
    if(empty($_POST['brandname']) || $_POST['brandname']==''){
        $brandnameerr="*Please Enter your brand name";
    }else{
        $brandname = $_POST['brandname'];
        // $created_at = $_POST['created_at'];
        $query="UPDATE brand SET brandName='$brandname' WHERE b_id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your brand update successfully');
                window.location.href='brand.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM brand WHERE b_id=$id";
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
                <h3 class="text-center">Update Brand</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="brand" class="form-label fw-bold">BrandName:</label>
                        <input type="text" value="<?= $row['brandName'];?>" id="brand" class="form-control" name="brandname"
                            placeholder="Enter your Brand name">
                        <input type="hidden" value="<?= $row['b_id']?>" name="b_id">
                        <small style="color:red"> <?= $brandnameerr?></small>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="updatebrand" value="Updatebrand">
                    </div>
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