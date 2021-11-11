<?php
class MedicalController
{
    public function index()
    {
        $medical_list = Medical::getAll();
        require_once('views/medical_volunteer/index_medical.php');
    }

    public function newMedical()
    {
        $medical_list = Medical::getAll();
        $hospital_list = Hospital::getAll();
        require_once('views/medical_volunteer/newMedical.php');
    }

    public function addMedical()
    {
        $mv_name=$_GET['mv_name'];
        $hospital_id=$_GET['hospital_id'];
        Medical::add($mv_name,$hospital_id); //call function Add on quotationModel

        MedicalController::index(); //call function index on QuotationController
    }

    public function updateForm()
    {
        $id = $_GET['mv_id'];
        $medical = Medical::get($id);
        $hospital_list = Hospital::getAll();
        require_once('views/medical_volunteer/updateForm.php');
    }

    public function update()
    {
        $mv_id = $_GET['mv_id'];
        $mv_name = $_GET['mv_name'];
        $hospital_id = $_GET['hospital_id'];
        Medical::update($mv_id,$mv_name,$hospital_id);
        MedicalController::index();
    }
    public function deleteConfirm()
    {
        $mv_id = $_GET['mv_id'];
        $medical = Medical::get($mv_id);
        require_once('views/medical_volunteer/deleteConfirm.php');
    }
    public function delete()
    {
        $mv_id=$_GET['mv_id'];
        Medical::delete($mv_id); //delete quotation
        MedicalController::index();
    }

    public function search()
	{
		$key=$_GET['key'];
		$MedicalList=Medical::search($key);
		require_once('views/medical_volunteer/index_medical.php');
	}
}
?>