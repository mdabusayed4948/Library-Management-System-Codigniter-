

  <?php  include('./system/application/views/header.php');?>
 
  


    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">User Edit Form</span> </h2>
              <div class="block">               
                  
                  <form action="<?php echo base_url();?>index.php/user/update_data" method="post" style="margin-top:30px;" class="form-horizontal">

<?php

$u=$user->row_array();   
?>
                      
            
 
 <div class="form-group">
  <label class="control-label col-sm-2">Select Role</label>
  <div class="col-sm-5">
      <select name="cmbRoleId" class="form-control" >
      
         <?php
                foreach ($role->result_array() as $row){
                    if($u["role_id"]==$row["id"]){
                        echo "<option value='$row[id]' selected>$row[id] $row[name]</option>";
                }else{
                    
                      echo "<option value='$row[id]'>$row[id] $row[name]</option>";
                }
                }
          ?>
      </select>
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Username</label>
  <div class="col-sm-5">
      
  <input type="text" name="txtUsername" class="form-control"  value="<?php echo $u["username"]?>"/>
  <input type="hidden" name="txtUserId" class="form-control" value="<?php  echo $u['id'];?>"/> 
  
  </div>
 </div>
                     
                  
    
              
 
 
 
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-6">
  <input type="submit" name="btnSubmit" value="Save Change" class="btn btn-success" />
  </div>
 </div>
</form>
        
                  
               </div>
        
      </div>
  </div>

      
   <?php  include('./system/application/views/footer.php');?>

 




