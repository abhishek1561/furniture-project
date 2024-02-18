<?php

include 'layout/header.php';
include '../dbconnect/config.php';
include 'dashboard.php';
?>

<!-- ============================================================================ -->
<!-- code of from html start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <table class="table ">
                    <h2 class="pt-5" style="text-align:center;">User Table</h2>
                    <button class="btn btn-primary  m-2"><a href="../signUp.php"style="color:#fff;text-decoration:none;">Add Users</a></button>
                    <thead class="table-heading">
                        <tr>
                            <th>Id</th>
                            <th>First-Name</th>
                            <th>Last-Name</th>
                            <th>Email</th>
                            <th>Phone-No</th>
                            <th>Role</th>
                            <th>TimeStamp</th>
                            <th>Action</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                    <?php
                            $query="SELECT * FROM users";
                            $result=mysqli_query($con,$query);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                //print_r($row);
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['FirstName'] ?></td>
                            <td><?php echo $row['LastName'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['Role'] ?></td>
                            <td><?php echo $row['Timestamp'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href='<?php echo "userUpdate.php?id=$row[id]";?>' class="btn btn-primary"><i
                                            class="fa-solid fa-pen-nib"></i></a>
                                    <a href='<?php echo "userdelete.php?id=$row[id]";?>' class="btn btn-danger"><i
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
</section>
<!-- code of form html end-->
<!-- ============================================================================ -->
<?php include 'layout/footer.php'?>