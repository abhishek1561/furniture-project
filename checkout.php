<?php include 'layout/header.php'; ?>
<!-- ====================================================== -->
<!-- ------------------------------checkout Section Start ------------------------------------->
<section class="checkout">
    <div class="container">
        <div class="row">
            <h1 class="checkout-heading">CHECKOUT</h1>
        </div>
    </div>
</section>
<!-- ---------------- -->
<section class="checkoutSec">
    <div class="container">
        <div class="row">
            <div class="clo-lg-12 returningBox">
                <p class="checkoutSec-des">Returning customer? <a href="#">Click here</a> to login</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="billing-details">Billing Details</h2>
<!-- =================================================================================================================================== -->
<!-- ========================================[ BILLING DETAILS FORM START ]====================================================== -->
                <form action="#" class="billingDetailForm">

                    <div class="mb-3">
                        <label for="selectbox" class="form-label">Country <span class="impArea">*</span></label>
                        <select class="form-control" id="selectbox">
                            <option selected>Select a country</option>
                            <option value="1">Afganistan</option>
                            <option value="2">Bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Colombia</option>
                            <option value="5">Ghana</option>
                            <option value="6">India</option>
                            <option value="7">Ghutan</option>
                            <option value="8">Nepal</option>
                        </select>
                    </div>

                    <div class="mb-3 fnameAria">
                        <label for="fNameText" class="form-label">First Name <span class="impArea">*</span></label>
                        <input type="text" class="form-control firstName" id="fNameText">
                    </div>
                    <div class="mb-3 lnameAria">
                        <label for="lNameText" class="form-label">Last Name <span class="impArea">*</span></label>
                        <input type="text" class="form-control lastName" id="lNameText">
                    </div>

                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName">
                    </div>

                    <div class="mb-3">
                        <label for="addressName" class="form-label">Address <span class="impArea">*</span></label>
                        <input type="email" class="form-control addressarea" id="addressName"
                            placeholder="street address">
                        <input type="email" class="form-control" id="addressName"
                            placeholder="Apartment, suite, unit etc.(optional)">
                    </div>

                    <div class="mb-3 fnameAria">
                        <label for="cNameText" class="form-label">State/Country <span class="impArea">*</span></label>
                        <input type="text" class="form-control firstName" id="cNameText">
                    </div>
                    <div class="mb-3 lnameAria">
                        <label for="zNameText" class="form-label">Posta/Zip <span class="impArea">*</span></label>
                        <input type="text" class="form-control lastName" id="zNameText">
                    </div>

                    <div class="mb-3 fnameAria">
                        <label for="eNameText" class="form-label">Email Address <span class="impArea">*</span></label>
                        <input type="text" class="form-control firstName" id="eNameText">
                    </div>
                    <div class="mb-3 lnameAria">
                        <label for="pNameText" class="form-label">Phone <span class="impArea">*</span></label>
                        <input type="text" class="form-control lastName" id="pNameText">
                    </div>
<!-- -=============================[ BILLING DETAILS FORM END ]============================================================== -->
<!-- ======================================================================================================================= -->

<!-- ------------------------Check box form 1 -------------------------- -->

<!-- ======================================================================================================================== -->
 <!-- ===================================[ FIRST CHECKBOX HERE ]============================= -->
                    <div class="form-check">
                        <input class="checkarea" type="checkbox" value="" id="radioCheckbtn1" data-bs-toggle="collapse"
                            href="#collapseradiocheck1" aria-expanded="false">
                        <label class="checkarea1" for="radioCheckbtn1" class="form-label">Create an account?</label>
                    </div>
                    <div class="collapse" id="collapseradiocheck1">
                        <div class="collapse-des">
                            Make your payment directly into our bank account. Please use your Order ID as the
                            payment reference. Your order won’t be shipped until the funds have cleared in our
                            account.
                        </div>
                    </div>
                    <div class="collapse" id="collapseradiocheck1">
                        <label for="pass" class="form-label">Account Password</label>
                        <input type="password" class="form-control accountPass" id="pass">
                    </div>
<!-- ================================[ FIRST CHECKBOX HERE ]===================================== -->
<!-- ============================================================================================================================ -->

<!-- ---------------------Check box form 2  Start----------------------- -->

