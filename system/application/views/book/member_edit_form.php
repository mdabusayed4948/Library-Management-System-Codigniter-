
 <?php  include('./system/application/views/header.php');?>
 
  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">Member's Edit Form</span> </h2>
              <div class="block">               
                  
                  <form action="<?php echo base_url();?>index.php/library/member_update_data" method="post" style="margin-top:30px;" class="form-horizontal">

           <?php

$m=$member->row_array();   
?>
              
                  

 
 <div class="form-group">
  <label class="control-label col-sm-2">Name:</label>
  <div class="col-sm-5">
  <input type="text" name="txtMname" class="form-control" value="<?php echo $m["m_name"]?>"/>
  <input type="hidden" name="txtMid" class="form-control" value="<?php echo $m["id"]?>"/>
  </div>
 </div>

  <div class="form-group">
  <label class="control-label col-sm-2">E-mail:</label>
  <div class="col-sm-5">
  <input type="mail" name="txtMail" class="form-control" value="<?php echo $m["email"]?>"/>
  </div>
 </div> 
     
     <div class="form-group">
  <label class="control-label col-sm-2">Mobile No:</label>
  <div class="col-sm-5">
  <input type="text" name="txtMobile" class="form-control" value="<?php echo $m["mobile"]?>"/>
  </div>
 </div>                  
   <div class="form-group">
  <label class="control-label col-sm-2">Gender</label>
  <div class="col-sm-5">
      <select name="cmbGender" class="form-control">
                      
                    	<option  value="<?php echo $m["gender"]?>"><?php echo $m["gender"]?></option>
                        <option value="Male" >Male</option>
                         <option value="Female">Female</option>
                        
                    </select>  
  </div>
 </div>                     
 
  <div class="form-group">
  <label class="control-label col-sm-2">Join Date</label>
  <div class="col-sm-5">
      <input type="date" name="txtJoin" class="form-control" value="<?php echo $m["join_date"]?>"/>
  </div>
 </div>
 
  <div class="form-group">
  <label class="control-label col-sm-2">Address </label>
  <div class="col-sm-5">
      <textarea name="textAddress" class="form-control" cols="10" rows="4"><?php echo $m["address"]?></textarea>
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

 









