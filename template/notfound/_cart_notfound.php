



<div class="cart-box-main">
    <div class="container">
        <div class="row border-top py-3 mt-3">
            <div class="col-lg-12 text-center py-2">
                <img src="./images/emptycart.jpg" alt="Empty Cart"class="img-fluid" style="height: 250px">
                <p class="alert-danger font-weight-bold">Empty Cart</p>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <!--div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div-->
                </div>
            </div>

        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total</h4>
                        <span  class="ml-auto font-weight-bold">
                            <span>₹</span>
                            <span id="deal-price" ><?php echo isset($subtotal)?$cart->getSum($subtotal):0 ?></span>
                    </div>

                    <hr> </div>
            </div>

    </div>
</div>




