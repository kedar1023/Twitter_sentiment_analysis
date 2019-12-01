<?php

class db{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $dbname = "";
    public function connect(){
        $conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->dbname);
        return $conn;
    } 

    public function check($a,$b){
        $con = $this->connect();
        $res = mysqli_query("select * from user where name = '$a' and pass = '$b' ");
        return $res;
    } 

    


}

$obj = new db();

extract($_POST);
if(isset($submit)){
    $obj->check($email,$pass);
}

?>

<form method="POST">
<input type="text" name="email">
<input type="text" name="pass">
<input type="submit" name="submit">
</form>