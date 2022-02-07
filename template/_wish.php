
<?php
$user_id=$_GET['user-id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-wish-submit'])){
        $deletedrecord=$cart->deleteCart($_POST['item_id'],'wishlist',$_POST['user_id']);
    }

    if(isset($_POST['cart-submit'])){
        $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist',$_POST['user_id']);
    }
}

$wish=$product->getData1('wishlist',$user_id)
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h1>Wishlist</h1>


        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($wish as $item) :
                    $cart1= $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>

                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h3><?php echo $item['item_name'] ?? "Unknown"; ?></h3>
                                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>



                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <?php $user_id=$_GET['user-id'];?>
                                        <input type="hidden"name="user_id" value="<?php echo $user_id;?>">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-wish-submit" class="btn  text-danger font-weight-bold px-3 border-right">Delete</button>
                                    </form>

                                    <form method="post">
                                        <?php $user_id=$_GET['user-id'];?>
                                        <input type="hidden"name="user_id" value="<?php echo $user_id;?>">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-weight-bold text-success">Add to Cart</button>
                                    </form>


                                </div>
                                <!-- !product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-weight-bold">
                                    ₹<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['item_price'];
                    }, $cart1); // closing array_map function
                endforeach;
                ?>
            </div>

        </div>

    </div>
</section>












