<?php include 'layout/header.php';
include '../dbconnect/config.php';
include 'dashboard.php';
 ?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <h3 class="text-center pt-3">Product List</h3>
                <table class="table" border="1">
                    <button class="btn btn-primary  m-2"><a href="addProduct.php"style="color:#fff;text-decoration:none;">Add Product</a></button>
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM products";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                // print_r($row);
                          
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row['p_id'];?></td>
                            <td><?php echo $row['productName'];?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['brand'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td><img src="productimage/<?php echo $row['images'];?>" alt="" height="80px" width="80px">
                            </td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['create_At'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo "updateprodect.php?id=$row[p_id]"; ?>" class="btn btn-primary"><i
                                            class="fa-solid fa-pen-nib"></i></a>
                                    <a href="<?php echo "deleteproduct.php?id=$row[p_id]";?>" class="btn btn-danger"><i
                                            class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php 
                          }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php'?>