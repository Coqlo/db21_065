<?php
class Home{
public  $hi_id,$hi_date,$regis_id,$regis_pplnum,$regis_name,$atk_id,$atk_result,$mv_id,$mv_name,$hospital_name; //var of table quotation
public function Home($hi_id,$hi_date,$regis_id,$regis_pplnum,$regis_name,$atk_id,$atk_result,$mv_id,$mv_name,$hospital_name)
{

    $this->hi_id =$hi_id ;
    $this->hi_date =$hi_date ;
    $this->regis_id =$regis_id ;
    $this->regis_pplnum =$regis_pplnum ;
    $this->regis_name =$regis_name ;
    $this->atk_id =$atk_id ;
    $this->atk_result =$atk_result ;
    $this->mv_id =$mv_id ;
    $this->mv_name =$mv_name ;
    $this->hospital_name =$hospital_name ;
}
public static function getAll()
{
    $homeList = [];
    require("connection_connect.php");
    $sql = "SELECT home_isolation.hi_id,home_isolation.hi_date,atk.regis_id,regis.regis_pplnum,regis.regis_name,home_isolation.atk_id,atk.atk_result,home_isolation.mv_id,medical_volunteer.mv_name,hospital.hospital_name FROM hospital INNER JOIN medical_volunteer ON hospital.hospital_id=medical_volunteer.hospital_id INNER JOIN home_isolation ON medical_volunteer.mv_id=home_isolation.mv_id INNER JOIN atk ON home_isolation.atk_id=atk.atk_id INNER JOIN regis ON atk.regis_id=regis.regis_id";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $hi_id = $my_data['hi_id'];
        $hi_date = $my_data['hi_date'];
        $regis_id = $my_data['regis_id'];
        $regis_pplnum = $my_data['regis_pplnum'];
        $regis_name = $my_data['regis_name'];
        $atk_id = $my_data['atk_id'];
        $atk_result = $my_data['atk_result'];
        $mv_id = $my_data['mv_id'];
        $mv_name = $my_data['mv_name'];
        $hospital_name = $my_data['hospital_name'];
        $homeList[] = new Home($hi_id,$hi_date,$regis_id,$regis_pplnum,$regis_name,$atk_id,$atk_result,$mv_id,$mv_name,$hospital_name); 
    }
    require("connection_close.php");
    return $homeList;
}
public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM home_isolation
    WHERE hi_id='$id'";
    $result = $conn->query($sql);
    $my_data=$result->fetch_assoc();
    $hi_id = $my_data['hi_id'];
    $hi_date = $my_data['hi_date'];
    $mv_id = $my_data['mv_id'];
    $atk_id = $my_data['atk_id'];
    require("connection_close.php");
    return new Home($hi_id,$hi_date,$atk_id,$mv_id);
}
public static function add($hi_date,$mv_id,$atk_id)
{
    require("connection_connect.php");
    $sql="insert into home_isolation(hi_date,mv_id,atk_id)values
    ('$hi_date','$mv_id','$atk_id')";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}
public static function update($hi_id,$hi_date,$mv_id,$atk_id)
{
    require("connection_connect.php");
    $sql = "UPDATE home_isolation SET hi_date='$hi_date',mv_id='$mv_id',atk_id='$atk_id'
    WHERE home_isolation.hi_id='$hi_id'";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}
public static function delete($hi_id)
{
    require("connection_connect.php");
    $sql = "DELETE FROM home_isolation WHERE home_isolation.hi_id = '$hi_id'";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}

}
?>