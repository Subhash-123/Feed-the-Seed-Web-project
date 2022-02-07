<?php
session_start();
include('header.php')
?>

<?php


$con = mysqli_connect("localhost", "root", "", "feed_the_seed");
if ($con->connect_error) {
    echo "failed to connect" . $this->con->connect_error;
}
$q1="SELECT user_id from user where email='".$_SESSION['email']."'" ;
$result= mysqli_query($con,$q1);
$row=mysqli_fetch_array($result);
$user_id=$row['user_id'];
?>
<?php
include('template/_accunt.php')
?>
<?php
include('template/_header2.php')
?>

<?php
include('template/_search.php')
?>


<?php
include('template/_product.php')
?>


<?php
include('footer.php')
?>
