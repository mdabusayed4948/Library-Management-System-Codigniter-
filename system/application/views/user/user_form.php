
 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">User Registration</span> </h2>
              <div class="block">               
                  
                  <form action="<?php echo base_url();?>index.php/user/save_user" method="post" style="margin-top:30px;" class="form-horizontal">

                      
                       <?php
   if(isset($success)){
 ?>
 <div class="alert alert-success"><?php echo $success?></div>
 <?php
   }
 ?>
 
 
 <?php
   if(isset($error)){
 ?>
 <div class="alert alert-danger"><?php echo $error?></div>
 <?php
   }
 ?>
                      
 
 <div class="form-group">
  <label class="control-label col-sm-2">Select Role</label>
  <div class="col-sm-5">
      <select name="cmbRoleId" class="form-control">
          <?php
                foreach ($role->result_array() as $row){
                        echo "<option value='$row[id]'>$row[name]</option>";
                }
          ?>
      </select>
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Username</label>
  <div class="col-sm-5">
  <input type="text" name="txtUsername" class="form-control"/>
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Password</label>
  <div class="col-sm-5">
  <input type="password" name="pwdPassword" class="form-control" />
  </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">Retype Password</label>
  <div class="col-sm-5">
  <input type="password" name="pwdRePassword" class="form-control" />
  </div>
 </div>
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-5">
  <input type="submit" name="btnSubmit" value="Submit" class="btn btn-success" />
  </div>
 </div>
</form>
                  
                  
                  
                  
                  
               </div>
        
      </div>
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 




