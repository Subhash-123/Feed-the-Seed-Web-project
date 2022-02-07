<?php
require('database/dbcontroller.php');
require("database/product.php");
require("database/cart.php");
$db=new dbcontroller();

$product=new product($db);
$product_shuffle=$product->getData();
shuffle($product_shuffle);
$cart=new cart($db);




