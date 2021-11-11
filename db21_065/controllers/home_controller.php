<?php
class HomeController
{
    public function index()
    {
        $home_list = Home::getAll();
        require_once('views/home_isolation/index_home.php');
    }

    public function newHome()
    {
        $home_list = Home::getAll();
        $medical_list = Medical::getAll();
        $atk_list = ATK::getAll();
        require_once('views/home_isolation/newHome.php');
    }

    public function addHome()
    {
        $hi_date=$_GET['hi_date'];
        $mv_id=$_GET['mv_id'];
        $atk_id=$_GET['atk_id'];
        Home::add($hi_date,$mv_id,$atk_id); //call function Add on quotationModel
        HomeController::index(); //call function index on QuotationController
    }

    public function updateForm()
    {
        $id = $_GET['hi_date'];
        $home = Home::get($id);
        $medical_list = Medical::getAll();
        $atk_list = ATK::getAll();
        require_once('views/home_isolation/updateForm.php');
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
        HomeController::index();
    }
    public function deleteConfirm()
    {
        $hospital_id = $_GET['hospital_id'];
        $hospital = Hospital::get($hospital_id);
        require_once('views/home_isolation/deleteConfirm.php');
    }
    public function delete()
    {
        $hospital_id=$_GET['hospital_id'];
        Hospital::delete($hospital_id); //delete quotation
        HomeController::index();
    }
    public function search()
	{
		$key=$_GET['key'];
		$HospitalList=Hospital::search($key);
		require_once('views/home_isolation/index_hospital.php');
	}
}
?>