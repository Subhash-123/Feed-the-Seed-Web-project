
<?php
$id=$_GET['item-id'];
$con=mysqli_connect("localhost","root","","feed_the_seed");
if($con->connect_error) {
    echo "failed to connect" . $this->con->connect_error;
}

//mysqli_query($con,"delete from product where item_id='$id'");
mysqli_query($con,"delete from product where item_id='$id'");
header("location:viewpr.php");
?>
