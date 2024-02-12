<?php include 'layout/header.php';
include '../dbconnect/config.php';
 ?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center pt-3">Product List</h3>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM product";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){

                          
                        ?>
                        <tr>
                            <td scope="row"><?php $row['p_id'];?></td>
                            <td><?php $row['productname'];?></td>
                            <td><?php $row['category'];?></td>
                            <td><?php $row['brand'];?></td>
                            <td><?php $row['price'];?></td>
                            <td><img src="productimage/<?php $row['image'];?>" alt="" height="80px" width="80px"></td>
                            <td><?php $row['descreption'];?></td>
                            <td><?php $row['created_at'];?></td>
                            <td><a href="updateprodect.php?id=<?php $row['p_id'];?>" class="mx-2"><i class="fa-solid fa-pen"></i></a>
                            <a href="deleteproduct.php?id=<?php $row['p_id'];?>" class="mx-2"><i class="fa-regular fa-trash-can"></i></a></td>
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
<?php include 'layout/footer.php' ?>