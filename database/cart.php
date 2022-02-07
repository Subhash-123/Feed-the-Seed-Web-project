<?php


class cart
{
public $db=null;
public function __construct(dbcontroller $db)
{
    if(!isset($db->con)) return null;
    $this->db=$db;
}


public function insertintocart($params=null,$table='cart')
{
    if($this->db->con!=null)
    {
        if($params!=null)
        {
            $columns=implode(',',array_keys($params));

            $values=implode(',',array_values($params));

            $query_string=sprintf("INSERT INTO %s(%s) VALUES(%s)",$table,$columns,$values);
            $result=$this->db->con->query($query_string);
            return $result;
        }
    }
}

public function addToCart($userid,$itemid)
{
    if(isset($userid) &&isset($itemid))
    {
        $params=array(
            "user_id"=>$userid,
            "item_id"=>$itemid
        );
        $result=$this->insertintocart($params);
        if($result)
        { $php=basename($_SERVER["PHP_SELF"]);

        if($php!="view.php")
        { header("Location:$php?user-id=$userid");}
        else
        {
            header("Location:$php?item_id=$itemid&user-id=$userid");
        }
        }
    }
}
    public function addToWish($userid,$itemid)
    {
        if(isset($userid) &&isset($itemid))
        {
            $params=array(
                "user_id"=>$userid,
                "item_id"=>$itemid
            );
            $result=$this->insertintocart($params);
            if($result)
            {
                $php=$_SERVER["PHP_SELF"];
                header("Location:$php?user-id=$userid");
            }
        }
    }

public function deleteCart($item_id=null,$table='cart',$userid){
    if($item_id!=null){
        $result=$this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id} AND user_id={$userid}");
        if($result) {
            $php=$_SERVER["PHP_SELF"];
            header("Location:$php?user-id=$userid");
        }
        return $result;
    }
}


public function getSum($arr)
{
    if(isset($arr))

    {
        $sum=0;
        foreach ($arr as $item)
        {
            $sum+=floatval($item[0]);
        }
        return sprintf('%.2f',$sum);
    }
}
public function getCardid($cartArray=null,$key="item_id"){
    if($cartArray!=null){
        $cart_id=array_map(function($value)use($key){
            return $value[$key];
        },$cartArray);
        return $cart_id;
    }
}
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart",$user_id=null)
    {
        if ($item_id != null) {
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id} AND user_id={$user_id};";
            $query.= "DELETE FROM {$fromTable} WHERE item_id={$item_id} AND user_id={$user_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if ($result) {
                $php=$_SERVER["PHP_SELF"];
                header("Location:$php?user-id=$user_id");
            }
            return $result;
        }
    }

}