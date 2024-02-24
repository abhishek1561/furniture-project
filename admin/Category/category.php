<?php include '../layout/header.php';
include '../../dbconnect/config.php';
include '../dashboard.php';
 ?>
<div class="productlist">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <h3 class="text-center pt-3">Category Table</h3>
                <table class="table" border="1">
                    <button class="btn btn-primary  m-2"><a href="addCategory.php"style="color:#fff;text-decoration:none;">Add Category</a></button>
                    <thead>
                        <tr>
                            <th scope="col">Category ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM category";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)){
                            while($row=mysqli_fetch_assoc($result)){
                                // print_r($row);
                          
                        ?>
                        <tr>
                            <td scope="row"><?php echo $row['c_id'];?></td>
                            <td><?php echo $row['categoryName'];?></td>
                            <td><?php echo $row['time_At'];?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo "updatecategory.php?id=$row[c_id]"; ?>" class="btn btn-primary"><i
                                            class="fa-solid fa-pen-nib"></i></a>
                                    <a href="<?php echo "deletecategory.php?id=$row[c_id]";?>" class="btn btn-danger"><i
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
<?php include '../layout/footer.php'?>