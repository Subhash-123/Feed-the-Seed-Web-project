


<?php
$user_id=$_GET['user-id'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord=$cart->deleteCart($_POST['item_id'],'cart',$_POST['user_id']);
    }
    if (isset($_POST['wishlist-submit'])){
        $cart->saveForLater($_POST['item_id'],'wishlist','cart',$_POST['user_id']);
    }
}
$cart1=$product->getData1('cart',$user_id);

?>


<div class="cart-box-main">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <div class="table-main table-responsive">

                   <table class="table">
                        <thead>
                       <tr>
                            <th>Images</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                           <th>Wishlist</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php

                        foreach($cart1 as $item):
                        $cart2=$product->getProduct($item['item_id']);
                        $subtotal[]=array_map(function($item){
                        ?>


                        <tr>
                          <td class="thumbnail-img">
                                <a href="#"><img class="img-fluid" src="<?php echo $item['item_image']?? "./images/cotton1.jpeg";?>" alt="nothing" />
                                </a>
                            </td>
                           <td class="name-pr">
                                <a href="#">
                                   <?php echo $item['item_name']??"unknown";?>
                                </a>
                            </td>
                            <td class="price-pr" >
                                <span >₹<?php echo $item['item_price']??0;?></span>
                            </td>
                            <td>
                                <div class="qty d-flex">
                                    <div class="d-flex font-rale w-25">


                                        <button class="qty-up border bg-light"  data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" name="id1" data-id="<?php echo $item['item_id'] ?? '0'; ?>" class="qty_input" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><i class="fas fa-angle-down"></i></button>

                                    </div></div></td>

                                <td class="product_price" data-id="<?php echo $item['item_id']?? 0; ?>">
                                <p><?php echo $item['item_price']??0;?></p>

                            </td>

                            <td class="remove-pr">
                                <form method="post">
                                    <?php $user_id=$_GET['user-id'];?>
                                    <input type="hidden"name="user_id" value="<?php echo $user_id;?>">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? 0;?>">
                                <button type="submit" name="delete-cart-submit" class="btn">
                                    <i class="fas fa-times"></i>
                                </button>
                                </form>
                            </td>
                            <td>
                                <form method="post">
                                    <?php $user_id=$_GET['user-id'];?>
                                    <input type="hidden"name="user_id" value="<?php echo $user_id;?>">
                                    <input type="hidden" value="<?php echo $item['item_id']?? 0;?>"name="item_id">
                                    <button type="submit" name="wishlist-submit" class="btn">
                                      Add
                                    </button>
                                </form>
                            </td>
                        </tr>
                            <?php
                            return $item['item_price'];
                        },$cart2); endforeach;

                        ?>
                        </tbody>

                    </table>

                </div>

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
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input type="hidden" value="<?php echo $item['item_id']?? 0;?>"name="item_id">
                        <input value="Update Cart"  type="submit" >
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

                </div>

            </div>
                <hr>
        </div>


            <div class="col-12 d-flex shopping-box"><a href="<?php printf('%s?user-id=%s','checkout.php',$user_id)?>" class="ml-auto btn hvr-hover">Checkout</a> </div>

        </div>
    </div>

    </div>
</div>





