<?php


if (file_exists('Model/Model.php')){
    require_once 'Model/Model.php';
}else{
    require_once '../Model/Model.php';
}

$dbModel = Model::instance();
$user_id = $_POST['user_id'];
$team_id = $_POST['team_id'];
$count_teamid = count($team_id);
$team_ex = '';
for($i=0;$i<$count_teamid;$i++){
    if($team_ex!=''){
        $team_ex .=',';
    }
    $team_ex .=  $team_id[$i];
       
}


$inserteam_user = $dbModel->inserteam_user($team_ex,$user_id);
    
if ($inserteam_user){
    echo "Successfully";
  die;
    
}
else{
    echo "error";
    die;
}


       
?>