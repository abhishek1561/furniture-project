<?php include 'layout/header.php'; ?>
<!-- cart section strat -->
<section class="cart">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table ">
                    <thead class="table-heading">
                        <tr>
                            <th scope="col-lg-2 col-md-2 col-sm-2">Image</th>
                            <th scope="col-lg-2 col-md-2 col-sm-2">Product</th>
                            <th scope="col-lg-2 col-md-2 col-sm-2">Price</th>
                            <th scope="col-lg-2 col-md-2 col-sm-2">Quantity</th>
                            <th class="col-lg-2 col-md-2 col-sm-2">Total</th>
                            <th class="col-lg-2 col-md-2 col-sm-2">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-lg-2 col-md-2 col-sm-2"><img src="images/product-1.png" alt="" class="img-fluid" style="height:150px; width:150px"></td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><b>Product 1</b>
                            </td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2">
                                <span class="minus">-</span>
                                <input type="text" value="1"/>
                                <span class="plus">+</span>
                            </td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><a href="#">X</a></td>
                        </tr>
                        <tr>
                            <td class="col-lg-2 col-md-2 col-sm-2"><img src="images/product-2.png" alt="" class="img-fluid" style="height:150px; width:150px"></td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><b>Product 2</b></td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2">
                                <span class="minus">-</span>
                                <input type="text" value="1"/>
                                <span class="plus">+</span>
                            </td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><a href="#">X</a></td>
                        </tr>
                        <tr>
                            <td class="col-lg-2 col-md-2 col-sm-2"><img src="images/product-3.png" alt="" class="img-fluid" style="height:150px; width:150px"></td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><b>Product 3</b></td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2">
                                <span class="minus">-</span>
                                <input type="text" value="1"/>
                                <span class="plus">+</span>
                            </td>
                            <td class="col-lg-2 col-md-2 col-sm-2">$49.00</td>
                            <td class="col-lg-2 col-md-2 col-sm-2"><a href="#">X</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row cart-second">
            <div class="col-lg-6">
                <button class="btn rounded-pill btn-dark border border-dark text-white px-4 py-2">Update Cart</button>
                <button class="btn rounded-pill btn-dark border border-dark text-white mx-5 px-4 py-2">Continue Shoping</button>
                <div class="coupon">
                    <h3 class="coupon-heading">Coupon</h3>
                    <label for="couponType" class="form-label">Enter your coupon code if you have one.</label>
                    <input type="text" id="couponType" class="form-control" placeholder="Coupon Code">
                    <button class="btn rounded-pill coupon-btn btn-dark border border-dark text-white px-4 py-2">Apply Coupon</button>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <h3 class="cart-details">CART TOTALS</h3>
                <table class="cartDetailTable">
                    <tr>
                        <td>Subtotal</td>
                        <th scope="row">$230.00</th>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <th scope="row">$230.00</th>
                    </tr>
                </table>
                    <button class="btn rounded-pill btn-dark border border-dark text-white my-5"><a href="checkout.php" class="cartButton">Proceed To Checkout</a></button>
                
            </div>
        </div>
    </div>
</section>

<!-- cart section end -->
<?php include 'layout/footer.php'; ?>