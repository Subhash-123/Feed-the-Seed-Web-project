<?php

// require MySQL Connection
require ('../database/dbController.php');

// require Product Class
require ('../database/product.php');

// DBController object
$db = new dbcontroller();

// Product object
$product = new product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
