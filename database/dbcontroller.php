<?php


class dbcontroller
{
protected $host='localhost';
protected $user='root';
protected $password= '';
public $database= "feed_the_seed";
public function __construct()
{
    $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if($this->con->connect_error) {
        echo "failed to connect" . $this->con->connect_error;
    }
}
public function __destruct()
{
    $this->closeConnection();
}
protected function  closeConnection(){
    if($this->con!=null){
        $this->con->close();
        $this->con=null;
    }

}
}
