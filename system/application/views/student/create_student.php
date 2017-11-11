
 <?php  include('./system/application/views/header.php');?>
 
  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">Student's Form</span> </h2>
              <div class="block">               
                  
                  <form action="<?php echo base_url();?>index.php/student/add" method="post" style="margin-top:30px;" class="form-horizontal">

                      
                  

 
 <div class="form-group">
  <label class="control-label col-sm-2">Studentname:</label>
  <div class="col-sm-5">
  <input type="text" name="txtSname" class="form-control"/>
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Father's Name</label>
  <div class="col-sm-5">
  <input type="text" name="txtFname" class="form-control" />
  </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">Mother's Name</label>
  <div class="col-sm-5">
  <input type="text" name="txtMname" class="form-control" />
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Date of Birth</label>
  <div class="col-sm-5">
      <input type="date" name="txtDate" class="form-control" />
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">E-mail</label>
  <div class="col-sm-5">
      <input type="email" name="txtMail" class="form-control" />
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">Gender</label>
  <div class="col-sm-5">
      <select name="cmbGender" class="form-control">
                      
                    	<option >Select Gender</option>
                        <option value="Male" >Male</option>
                         <option value="Female">Female</option>
                        
                    </select>  
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Class</label>
  <div class="col-sm-5">
            <select name="cmbClass" class="form-control">
                 <option>Select Class</option>
          <?php
                foreach ($class->result_array() as $row){
                        echo "<option value='$row[id]'>$row[class_name]</option>";
                }
          ?>
      </select>
  </div>
 </div>
    <div class="form-group">
  <label class="control-label col-sm-2">Class Roll</label>
  <div class="col-sm-5">
      <input type="text" name="txtRoll" class="form-control" />
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Mobile No</label>
  <div class="col-sm-5">
      <input type="text" name="txtMobile" class="form-control" />
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Apply Date</label>
  <div class="col-sm-5">
      <input type="date" name="txtaDate" class="form-control" />
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">Session</label>
  <div class="col-sm-5">
            <select name="cmbSession" class="form-control">
                 <option>Select Session</option>
          <?php
                foreach ($session->result_array() as $row){
                        echo "<option value='$row[id]'>$row[session_name]</option>";
                }
          ?>
      </select>
  </div>
 </div>
       <div class="form-group">
  <label class="control-label col-sm-2">Section</label>
  <div class="col-sm-5">
            <select name="cmbSection" class="form-control">
                <option>Select Section</option>
          <?php
                foreach ($section->result_array() as $row){
                        echo "<option value='$row[id]'>$row[group_name]</option>";
                }
          ?>
      </select>
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

 




