<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="right-phone-box">

                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="myaccount.php"><i class="fa fa-user s_color"></i> My Account</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<header class="main-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/Free_Sample_By_Wix (1).jpg" class="logo" alt=""></a>
            </div>



            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php printf('%s?user-id=%s','about.php',$user_id)?>">About Us</a></li>

                    <li class="dropdown active">
                        <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php printf('%s?user-id=%s','seed.php',$user_id)?>">Sidebar Shop</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','cart.php',$user_id)?>">Cart</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','wishlist.php',$user_id)?>">Wishlist</a></li>
                            <li><a href="<?php printf('%s?user-id=%s','checkout.php',$user_id)?>">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php printf('%s?user-id=%s','contact-us.php',$user_id)?>">Contact us</a></li>


                </ul>
            </div>



            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li >
                        <a class="side-menu"href="<?php printf('%s?user-id=%s','cart.php',$user_id)?>"> <i class="fa fa-shopping-bag"></i>
                            <?php $count=count($product->getData1('cart',$user_id));?>
                            <span class="badge"><?php echo $count?></span>
                            <p>My Cart</p>

                        </a></li>
                </ul>
            </div>

        </div>



    </nav>

</header>



<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


            </div>
        </div>
    </div>
</div>

    