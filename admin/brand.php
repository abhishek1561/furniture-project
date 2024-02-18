<?php include 'layout/header.php';
include '../dbconnect/config.php';
include 'dashboard.php';
 ?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <h3 class="text-center pt-3">Brand Table</h3>
                <table class="table" border="1">
                    <button class="btn btn-primary  m-2"><a href="addBrand.php"style="color:#fff;text-decoration:none;">Add Brand</a></button>
                    <thead>
                        <tr>
                            <th scope="col">Brand ID</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM brand";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                // print_r($row);
                          
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row['b_id'];?></td>
                            <td><?php echo $row['brandName'];?></td>
                            <td><?php echo $row['time_At'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo "updatebrand.php?id=$row[b_id]"; ?>" class="btn btn-primary"><i
                                            class="fa-solid fa-pen-nib"></i></a>
                                    <a href="<?php echo "deletebrand.php?id=$row[b_id]";?>" class="btn btn-danger"><i
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