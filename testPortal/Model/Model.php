<?php

if (file_exists('../config/config.php')){
    require_once '../config/config.php';
}else{
    require_once './config/config.php';
}

//error_reporting(E_ALL); ini_set('display_errors', 1); 

//eporting(E_ALL);
class Model
{
    public static function instance()
    {
        static $instance = false; 
        if ($instance === false) {
            // Late static binding (PHP 5.3+)
           // ob_flush();
            session_start();
            $instance = new static();
        }
        return $instance;
    }

    
public function getalldata(){
      
        $getalldata = R::getAll("SELECT pt.*,co.first_name,co.last_name
        FROM teams_users pt LEFT JOIN users co ON pt.user_id = co.id 
        ");
        
         return $getalldata;
     }
     
     public function getallteam($condition=''){

     $getallteam = R::getAll("SELECT * FROM  teams $condition" );
     return $getallteam;

     }
     public function insertuser($first_name,$last_name){

     $insertuser =R::exec("INSERT `users` SET first_name ='$first_name',last_name ='$last_name',created_at=now() ");
     return  $insertuser;
    
     
    }
    public function insertteamname($name){

        $insertteamname =R::exec("INSERT `teams` SET name ='$name',created_at=now() ");
        return  $insertteamname;
       
        
       }
       public function getallUsers($condition=''){

        $getallUsers = R::getAll("SELECT * FROM  users $condition" );
        return $getallUsers;
   
        }
        public function getallTeams($condition=''){

            $getallTeams = R::getAll("SELECT * FROM  teams $condition" );
            return $getallTeams;
       
            }
            public function inserteam_user($team_ex,$user_id){
                $getallusers= R::getAll("SELECT * FROM  teams_users WHERE user_id = '$user_id'" );
                if(count($getallusers)>0){
                    $iupdateteam_user =R::exec("UPDATE `teams_users` SET team_id ='$team_ex' WHERE user_id ='$user_id' ");
                       
                                return  $iupdateteam_user;
                }
                
                
                else{
                    $inserteam_user =R::exec("INSERT `teams_users` SET team_id ='$team_ex',user_id ='$user_id'");
                    return  $inserteam_user;
                }
               
               
                
               }

    
    
    
}

