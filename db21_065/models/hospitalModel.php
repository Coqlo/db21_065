<?php
class Hospital{
public $hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode; //var of table quotation
public function Hospital($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode)
{
    $this->hospital_id =$hospital_id ;
    $this->hospital_name =$hospital_name ;
    $this->hospital_address =$hospital_address ;
    $this->hospital_subArea =$hospital_subArea ;
    $this->hospital_area =$hospital_area ;
    $this->hospital_province =$hospital_province ;
    $this->hospital_postalCode =$hospital_postalCode ;
    
}
public static function getAll()
{
    $hospitalList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM hospital";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $hospital_id = $my_data['hospital_id'];
        $hospital_name = $my_data['hospital_name'];
        $hospital_address = $my_data['hospital_address'];
        $hospital_subArea = $my_data['hospital_subArea'];
        $hospital_area = $my_data['hospital_area'];
        $hospital_province = $my_data['hospital_province'];
        $hospital_postalCode = $my_data['hospital_postalCode'];
        $hospitalList[] = new Hospital($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode); 
    }
    require("connection_close.php");
    return $hospitalList;
}
public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM hospital
    WHERE hospital_id='$id'";
    $result = $conn->query($sql);
    $my_data=$result->fetch_assoc();
    $hospital_id = $my_data['hospital_id'];
    $hospital_name = $my_data['hospital_name'];
    $hospital_address = $my_data['hospital_address'];
    $hospital_subArea = $my_data['hospital_subArea'];
    $hospital_area = $my_data['hospital_area'];
    $hospital_province = $my_data['hospital_province'];
    $hospital_postalCode = $my_data['hospital_postalCode'];
    require("connection_close.php");
    return new Hospital($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode);
}
public static function add($hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode)
{
    require("connection_connect.php");
    $sql="insert into hospital(hospital_name,hospital_address,hospital_subArea,hospital_area,hospital_province,hospital_postalCode)values
    ('$hospital_name','$hospital_address','$hospital_subArea','$hospital_area','$hospital_province','$hospital_postalCode')";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}
public static function update($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode)
{
    require("connection_connect.php");
    $sql = "UPDATE hospital SET hospital_name='$hospital_name',hospital_address='$hospital_address',hospital_subArea='$hospital_subArea',hospital_area='$hospital_area',hospital_province='$hospital_province',hospital_postalCode='$hospital_postalCode'
    WHERE hospital.hospital_id='$hospital_id'";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}
public static function delete($hospital_id)
{
    require("connection_connect.php");
    $sql = "DELETE FROM hospital WHERE hospital.hospital_id = '$hospital_id'";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}

public static function search($key)
{
		$HospitalList=[];
		require("connection_connect.php");
		$sql="select * from hospital where (hospital_id like'%$key%' or hospital_name like'%$key%' or hospital_address like'%$key%' or hospital_subArea like'%$key%' or hospital_area like'%$key%' or hospital_province like'%$key%' or hospital_postalCode like'%$key%')";
		$result=$conn->query($sql);
		while($my_row=$result->fetch_assoc())
		{
            $hospital_id = $my_data['hospital_id'];
            $hospital_name = $my_data['hospital_name'];
            $hospital_address = $my_data['hospital_address'];
            $hospital_subArea = $my_data['hospital_subArea'];
            $hospital_area = $my_data['hospital_area'];
            $hospital_province = $my_data['hospital_province'];
            $hospital_postalCode = $my_data['hospital_postalCode'];
			$HospitalList[]=new Hospital($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode);
		}
		require("connection_close.php");
		return $HospitalList;
}

}
?>