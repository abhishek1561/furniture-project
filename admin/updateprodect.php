<?php
include 'layout/header.php';
include 'dashboard.php';
include '../dbconnect/config.php';
$pnameerr=$caterr=$branderr=$priceerr=$descriptionerr='';
if(isset($_POST['updateproduct'])){
    $id=$_POST['p_id'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_FILES['image']['name'] != ''){
            $imagename=$_FILES['image']['name'];
            $tmpname=$_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'productimage/'.$imagename);
        }else{
            $imagename=$_POST['oldimage'];
        }
    }
    if(empty($_POST['productname']) || $_POST['productname']==''){
        $pnameerr="*Please Enter your product name";
    }else if(empty($_POST['category']) || $_POST['category']==''){
        $caterr="*Please Enter your category";
    }else if(empty($_POST['brand']) || $_POST['brand']==''){
        $branderr="*Please Enter your brand";
    }else if((empty($_POST['price']) || $_POST['price']=='')){
        $priceerr="*Please Enter your price";
    }else if((empty($_POST['description']) || $_POST['description']=='')){
        $descriptionerr="*Your confirm description";
    }else{
        $productname = $_POST['productname'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        // $created_at = $_POST['created_at'];
        $query="UPDATE  products SET productName='$productname',category='$category',brand='$brand',price='$price',description='$description',images='$imagename' where p_id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your product addded successfully');
                window.location.href='product.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM products WHERE p_id=$id";
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
                <h3 class="text-center">UpdateProduct</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="text" value="<?= $row['productName'];?>" class="form-control" name="productname"
                            placeholder="Enter your product name">
                        <input type="hidden" value="<?= $row['p_id']?>" name="p_id">
                        <small style="color:red"> <?= $pnameerr?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" value="<?= $row['images']?>" name="image" class="form-control" />
                        <input type="hidden" value="<?= $row['images'];?>" name="oldimage" />
                        <img src="productimage/<?= $row['images'];?>" height="50px" width="80px" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="cate1" class="form-label  fw-bold">Category:</label>
                        <select name="category" id="cate1">
                            <option>--select--</option>
                            <?php
                                $cate="SELECT * FROM category";
                                $res=mysqli_query($con,$cate);
                                if(mysqli_num_rows($res)>0){
                                    while($category=mysqli_fetch_assoc($res)){
                                        ?>
                            <option <?php echo $row['category']==$category['categoryName']?'selected':'' ?>
                                value="<?= $category['categoryName']?>"><?= $category['categoryName']?></option>

                            <?php

                                    }
                                }
                            ?>
                        </select>
                        <small style="color:red"> <?= $caterr?></small>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label  fw-bold">Brand:</label>
                        <select name="brand" id="brand">
                            <option>--select--</option>
                            <?php
                                $brand="SELECT * FROM brand";
                                $res=mysqli_query($con,$brand);
                                if(mysqli_num_rows($res)>0){
                                    while($brand=mysqli_fetch_assoc($res)){
                                        ?>
                            <option <?php echo $row['brand']==$brand['brandName']?'selected':'' ?>
                                value="<?= $brand['brandName']?>"><?= $brand['brandName']?></option>

                            <?php

                                    }
                                }
                            ?>
                        </select>
                        <small style="color:red"> <?= $branderr?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">TotalPrice:</label>
                        <input type="text" value="<?= $row['price']?>" class="form-control" name="price"
                            placeholder="Enter your productprice name">
                        <small style="color:red"> <?= $priceerr ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label  fw-bold">Description:</label>
                        <input type="text" value="<?= $row['description']?>" class="form-control" name="description"
                            placeholder="Enter your description name">
                        <small style="color:red"> <?= $descriptionerr;?></small>
                    </div>
                    <input type="submit" class="btn btn-primary" name="updateproduct" value="Updateproduct">
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