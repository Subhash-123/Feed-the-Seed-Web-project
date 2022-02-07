<?php
include('header.php')
?>
<?php
ob_start();
$user_id=$_GET['user-id'];
include('_header1.php')
?>
<?php
include('template/_view.php')
?>


<?php
include('footer.php')
?>