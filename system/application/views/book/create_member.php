
 <?php  include('./system/application/views/header.php');?>
 
  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">Member's Registration Form</span> </h2>
              <div class="block">               
                  
                  <form action="<?php echo base_url();?>index.php/library/member_join" method="post" style="margin-top:30px;" class="form-horizontal">

                      
                  

 
 <div class="form-group">
  <label class="control-label col-sm-2">Name:</label>
  <div class="col-sm-5">
  <input type="text" name="txtMname" class="form-control"/>
  </div>
 </div>

  <div class="form-group">
  <label class="control-label col-sm-2">E-mail:</label>
  <div class="col-sm-5">
  <input type="mail" name="txtMail" class="form-control" />
  </div>
 </div> 
     
     <div class="form-group">
  <label class="control-label col-sm-2">Mobile No:</label>
  <div class="col-sm-5">
  <input type="text" name="txtMobile" class="form-control" />
  </div>
 </div>                  
   <div class="form-group">
  <label class="control-label col-sm-2">Gender</label>
  <div class="col-sm-5">
      <select name="cmbGender" class="form-control">
                      
                    	<option >--Select--</option>
                        <option value="Male" >Male</option>
                         <option value="Female">Female</option>
                        
                    </select>  
  </div>
 </div>                     
 
  <div class="form-group">
  <label class="control-label col-sm-2">Join Date</label>
  <div class="col-sm-5">
     <div  class='input-group date'>
 <input type='text' class="form-control" id="Date1" name="txtJoin"  placeholder="yyyy-mm-dd"/>
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar" ></span>
                    </span>
                </div>
    
  </div>
 </div>
 
  <div class="form-group">
  <label class="control-label col-sm-2">Address </label>
  <div class="col-sm-5">
      <textarea name="textAddress" class="form-control" cols="10" rows="4"></textarea>
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
   <script>
     $('#Date').datepicker({ changeYear:true, changeMonth:true, dateFormat:'yy-mm-dd'});
 $('#Date1').datepicker({ changeYear:true, changeMonth:true, dateFormat:'yy-mm-dd'});

     </script>
      
  <?php  include('./system/application/views/footer.php');?>

 







