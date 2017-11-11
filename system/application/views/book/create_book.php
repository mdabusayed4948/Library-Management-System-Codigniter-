
 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 ><span class="style boxshadow">Add Book Form</span> </h2>
              <div class="block">               
                  
              <form action="<?php echo base_url()?>index.php/library/add" method="post" style="margin-top:30px;" class="form-horizontal">
 
 <div class="form-group">
  <label class="control-label col-sm-2">Book Name:</label>
  <div class="col-sm-6">
  <input type="text" name="txtName" class="form-control"/>
  </div>
 </div>
 
 <div class="form-group">
  <label class="control-label col-sm-2">Author Name:</label>
  <div class="col-sm-6">
  <input type="text" name="txtAuthor" class="form-control" />
  </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">Publisher:</label>
  <div class="col-sm-6">
  <input type="text" name="txtPublisher" class="form-control" />
  </div>
 </div>
 <div class="form-group">
  <div class="col-sm-offset-2 col-sm-6">
  <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary" />
  </div>
 </div>
</form>
                  
                  
                  
                  
               </div>
        
      </div>
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 




