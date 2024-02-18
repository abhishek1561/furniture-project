<?php include 'layout/header.php';
include '../dbconnect/config.php';
$brandnameerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addBrand'])){
        if(empty($_POST['brandname']) || $_POST['brandname']==''){
            $categorynameerr="*Please Enter your Brand name";
        }
        else{
            $brandname = $_POST['brandname'];
            $query = "INSERT INTO brand(brandName) VALUES('$brandname')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product add successfully');
                    window.location.href='brand.php';
                </script>";
                
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
                <h3 class="text-center">Add Brand</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="product1" class="form-label fw-bold">BrandName:</label>
                        <input type="text" id="product1" class="form-control" name="brandname"
                            placeholder="Enter your brand name">
                            <small><?php echo $brandnameerr; ?></small>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Add Brand" name="addBrand">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>