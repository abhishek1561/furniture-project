<?php include 'layout/header.php';
include '../dbconnect/config.php';
$categorynameerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addCategory'])){
        if(empty($_POST['categoryname']) || $_POST['categoryname']==''){
            $categorynameerr="*Please Enter your Category name";
        }
        else{
            $categoryname = $_POST['categoryname'];
            $query = "INSERT INTO category(categoryName) VALUES('$categoryname')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product add successfully');
                    window.location.href='category.php';
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
                <h3 class="text-center">Add Category</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="product1" class="form-label fw-bold">CategoryName:</label>
                        <input type="text" id="product1" class="form-control" name="categoryname"
                            placeholder="Enter your product name">
                            <small><?php echo $categorynameerr; ?></small>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Add Category" name="addCategory">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>