<?php


class wish
{
    public $db=null;
    public function __construct(dbcontroller $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }
    public function insertintowish($params=null,$table='wishlist')
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
    public function addToWish($userid,$itemid)
    {
        if(isset($userid) &&isset($itemid))
        {
            $params=array(
                "user_id"=>$userid,
                "item_id"=>$itemid
            );
            $result=$this->insertintowish($params);
            if($result)
            {
                header("Location:".$_SERVER["PHP_SELF"]);
            }
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
}