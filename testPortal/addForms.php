<?php require_once('includes/header.php');?>
<div id="wrapper">
    <div class="container">

    <b>ADD Data</b>
    
    <a href="index.php"  class="btn btn-primary float-right" name="btnView" id="btnView">View Team Users</a> 
             
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#users" role="tab" aria-controls="home">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#teams" role="tab" aria-controls="profile">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#teamusers" role="tab" aria-controls="messages">Team Users</a>
            </li>
       
        </ul>

        <div class="tab-content">
        <div class="tab-pane active" id="users" role="tabpanel">
            <form name="add_users" id="add_users">
                    <div class="form-group">
                            <label for="Name" class=" form-control-label">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Enter your First Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label for="Name" class=" form-control-label">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Enter your Last Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                 
                        <button type="submit" class="btn btn-primary" name="btn-user" id="btn_user">Add User</button>       
                        </div>
            </form>
        
        
        
        
        </div>
        <div class="tab-pane" id="teams" role="tabpanel">
        
        <form name="add_team" id="add_team">
                    <div class="form-group">
                            <label for="Name" class=" form-control-label">Team Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your Team  Name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn-team" id="btn-team">Add Team</button>       
                        </div>
            </form>
        
        
        </div>
        <div class="tab-pane" id="teamusers" role="tabpanel">
        <form name="add_team_users" id="add_team_users">
                    <div class="form-group">
                            <label for="Name" class=" form-control-label">User Name</label>
                            <select class="form-control" id="user_id" name="user_id" required/>
                                                <option value="">Select User</option>
                                                <?php
                                                $getallUsers = $dbModel->getallUsers();
                                                foreach ($getallUsers as $getallUsers): ?>
                                                <option value="<?php echo $getallUsers['id'] ?>">
                                                <?php echo $getallUsers['first_name'].$getallUsers['last_name']?></option>
                                                <?php  endforeach;?>
                                            </select>
                    </div>
                    <div class="form-group">
                            <label for="Name" class=" form-control-label">Team Name</label>
                            <select class="form-control" id="team_id" name="team_id[]"  multiple="multiple" required/>
                                                <option value="">Select Team</option>
                                                <?php
                                                $getallTeams = $dbModel->getallTeams();
                                                foreach ($getallTeams as $getallTeams): ?>
                                                <option value="<?php echo $getallTeams['id'] ?>">
                                                <?php echo $getallTeams['name'];?></option>
                                                <?php  endforeach;?>
                                            </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="btn-team_user" id="btn-team_user">Add Team</button>   
                       
                        </div>
            </form>
        
        
        
        
        </div>
      
        </div>
</div>
</div>
<?php require_once('includes/footer.php');?>



