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
                            <th scope="col">Contact ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Create Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query="SELECT * FROM contact";
                        $result=mysqli_query($con,$query);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){

                          
                        ?>
                        <tr>
                            <td scope="row"><?php $row['c-id'];?></td>
                            <td><?php $row['firstName'];?></td>
                            <td><?php $row['lastName'];?></td>
                            <td><?php $row['email'];?></td>
                            <td><?php $row['message'];?></td>
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