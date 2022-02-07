


<header class="main-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="images/Free_Sample_By_Wix (1).jpg" class="logo" alt=""></a>
            </div>



            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php printf('%s?user-id=%s','about.php',$user_id)?>">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php printf('%s?user-id=%s','seed.php',$user_id)?>">Sidebar Shop</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','cart.php',$user_id)?>">Cart</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','wishlist.php',$user_id)?>">Wishlist</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','checkout.php',$user_id)?>">Checkout</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href=""<?php printf('%s?user-id=%s','contact-us.php',$user_id)?>"">Contact Us</a></li>
                </ul>
            </div>


            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a class="side-menu"href="<?php printf('%s?user-id=%s','cart.php',$user_id)?>"> <i class="fa fa-shopping-bag"></i>
                            <?php $count=count($product->getData1('cart',$user_id));?>
                            <span class="badge"><?php echo $count?></span>
                            <p>My Cart</p>

                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

</header>
