<?php include 'layout/header.php';
include '../dbconnect/config.php';
$productnameerr=$categoryerr=$branderr=$priceerr=$imageerr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addproduct'])){
        if(empty($_POST['productname']) || $_POST['productname']==''){
            $productnameerr="*Please Enter your product name";
        }else if(empty($_POST['category']) || $_POST['category']==''){
            $categoryerr="*Please Enter your category";
        }else if(empty($_POST['brand']) || $_POST['brand']==''){
            $branderr="*Please Enter your brand";
        }else if(empty($_POST['price']) || $_POST['price']==''){
            $priceerr="*Please Enter your price";
        }else if((empty($_FILES['image']['name']) || $_FILES['image']['name']=='')){
            $imageerr="*Please Enter your product image";
        }
        else{
            $imagename = $_FILES['image']['name'];
            $tmpname = $_FILES['image']['tmp_name'];
            move_uploaded_file( $tmpname,'productimage/'.$imagename);
            $productname = $_POST['productname'];
            $category = $_POST['category'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $query = "INSERT INTO products(productName,category,brand,price,images,description) VALUES('$productname','$category','$brand','$price','$imagename','$description')";
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
                        <label for="product1" class="form-label fw-bold">PoroductName:</label>
                        <input type="text" id="product1" class="form-control" name="productname"
                            placeholder="Enter your product name">
                            <small><?php echo $productnameerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="product2" class="form-label  fw-bold">Product Image:</label>
                        <input type="file" id="product2" name="image" class="form-control">
                        <small><?php echo $imageerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label  fw-bold">Category:</label>
                        <select name="category" class="form-control" id="category">
                            <option value="category">-Select-</option>
                            <option value="Wooden">Wooden</option>
                            <option value="Fiber">Fiber</option>
                            <option value="Plastic">Plastic</option>
                        </select>
                        <small><?php echo $categoryerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="product3" class="form-label  fw-bold">Brand:</label>
                        <select name="brand" class="form-control" id="product3">
                            <option value="brand">-Select-</option>
                            <option value="Sleepwell">Sleepwell</option>
                            <option value="Fiber">Fiber</option>
                            <option value="Plastic">Plastic</option>
                        </select>
                        <small><?php echo $branderr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="product4" class="form-label  fw-bold">TotalPrice:</label>
                        <input type="text" id="product4" class="form-control" name="price"
                            placeholder="Enter your productprice name">
                        <small><?php echo $priceerr; ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="product5" class="form-label  fw-bold">Description:</label>
                        <input type="text" id="product5" class="form-control" name="description"
                            placeholder="Enter your description name">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add Product" name="addproduct">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>