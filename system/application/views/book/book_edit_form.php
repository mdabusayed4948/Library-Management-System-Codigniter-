
 <?php  include('./system/application/views/header.php');?>
 <?php  include('./system/application/views/sidepanel.php');?>
 
<?php

$b=$book->row_array();   
?>

    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style">Book Edit  Form</span> </h2>
              <div class="block">               
                  
              <form action="<?php echo base_url()?>index.php/library/update_book" method="post" style="margin-top:30px;" class="form-horizontal">
 
 <div class="form-group">
  <label class="control-label col-sm-2">Book Name</label>
  <div class="col-sm-6">
  <input type="text" name="txtBookname" class="form-control"  value="<?php echo $b["book_name"]?>"/>
  <input type="hidden" name="txtBookId" class="form-control" value="<?php  echo $b['id'];?>"/> 
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Author</label>
  <div class="col-sm-6">
  <input type="text" name="txtAuthor" class="form-control" value="<?php echo $b["author"]?>"/>
  </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">Publisher</label>
  <div class="col-sm-6">
  <input type="text" name="txtPublisher" class="form-control" value="<?php echo $b["publisher"]?>"/>
  </div>
 </div>
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-6">
  <input type="submit" name="btnSubmit" value="Submit" class="btn btn-success" />
  </div>
 </div>
</form>
                  
                  
                  
                  
               </div>
        
      </div>
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 





