<?php
class Regis{
public $regis_id,$regis_name,$regis_pplnum,$regis_address,$position_id ; //var of table quotation
public function Regis($regis_id,$regis_name,$regis_pplnum,$regis_address,$position_id)
{
    $this->regis_id =$regis_id ;
    $this->regis_name =$regis_name ;
    $this->regis_pplnum =$regis_pplnum ;
    $this->regis_address =$regis_address ;
    $this->position_id =$position_id ;

    
}
public static function getAll()
{
    $regislList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM regis";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $regis_id = $my_data['regis_id'];
        $regis_name = $my_data['regis_name'];
        $regis_pplnum = $my_data['regis_pplnum'];
        $regis_address = $my_data['regis_address'];
        $position_id = $my_data['position_id'];
        $regislList[] = new Regis($regis_id,$regis_name,$regis_pplnum,$regis_address,$position_id); 
    }
    require("connection_close.php");
    return $regislList;
}

}
?>