<?php
$controllers=array('pages'=>['home','error'],'hospital'=>['index','newHospital','addHospital','updateForm','update','deleteConfirm','delete','search']
,'medical'=>['index','newMedical','addMedical','updateForm','update','deleteConfirm','delete','search']
,'home'=>['index','newHome','addHome','updateForm','update','deleteConfirm','delete','search']);//list controller and action
function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages"        :       $controller = new PagesController();
                                    break;
        case "hospital"    :        require_once("models/hospitalModel.php");
                                    $controller = new HospitalController();
                                    break;
        case "medical"    :         require_once("models/medicalModel.php");
                                    require_once("models/hospitalModel.php");
                                    $controller = new MedicalController();
                                    break;
        case "home"    :            require_once("models/homeModel.php");
                                    require_once("models/medicalModel.php");
                                    require_once("models/hospitalModel.php");
                                    require_once("models/atkModel.php");
                                    require_once("models/regisModel.php");
                                    $controller = new HomeController();
                                    break;
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{	
    if(in_array($action,$controllers[$controller]))
	{ 	
        call($controller,$action);
     }else{	
        call('pages','error');
    }
}else{	
    call('pages','error');
	}

?>