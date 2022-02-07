<?php
if($_SERVER['REQUEST_METHOD']=="POST") {

    if (isset($_POST['top_submit'])){
        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }

}
?>

<?php
$item_id=$_GET['item_id']??1;

foreach($product->getData() as $item):
    if($item['item_id']==$item_id):

?>
<section id="view" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="pro-img-details">
                    <div class="px-0"><img src="<?php echo $item['item_image']?? "./images/cotton1.jpeg";?>"  style="width: 80%" alt=""></div>
                    <div class="form-row px-5 font-size-16" >
                        <form method="post"  enctype="multipart/form-data">
                           <?php $user_id=$_GET['user-id'];?>
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']??"1";?>">
                            <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                            <?php
                    if(in_array($item['item_id'],$cart->getCardid($product->getData1('cart',$user_id))??[])){
                        echo '<button type="submit" disabled class="btn btn-round btn-success px-5" ">In the Cart</button>';
                    }
                    else{
                        echo' <button type="submit" name="top_submit" class="btn btn-round btn-danger px-5 "><i class="fa fa-shopping-cart"></i> Add to Cart</button>';
                    }
                    ?>
                    <button  type="submit" class="btn btn-round btn-danger "><i class="fa fa-shopping-cart"></i>Proceed to Buy</button>
                        </form>
                    </div></div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="pro-d-title py-4">
                    <b><?php echo $item['item_name']?? "unknown";?></b>
                </h5>
                <p>
                    seeds are important primarily because they are sources of a variety of foods—for example, the cereal grains, such as wheat, rice, and corn (maize); the seeds of beans, peas, peanuts, soybeans, almonds, sunflowers, hazelnuts, walnuts, pecans, and Brazil nuts. Other useful products provided by seeds are abundant.</p>
                <div class="product_meta">
                    <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">Bollgard-2</a>, <a rel="tag" href="#">Nuziveedu</a>, <a rel="tag" href="#">Raasi</a>, <a rel="tag" href="#">Growmore</a>.</span>
                    <span class="tagged_as"><strong>types:</strong> <a rel="tag" href="#">rabi</a>, <a rel="tag" href="#">kariff</a>.</span>
                </div>
                <div class="m-bot15"> <strong>Price : </strong> <span class="pro-price">₹<?php echo $item['item_price']?? 0;?></span></div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="quantiy" placeholder="1" class="form-control quantity">
                </div>
            </div>




        </div>
    </div>
</section>
<?php
endif;
endforeach;
?>
