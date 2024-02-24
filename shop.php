<?php include 'layout/header.php'; 
include 'dbconnect/config.php';
?>
<!-----------breadcrums section start-------------------->
<section class="breadcrum">
    <div class="container">
        <div class="row">
            <h1 class="text-white">Shop</h1>
        </div>
    </div>
</section>
<!-----------breadcrums section end-------------------->
<!------------shop hero section start-------------------->
<section class="shopSec">
        <div class="container">
            <div class="row">
            <?php
                $query="SELECT * FROM products";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 material-image">
                <div class="material_Image">
                <img src="admin/productimage/<?= $row['images']?>" alt="material image" class="img-fluid materialImg">
                </div>
                <span><?= $row['brand']?></span>
                <h3 class="material-title"><?= $row['productName']?></h3>
                <strong class="material-price"><?= 'INR '.number_format($row['price'],2)?></strong>
                <!-- <small class="d-block text-center"><?= $row['description']?></small> -->
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="formAddToCart">
                    <input type="hidden" value="<?= $row['p_id'];?>" name="productid">
                    <button class="btn btn-primary btrnAddToCart">Add To Cart</button>
                </form>
            </div>
            <?php
                    }
                }
            ?>
                
            </div>
        </div>
    </section>
<!------------shop hero section end-------------------->

<?php include 'layout/footer.php'; ?>