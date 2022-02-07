<?php
session_start();
include('header.php');
$con = mysqli_connect("localhost", "root", "", "feed_the_seed");
if ($con->connect_error) {
echo "failed to connect" . $this->con->connect_error;
}
$mail=$_SESSION['email'];
$q1="SELECT * from user where email='$mail'" ;
$result= mysqli_query($con,$q1);
?>

<div class="cart-box-main">
    <div class="container">
        <div class="row new-account-login px-5">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>MY Account</h3>
                </div>
                <?php
                while($r=mysqli_fetch_array($result))
                { ?>

<div align="center">
                <div class="form-row">
                    <div class="form-group col-md-6" >
                        <label for="InputEmail" class="mb-0">Username:</label>
                        <p disabled class="form-control"  name="InputEmail"> <?php echo $r['first_name'].' '.$r['last_name']?></div>
                </div>
    <div class="form-row">
                        <div class="form-group col-md-6" >
                                <label for="InputEmail" class="mb-0">Email Address:</label>
                                <p disabled class="form-control"  name="InputEmail"> <?php echo $r['email']?></div>
                        </div>
                <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputPassword" class="mb-0">Registered on :</label>
                                <p disabled class="form-control"  name="InputPassword" "><?php echo $r['register_date']?></div>
                    </div>

             <div class="form-row">
             <div class="form-group col-md-6">
            <label for="InputPassword" class="mb-0">my orders:</label>
            <p disabled class="form-control"  name="InputPassword" "><?php echo $r['orders']?? 'nil';?></div>
              </div>

                    <?
                }
                ?>
    <form method="post" enctype="multipart/form-data">
    <button type="submit" class="btn hvr-hover" name="logout">Logout</button>
    </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    unset($_SESSION['email']);
    header("location:login.php");
}
?>
