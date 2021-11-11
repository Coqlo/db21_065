<?php
class ATK{
public $atk_id ,$atk_date,$atk_result,$regis_id,$ID_SL; //var of table quotation
public function ATK($atk_id ,$atk_date,$atk_result,$regis_id,$ID_SL)
{
    $this->atk_id =$atk_id ;
    $this->atk_date =$atk_date ;
    $this->atk_result =$atk_result ;
    $this->regis_id =$regis_id ;
    $this->ID_SL =$ID_SL ;

    
}
public static function getAll()
{
    $atklList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM atk";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $atk_id = $my_data['atk_id'];
        $atk_date = $my_data['atk_date'];
        $atk_result = $my_data['atk_result'];
        $regis_id = $my_data['regis_id'];
        $ID_SL = $my_data['ID_SL'];
        $atklList[] = new ATK($atk_id ,$atk_date,$atk_result,$regis_id,$ID_SL); 
    }
    require("connection_close.php");
    return $atklList;
}

}
?>