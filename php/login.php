<?php
 session_start();
include('header.php')
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Feed The Seed</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/Free_Sample_By_Wix (1).jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
<header class="main-header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="images/Free_Sample_By_Wix (1).jpg" class="logo" alt=""></a>
            </div>
        </div>

    </nav>

</header>



    <div class="cart-box-main">
    <div class="container">
        <div class="row new-account-login">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="title-left">
                    <h3>Account Login</h3>
                </div>
                <h5><a data-toggle="collapse"  role="button" aria-expanded="false">Click here to Login</a></h5>
                <form  method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="InputEmail" class="mb-0">Email Address</label>
                            <input type="email" class="form-control"  name="InputEmail" placeholder="Enter Email"> </div>
                        <div class="form-group col-md-6">
                            <label for="InputPassword" class="mb-0">Password</label>
                            <input type="password" class="form-control" name="InputPassword" placeholder="Password"> </div>
                    </div>
                    <button type="submit" class="btn hvr-hover" name="log">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['log']))

{ $email=$_POST['InputEmail'];
    $pass=$_POST['InputPassword'];

    $con = mysqli_connect("localhost", "root", "", "feed_the_seed");
    if ($con->connect_error) {
        echo "failed to connect" . $this->con->connect_error;
    }
    $q1="SELECT user_id from user where email='$email' && password='$pass'";
    $result= mysqli_query($con,$q1);
    $num=mysqli_num_rows($result);
        if($num==1)
    {
        $_SESSION['email']=$email;
        header('location:index.php');

    }
    else{
       header('location:login.php');
    }

}
?>
</body>

</html>
