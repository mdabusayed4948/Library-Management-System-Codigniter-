
 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow ">Add Book Form</span> </h2>
              <div class="block">               
                  <form action="<?php echo base_url()?>index.php/library/issue_booklist_update" method="post" style="margin-top:30px;" class="form-horizontal">
<?php

$i=$issue_list->row_array();   
?>               
  <div class="form-group">
  <label class="control-label col-sm-2">Member Id:</label>
  <div class="col-sm-5">
  
   
        <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="txtMemberId"  data-size="10">
      
              
          <?php
                foreach ($member->result_array() as $row){
                    if( $i["l_member_id"]== $row["id"]){
                    
                      echo "<option value='$row[id]' selected>$row[id] || $row[m_name] || $row[mobile] || $row[email]</option>";
                    }else{
                            echo "<option value='$row[id]' >$row[id] || $row[m_name] || $row[mobile] || $row[email]</option>";  
                    }
                      
                }
          ?>
      </select>
         <input type="hidden" name="txtIsssueId"   class="form-control"  value="<?php echo $i["id"]?>"/>
  </div>
 </div>
 
  <div class="form-group">
  <label class="control-label col-sm-2">Book Id:</label>
  <div class="col-sm-5">
           <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="txtBookId"  data-size="10">
      
              
          <?php
                foreach ($book->result_array() as $row){
                    if( $i["book_id"]== $row["id"]){
                    
                      echo "<option value='$row[id]' selected>$row[id] || $row[book_name] || $row[author] </option>";
                    }else{
                                 echo "<option value='$row[id]' >$row[id] || $row[book_name] || $row[author] </option>";
                    }
                      
                }
          ?>
      </select>
    
  </div>
 </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Issue Date:</label>
  <div class="col-sm-5">
            <div  class='input-group date'>
                    <input type='text' class="form-control" id="Date" name="txtIdate"  placeholder="yyyy-mm-dd" value="<?php echo $i["issue_date"]?>"/>
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar" ></span>
                    </span>
                </div>
     
  </div>
 </div>
 
   <div class="form-group">
  <label class="control-label col-sm-2">Return Date:</label>
  <div class="col-sm-5">
           <div  class='input-group date'>
                    <input type='text' class="form-control" id="Date1" name="txtRdate"  placeholder="yyyy-mm-dd"  value="<?php echo $i["return_date"]?>"/>
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar" ></span>
                    </span>
                </div>
    
  </div>
 </div>
 
  <div class="form-group">
  <label class="control-label col-sm-2">Remark :</label>
  <div class="col-sm-5">
      <textarea  name="txtRemark"  class="form-control" cols="10" rows="4"><?php echo $i["remark"]?></textarea> 
  </div>
 </div>

 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-5">
  <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary" />
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

 






