<?php
include('adindex.php')?>
<?php $id=$_GET['item-id'];
$con=mysqli_connect("localhost","root","","feed_the_seed");
if($con->connect_error) {
    echo "failed to connect" . $this->con->connect_error;
}
$resultArray = array();
$result=mysqli_query($con,"select * from product where item_id='$id'");
while ($item = mysqli_fetch_array($result)){
    ?>


?>
<div class="c1">
    <h3 align="center">Add new product</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="c2">
                 <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div class="c2">
                <input type="text" name="pic" value="<?php echo $item['item_image'];?>">
            </div>
            <div class="c2">
                Category: <input type="text" name="cat" value="<?php echo $item['item_brand'];?>" placeholder="Enter the product category" style="padding: 6px;padding-left: 60px; width: 60%">
            </div>
            <div class="c2">
                product name:  <input type="text" name="pname" value="<?php echo $item['item_name'];?>" placeholder="Enter the product Name" style="padding: 6px;padding-left: 60px; width: 60%">
            </div>

            <div class="c2">

               product price: <input type="number" name="price" value="<?php echo $item['item_price'];?>" placeholder="Enter the product price" style="padding: 6px;padding-left: 60px; width: 60%">
            </div>
            <div class="c2">
               <img src="<?php echo $item['item_image'];?>" width="100px" height="100px" style="border: 1px solid  #333333; width:40% ;margin-left: 0px;">
                <p  align="left" style="padding-left: 20%"><b>select the product image</b></p>


                <input type="file" name="image" style="padding: 6px;padding-left: 60px; width: 60%">
            </div>
            <div class="c2">

               Product type: <input type="text" name="type" value="<?php echo $item['item_type'];?>" placeholder="Enter the product type" style="padding: 6px;padding-left: 60px; width: 60%">
            </div>
            <div class="c2">
                <?}?>

                <input type="submit" name="up" value=" Update Product"  style="padding: 5px; width: 90%">
            </div>


        </fieldset>
    </form>
        <?php
        if(isset($_POST['up'])) {


            $con = mysqli_connect("localhost", "root", "", "feed_the_seed");
            if ($con->connect_error) {
                echo "failed to connect" . $this->con->connect_error;
            }
            $id = $_POST['id'];
            $cat = $_POST['cat'];
            $pname = $_POST['pname'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $dt = date("Y-m-d H:i:s");
            if (!empty($_FILES['image']['name'])) {
                $dir = "./images/";
                $imagename = str_replace('', '-', strtolower($_FILES['image']['name']));
                $newimage = $dir . $imagename;
                $db1= mysqli_query($con, "Update  product SET item_brand='$cat', item_name='$pname', item_price='$price', item_image='$newimage',item_type='$type' where item_id='$id'");
                if($db1){
                    echo '<script>';
                    echo 'alert("UP Successfully")';
                    echo '</script>';
                }

            }
            else{
                $db2=mysqli_query($con, "Update  product SET item_brand='$cat', item_name='$pname', item_price='$price',item_type='$type' where item_id='$id'");
                if($db2){
                    echo '<script>';
                    echo 'alert("U Successfully")';
                    echo '</script>';
                }

            }

        }
        ?>
</div>

</body>
</html>