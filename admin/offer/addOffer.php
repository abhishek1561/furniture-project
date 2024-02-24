<?php 
include '../layout/header.php';
include '../../dbconnect/config.php';
$offernumbererr='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['addOffer'])){
        if(empty($_POST['offerNumber']) || $_POST['offerNumber']==''){
            $offernumbererr="*Please Enter your Offer Number";
        }
        else{
            $offerNumber = $_POST['offerNumber'];
            $query = "INSERT INTO offers(offerNumber) VALUES('$offerNumber')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your offer add successfully');
                    window.location.href='offer.php';
                </script>";
                
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
                <h3 class="text-center">Add Offer</h3>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="offernumber" class="form-label fw-bold">offer Number:</label>
                        <input type="number" id="offernumber" class="form-control" name="offerNumber"
                            placeholder="Enter your Offer">
                            <small><?php echo $offernumbererr; ?></small>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Add Offer" name="addOffer">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footer.php' ?>