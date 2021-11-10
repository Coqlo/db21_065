<?php
class HospitalController
{
    public function index()
    {
        $hospital_list = Hospital::getAll();
        require_once('views/hospital/index_hospital.php');
    }

    public function newHospital()
    {
        $hospital_list = Hospital::getAll();
        require_once('views/hospital/newHospital.php');
    }

    public function addHospital()
    {
        $hospital_name=$_GET['hospital_name'];
        $hospital_address=$_GET['hospital_address'];
        $hospital_subArea=$_GET['hospital_subArea'];
        $hospital_area=$_GET['hospital_area'];
        $hospital_province=$_GET['hospital_province'];
        $hospital_postalCode=$_GET['hospital_postalCode'];
        Hospital::add($hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode); //call function Add on quotationModel

        HospitalController::index(); //call function index on QuotationController
    }

    public function updateForm()
    {
        $id = $_GET['hospital_id'];
        $hospital = Hospital::get($id);
        echo "$hospital->hospital_id , $hospital->hospital_name , $hospital->hospital_address , $hospital->hospital_subArea , $hospital->hospital_area , $hospital->hospital_province , $hospital->hospital_postalCode";
        require_once('views/hospital/updateForm.php');
    }

    public function update()
    {
        $hospital_id = $_GET['hospital_id'];
        $hospital_name = $_GET['hospital_name'];
        $hospital_address = $_GET['hospital_address'];
        $hospital_subArea = $_GET['hospital_subArea'];
        $hospital_area = $_GET['hospital_area'];
        $hospital_province = $_GET['hospital_province'];
        $hospital_postalCode = $_GET['hospital_postalCode'];
        Hospital::update($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode);
        HospitalController::index();
    }
    public function deleteConfirm()
    {
        $hospital_id = $_GET['hospital_id'];
        $hospital = Hospital::get($hospital_id);
        require_once('views/hospital/deleteConfirm.php');
    }
    public function delete()
    {
        $hospital_id=$_GET['hospital_id'];
        Hospital::delete($hospital_id); //delete quotation
        HospitalController::index();
    }
}
?>