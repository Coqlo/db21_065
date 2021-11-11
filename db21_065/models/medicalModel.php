<?php
class Medical{
public $mv_id,$mv_name,$hospital_id,$hospital_name; //var of table quotation
public function Medical($mv_id,$mv_name,$hospital_id,$hospital_name)
{
    $this->mv_id =$mv_id ;
    $this->mv_name =$mv_name ;
    $this->hospital_id =$hospital_id ;
    $this->hospital_name =$hospital_name ;    
}
public static function getAll()
{
    $medicalList = [];
    require("connection_connect.php");
    $sql = "SELECT mv_id,mv_name,hospital.hospital_name FROM medical_volunteer INNER JOIN hospital ON medical_volunteer.hospital_id=hospital.hospital_id";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $mv_id = $my_data['mv_id'];
        $mv_name = $my_data['mv_name'];
        $hospital_id = $my_data['hospital_id'];
        $hospital_name = $my_data['hospital_name'];
        $medicalList[] = new Medical($mv_id,$mv_name,$hospital_id,$hospital_name); 
    }
    require("connection_close.php");
    return $medicalList;
}
public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM medical_volunteer
    WHERE mv_id='$id'";
    $result = $conn->query($sql);
    $my_data=$result->fetch_assoc();
    $mv_id = $my_data['mv_id'];
    $mv_name = $my_data['mv_name'];
    $hospital_id = $my_data['hospital_id'];
    require("connection_close.php");
    return new Medical($mv_id,$mv_name,$hospital_id);
}
public static function add($mv_name,$hospital_id)
{
    require("connection_connect.php");
    $sql="insert into medical_volunteer(mv_name,hospital_id)values
    ('$mv_name','$hospital_id')";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}
public static function update($mv_id,$mv_name,$hospital_id)
{
    require("connection_connect.php");
    $sql = "UPDATE medical_volunteer SET mv_name='$mv_name',hospital_id='$hospital_id'
    WHERE medical_volunteer.mv_id='$mv_id'";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}
public static function delete($mv_id)
{
    require("connection_connect.php");
    $sql = "DELETE FROM medical_volunteer WHERE medical_volunteer.mv_id = '$mv_id'";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "delete success $result row";
}

public static function search($key)
{
		$HospitalList=[];
		require("connection_connect.php");
		$sql="select * from hospital where (mv_id like'%$key%' or mv_name like'%$key%' or hospital_id like'%$key%' or hospital_subArea like'%$key%' or hospital_area like'%$key%' or hospital_province like'%$key%' or hospital_postalCode like'%$key%')";
		$result=$conn->query($sql);
		while($my_row=$result->fetch_assoc())
		{
            $mv_id = $my_data['mv_id'];
            $mv_name = $my_data['mv_name'];
            $hospital_id = $my_data['hospital_id'];
            $hospital_subArea = $my_data['hospital_subArea'];
            $hospital_area = $my_data['hospital_area'];
            $hospital_province = $my_data['hospital_province'];
            $hospital_postalCode = $my_data['hospital_postalCode'];
			$HospitalList[]=new Medical($mv_id,$mv_name,$hospital_id,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode);
		}
		require("connection_close.php");
		return $BadmintonList;
}

}
?>