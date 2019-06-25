$("body").on("submit","#add_users",function (e) {

    e.preventDefault();
    var ttValue = $("#add_users").serialize(); 
  
      $.ajax({
        type: "POST",
          url: "ajax/ajaxAdduser.php",
          data: ttValue,
        cache: false,
        success: function(result){
          
            if(result== "Successfully"){
               
               alert("Successfully");
               $("#add_users").trigger("reset");
               location.reload();
                return false;
             
                 //
               }else if(result== "Error"){
                alert("error");
            }else{
                alert("error");
            }
                
        }
      });
      return false;
    });

    $("body").on("submit","#add_team",function (e) {

        e.preventDefault();
        var ttValue = $("#add_team").serialize(); 
      
          $.ajax({
            type: "POST",
              url: "ajax/ajaxAddTeam.php",
              data: ttValue,
            cache: false,
            success: function(result){
              
                if(result== "Successfully"){
                   alert("Successfully");
                   $("#add_team").trigger("reset");
                   location.reload();
                    return false;
                 
                }else if(result== "Error"){
                   alert("error");
                }else{
                    alert("error");
                }
                    
            }
          });
          return false;
        });
        $("body").on("submit","#add_team_users",function (e) {

            e.preventDefault();
            var ttValue = $("#add_team_users").serialize(); 
          
              $.ajax({
                type: "POST",
                  url: "ajax/ajaxAddTeamUsers.php",
                  data: ttValue,
                cache: false,
                success: function(result){
              
                    if(result== "Successfully"){
                       alert("Successfully");
                       $("#add_team_users").trigger("reset");
                       location.reload();
                        return false;
                     
                    }else if(result== "Error"){
                       alert("This user has already assign same team");
                    }else{
                        alert("This user has already assign same team");
                    }
                        
                }
              });
              return false;
            });
       