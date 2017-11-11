

  <?php  include('./system/application/views/header.php');?>
 
  


    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">Student Edit Form</span> </h2>
 <div class="block">               
  <form action="<?php echo base_url();?>index.php/student/update_student_data" method="post" style="margin-top:30px;" class="form-horizontal">
<?php

$s=$student->row_array();   
?>
   
      
      
<div class="form-group">
  <label class="control-label col-sm-2">Studentname:</label>
  <div class="col-sm-5">
  <input type="text" name="txtSname" class="form-control"  value="<?php echo $s["student_name"]?>"/>
  <input type="hidden" name="txtStudentId" class="form-control" value="<?php  echo $s['id'];?>"/> 
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Father's Name</label>
  <div class="col-sm-5">
  <input type="text" name="txtFname" class="form-control"  value="<?php echo $s["father_name"]?>"/>
  </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">Mother's Name</label>
  <div class="col-sm-5">
  <input type="text" name="txtMname" class="form-control"  value="<?php echo $s["mother_name"]?>"/>
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Date of Birth</label>
  <div class="col-sm-5">
      <input type="date" name="txtDate" class="form-control"  value="<?php echo $s["birth_day"]?>"/>
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">E-mail</label>
  <div class="col-sm-5">
      <input type="email" name="txtMail" class="form-control"  value="<?php echo $s["email"]?>"/>
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">Gender</label>
  <div class="col-sm-5">
      <select name="cmbGender" class="form-control" >
                      
                    	<option   value="<?php echo $s["gender"]?>"> <?php echo $s["gender"]?></option>
                        <option value="Male" >Male</option>
                         <option value="Female">Female</option>
                        
                    </select>  
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Class</label>
  <div class="col-sm-5">
       <select name="cmbClass" class="form-control" >
      
         <?php
                foreach ($class->result_array() as $row){
                    if($s["class_id"]==$row["id"]){
                        echo "<option value='$row[id]' selected> $row[class_name]</option>";
                }else{
                    
                      echo "<option value='$row[id]'> $row[class_name]</option>";
                }
                }
          ?>
      </select>
  </div>
 </div>
    <div class="form-group">
  <label class="control-label col-sm-2">Class Roll</label>
  <div class="col-sm-5">
      <input type="text" name="txtRoll" class="form-control"   value="<?php echo $s["class_roll"]?>"/>
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Mobile No</label>
  <div class="col-sm-5">
      <input type="text" name="txtMobile" class="form-control"  value="<?php echo $s["mobile"]?>"/>
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Apply Date</label>
  <div class="col-sm-5">
      <input type="date" name="txtaDate" class="form-control"  value="<?php echo $s["apply_date"]?>"/>
  </div>
 </div>
   <div class="form-group">
  <label class="control-label col-sm-2">Session</label>
  <div class="col-sm-5">
               <select name="cmbSession" class="form-control" >
      
         <?php
                foreach ($session->result_array() as $row){
                    if($s["session_id"]==$row["id"]){
                        echo "<option value='$row[id]' selected> $row[session_name]</option>";
                }else{
                    
                      echo "<option value='$row[id]'> $row[session_name]</option>";
                }
                }
          ?>
      </select>
  </div>
 </div>
       <div class="form-group">
  <label class="control-label col-sm-2">Section</label>
  <div class="col-sm-5">
            <select name="cmbSection" class="form-control" >
      
         <?php
                foreach ($section->result_array() as $row){
                    if($s["group_id"]==$row["id"]){
                        echo "<option value='$row[id]' selected> $row[group_name]</option>";
                }else{
                    
                      echo "<option value='$row[id]'> $row[group_name]</option>";
                }
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

 