<!-- ============================================================================================ -->
<!-- =============================[ CHECKBOX FORM 2 HERE ]================================-->
                    <div class="form-check">
                        <input class="checkarea" type="checkbox" value="" id="radioCheckbtn1" data-bs-toggle="collapse"
                            href="#collapseradiocheck2" aria-expanded="false">
                        <label class="checkarea1" for="radioCheckbtn1" class="form-label">Create an account?</label>
                    </div>
                    <div class="collapse" id="collapseradiocheck2">
                        <label for="selectbox" class="form-label">Country <span class="impArea">*</span></label>
                        <select class="form-control" id="selectbox">
                            <option selected>Select a country</option>
                            <option value="1">Afganistan</option>
                            <option value="2">Bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Colombia</option>
                            <option value="5">Ghana</option>
                            <option value="6">India</option>
                            <option value="7">Ghutan</option>
                            <option value="8">Nepal</option>
                        </select>
                    </div>
                    <div class="collapse" id="collapseradiocheck2">
                        <div class="mb-3 fnameAria">
                            <label for="fNameText" class="form-label">First Name <span class="impArea">*</span></label>
                            <input type="text" class="form-control firstName" id="fNameText">
                        </div>
                        <div class="mb-3 lnameAria">
                            <label for="lNameText" class="form-label">Last Name <span class="impArea">*</span></label>
                            <input type="text" class="form-control lastName" id="lNameText">
                        </div>
                    </div>
                    <div class="collapse" id="collapseradiocheck2">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName">
                    </div>

                    <div class="collapse" id="collapseradiocheck2">
                        <label for="addressName" class="form-label">Address <span class="impArea">*</span></label>
                        <input type="text" class="form-control addressarea" id="addressName"
                            placeholder="street address">
                        <input type="text" class="form-control" id="addressName"
                            placeholder="Apartment, suite, unit etc.(optional)">
                    </div>
                    <div class="collapse" id="collapseradiocheck2">
                        <div class="mb-3 fnameAria">
                            <label for="cNameText" class="form-label">State/Country <span
                                    class="impArea">*</span></label>
                            <input type="text" class="form-control firstName" id="cNameText">
                        </div>
                        <div class="mb-3 lnameAria">
                            <label for="zNameText" class="form-label">Posta/Zip <span class="impArea">*</span></label>
                            <input type="text" class="form-control lastName" id="zNameText">
                        </div>

                        <div class="mb-3 fnameAria">
                            <label for="eNameText" class="form-label">Email Address <span
                                    class="impArea">*</span></label>
                            <input type="text" class="form-control firstName" id="eNameText">
                        </div>
                        <div class="mb-3 lnameAria">
                            <label for="pNameText" class="form-label">Phone <span class="impArea">*</span></label>
                            <input type="text" class="form-control lastName" id="pNameText">
                        </div>
                    </div>
                    <!-- =============================[ END CHECKBOX FORM 2 HERE ]================================-->
                    <!-- =================================================================================================== -->
                    <!-- --------------------------------Check box form 2 End----------------------------------------- -->

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                            style="resize:none"></textarea>
                    </div>

                </form>
            </div>
            <div class="col-lg-6">
                <h2 class="coupon-code">Coupon Code</h2>
                <form action="#" class="couponCodeForm">
                    <p>Enter your coupon code if you have one</p>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="coupon code">
                    </div>

                    <button
                        class="btn rounded-pill coupon-btn btn-dark border border-dark text-white px-4 py-2">Apply</button>

                </form>

                <h2 class="coupon-code mt-5">Your Order</h2>
<!-- ============================================================================================================ -->

<!-- =============================[ ORDER FORM START ]===================================================== -->
                <form action="#" class="couponCodeForm">
                    <table class="yourOrderTable">
                        <thead class="table-heading">
                            <tr>
                                <th>Product</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Top Up T-Shirt <b>x</b> 1</td>
                                <td>$250.00</td>
                            </tr>
                            <tr>
                                <td>Polo T-Shirt <b>x</b> 1</td>
                                <td>$100.00</td>
                            </tr>
                            <tr>
                                <th>Cart Subtotal</th>
                                <th scope="row">$230.00</th>
                            </tr>
                            <tr>
                                <th>Total Order</th>
                                <th scope="row">$230.00</th>
                            </tr>
                        </tbody>
                    </table>
<!-- =========================================================================================================== -->

<!-- ============================[ COLLAPSE DEIVISION START ]========================================== -->

            <!-- ===========------------------------COLLAPSE 1 START----------------------------------============= -->
                    <div class="mb-3 border border-1 rounded p-1 px-4">
                        <p class="d-inline-flex gap-1">
                            <a class="collapse-anchor" data-bs-toggle="collapse" href="#collapse1"
                                aria-expanded="false">Direct Bank Transfer</a>
                        </p>
                        <div class="collapse" id="collapse1">
                            <div class="collapse-des">
                                Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our
                                account.
                            </div>
                        </div>
                    </div>
            <!-- ===========------------------------COLLAPSE 2 START----------------------------------============= -->
                    <div class="mb-3 border border-1 rounded p-1 px-4">
                        <p class="d-inline-flex gap-1">
                            <a class="collapse-anchor" data-bs-toggle="collapse" href="#collapse2"
                                aria-expanded="false">Cheque Payment</a>
                        </p>
                        <div class="collapse" id="collapse2">
                            <div class="collapse-des">
                                Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our
                                account.
                            </div>
                        </div>
                    </div>
            <!-- ===========------------------------COLLAPSE 3 START----------------------------------============= -->
                    <div class="mb-3 border border-1 rounded p-1 px-4">
                        <p class="d-inline-flex gap-1">
                            <a class="collapse-anchor" data-bs-toggle="collapse" href="#collapse3"
                                aria-expanded="false">Paypal</a>
                        </p>
                        <div class="collapse" id="collapse3">
                            <div class="collapse-des">
                                Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our
                                account.
                            </div>
                        </div>
                    </div>
<!-- ===============================[ COLLAPSE DIVISION END ]===================================== -->
                    <a href="placeOrder.php"
                        class="btn rounded-pill coupon-btn btn-dark border border-dark text-white px-5 py-3">Place
                        Order</a>

                </form>
<!-- ===================================================================================================================== -->
<!-- ===============================[ ORDER FORM END ]=========================================== -->
            </div>
        </div>
    </div>
</section>
<!-- --------------------------------checkout Section End ------------------------------------------------>

<!-- =================FOOTER LINK========================================== -->
<?php include 'layout/footer.php'; ?>
<!-- =================================================== -->