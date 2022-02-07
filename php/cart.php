
<?php

ob_start();
$user_id=$_GET['user-id'];
include('header.php')
?>
<?php
include('_header1.php')
?>

<?php
count($product->getData1('cart',$user_id))?include('template/_cart.php'):include('template/notfound/_cart_notfound.php');

?>
<?php
include('footer.php')
?>