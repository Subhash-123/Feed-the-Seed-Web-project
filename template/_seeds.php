<!--   product  -->
<?php
$product_shuffle=$product->getData();
shuffle($product_shuffle);
if($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_POST['seeds_submit'])) {

        $cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }

}
$user_id=$_GET['user-id'];
?>

<?php

$type=array_map(function($pro){if($pro['item_brand']=='seeds'){return $pro['item_type'];}
else return null;},$product_shuffle);

$unique=array_unique($type);
sort($unique);

?>
<?php
$type1=array_map(function($pro){if($pro['item_brand']=='pesticides'){return $pro['item_type'];}
else return null;},$product_shuffle);
$unique1=array_unique($type1);
sort($unique1);
$type2=array_map(function($pro){if($pro['item_brand']=='fertilizers'){return $pro['item_type'];}
else return null;},$product_shuffle);
$unique2=array_unique($type2);
sort($unique2);


?>


<section id="special-list" xmlns="http://www.w3.org/1999/html">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Our Products</h1>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">



                    <div class="button-group filter-button-group" role="group">
                        <button class="active" data-filter="*">All</button>

                    <div class="button-group filter-button-group" role="group">
                            <button id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Seeds</button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <?php

                                array_map(function($type){
                                    printf('<button class ="dropdown-item " data-filter=".%s">%s</button>',$type,$type);
                                },$unique);
                                ?>
                            </div>
                        </div>

                    <div class="button-group filter-button-group" role="group">
                            <button id="btnGroupDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">pesticides</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                        <?php

                        array_map(function($type1){
                            printf('<button class ="dropdown-item" data-filter=".%s">%s</button>',$type1,$type1);
                        },$unique1);
                        ?>
                    </div>

                        </div>



                    <div class="button-group filter-button-group" role="group">
                        <button id="btnGroupDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fertilizers</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                            <?php

                            array_map(function($type2){
                                printf('<button class ="dropdown-item" data-filter=".%s">%s</button>',$type2,$type2);
                            },$unique2);
                            ?>
                        </div>
                    </div>
                    </div>




                    </div>





                    </div>

                    </div>
                </div>



        <div class="row special-list">
            <?php foreach($product_shuffle as $item){?>
                <div class="col-lg-3 col-md-6 special-grid <?php echo $item['item_type']??"unknown";?>">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="<?php echo $item['item_image']??"./images/cotton1.jpeg";?>" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <button style="background-color: #b0b435"><a  data-toggle="tooltip" data-placement="right" title="View" href="<?php printf('%s?item_id=%s&user-id=%s','view.php',$item['item_id'],$user_id)?>" ><i class="far fa-eye"></i></a></button>



                                <form method="post"  enctype="multipart/form-data">

                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']??"1";?>">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                                    <?php
                                    if(in_array($item['item_id'],$cart->getCardid($product->getData1('cart',$user_id))??[])){
                                        echo '<button disabled class=" cart btn-group text-black-50 bg-success"  type="submit">In the Cart</button>';
                                    }
                                    else{
                                      echo'<button type="submit" class="cart btn-group" name="seeds_submit" style="background-color: #b0b435">Add to Cart</button></a>';
                                    }
                                    ?>
                                </form>





                            </div>
                        </div>
                        <div class="why-text">
                            <h4><?php echo $item['item_name']?? "unknown";?></h4>
                            <h5>₹<?php echo $item['item_price']?? '0';?></h5>
                        </div>
                    </div>
                </div>
            <?}
            //?>


        </div>
    </div>

</section>

