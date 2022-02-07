<?php
include ('adindex.php');
?>
<?php
$con=mysqli_connect("localhost","root","","feed_the_seed");
if($con->connect_error) {
    echo "failed to connect" . $this->con->connect_error;
}
$s=mysqli_query($con,"select * from product");
?>
<div style="padding-left: 15%">
<table border =1 style="background-color: white">

<tr>
    <th>Product id</th>
    <th>Product category</th>
    <th>product name</th>
    <th>Product price</th>
    <th>product image</th>
    <th>product type</th>
    <th>registered date</th>
    <th>Remove</th>
    <th>Edit</th>

</tr>
    <?php
    while($r=mysqli_fetch_array($s))
    { ?>

            <td><?php echo $r['item_id'];?></td>
            <td><?php echo $r['item_brand'];?></td>
            <td><?php echo $r['item_name'];?></td>
            <td><?php echo $r['item_price'];?></td>
            <td><img src="<?php echo $r['item_image'];?>"style="width:80px;height: 60px"></td>
            <td><?php echo $r['item_type'];?></td>
            <td><?php echo $r['item_register'];?></td>
        <td><button onclick="myFunction()">Delete</button></td>
          <td><a href="update.php?item-id=<?php echo $r['item_id'];?>">Update</a></td>
        <script>
            function myFunction(){
                if(confirm("confirm Delete"))
                {
                    location.replace("http://localhost/feedphp/freshshop/del.php?item-id=<?php echo $r['item_id'];?>")
                }

            }
        </script>


        </tr>
<?
    }
    ?>


</table>
</div>

</body>
</html>