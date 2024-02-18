<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
$categorynameerr='';
if(isset($_POST['updatecategory'])){
    $id=$_POST['c_id'];
    if(empty($_POST['categoryname']) || $_POST['categoryname']==''){
        $categorynameerr="*Please Enter your category name";
    }else{
        $categoryname = $_POST['categoryname'];
        // $created_at = $_POST['created_at'];
        $query="UPDATE category SET categoryName='$categoryname' WHERE c_id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your category update sccessfully');
                window.location.href='category.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM category WHERE c_id=$id";
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
                <h3 class="text-center">Update Category</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="category" class="form-label fw-bold">CategoryName:</label>
                        <input type="text" value="<?= $row['categoryName'];?>" id="category" class="form-control" name="categoryname"
                            placeholder="Enter your Category name">
                        <input type="hidden" value="<?= $row['c_id']?>" name="c_id">
                        <small style="color:red"> <?= $categorynameerr?></small>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="updatecategory" value="Updateproduct">
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