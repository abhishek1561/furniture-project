<?php
include '../layout/header.php';
include '../dashboard.php';
include '../../dbconnect/config.php';
$offernumbererr='';
if(isset($_POST['updateoffer'])){
    $id=$_POST['o_id'];
    if(empty($_POST['offerNumber']) || $_POST['offerNumber']==''){
        $offernumbererr="*Please Enter your Offer";
    }else{
        $offerNumber = $_POST['offerNumber'];
        $query="UPDATE offers SET offerNumber='$offerNumber' WHERE o_id=$id";
        $result=mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your Offer update successfully');
                window.location.href='offer.php';
            </script>";
        }else{
            echo "something went wrong".mysqli_error($con);
        }
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $select="SELECT * FROM offers WHERE o_id=$id";
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
                <h3 class="text-center">Update Brand</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="offernumber" class="form-label fw-bold">Offer Number:</label>
                        <input type="number" value="<?= $row['offerNumber'];?>" id="offernumber" class="form-control" name="offerNumber"
                            placeholder="Enter your Offer">
                        <input type="hidden" value="<?= $row['o_id']?>" name="o_id">
                        <small style="color:red"> <?= $offernumbererr?></small>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="updateoffer" value="UpdateOffer">
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
include '../layout/footer.php';
?>