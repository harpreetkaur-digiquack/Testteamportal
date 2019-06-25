<?php require_once('includes/header.php');?>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-10">
            <h4>User Table</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Teams</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                            $getalldata = $dbModel->getalldata();
                                $i=1;
                            foreach ($getalldata as $getalldataArray): 
                            $team_id = $getalldataArray['team_id'];
                            $condition="WHERE id IN($team_id)";
                            $getallteam = $dbModel->getallteam($condition);
                            $team_name='';
                            foreach ($getallteam as $getallteam){
                                if($team_name!=''){
                                    $team_name .=',';
                                }
                                $team_name .= $getallteam['name'];
                                   
                            }
                            
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $getalldataArray['first_name']." " .$getalldataArray['last_name'];?></td>
                                <td><?php echo  $team_name;?></td>
                            </tr>
                            <?php endforeach;?>
                    </tbody>
                </table>

                
            </div>

            </div>
        </div>
    
        <div class="row">
                            <div class="col-sm-2">

                                <a href="addForms.php" class="btn btn-primary">Add Data</a>
                            </div>
                
                
                </div>
    </div>
</div>
<?php require_once('includes/footer.php');?>
