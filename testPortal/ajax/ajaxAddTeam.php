<?php


if (file_exists('Model/Model.php')){
    require_once 'Model/Model.php';
}else{
    require_once '../Model/Model.php';
}

$dbModel = Model::instance();
$name = clearSpecialChar($_POST['name']);


$insertteamname = $dbModel->insertteamname($name);
    
if ($insertteamname){
    echo "Successfully";
  die;
    
}
else{
    echo "error";
    die;
}


       
?>