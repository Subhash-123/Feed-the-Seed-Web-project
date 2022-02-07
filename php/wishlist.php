
<?php
ob_start();
$user_id=$_GET['user-id'];
include('header.php')
?>
<?php
include('_header1.php')
?>
<?php
count($product->getData1('wishlist',$user_id))?include('template/_wish.php'):include('template/notfound/_wish_notfound.php');

?>
<?php
include('footer.php')
?>
