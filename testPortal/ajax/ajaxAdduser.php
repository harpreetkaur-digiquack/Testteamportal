<?php


if (file_exists('Model/Model.php')){
    require_once 'Model/Model.php';
}else{
    require_once '../Model/Model.php';
}

$dbModel = Model::instance();
$first_name = clearSpecialChar($_POST['first_name']);
$last_name = clearSpecialChar($_POST['last_name']);

$insertuser = $dbModel->insertuser($first_name,$last_name);
    
if ($insertuser){
    echo "Successfully";
  die;
    
}
else{
    echo "error";
    die;
}


       
?>