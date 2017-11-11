

 <?php  include('./system/application/views/header.php');?>
 <?php  include('./system/application/views/sidepanel.php');?>
  
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> User  Profile</span> </h2>
              <div class="block">    
                  <div class="form-group">
            <?php
                       foreach ($role->result_array() as $row) :?>
                      
             <?php endforeach;?>      
           
                     <?php
                                        foreach ($user->result_array() as $row) :?>
                      
                      <table class="table table-bordered  table-hover " >
                          <thead style="background-color: #F5F5F6">
                                <tr>
                                    <th  colspan="2"><div>&nbsp;</div></th>
                               
                                </tr>
                            </thead>
                            <tbody >
                                    
                                <tr>
                                    <th >Id</th>
                                     <th><?php echo $row['id'];?></th>
                                </tr>
                                  <tr>
                                    <th>User Name</th>
                                     <th><?php echo $row['username'];?></th>
                                </tr>
                           
                                  <tr>
                                    <th>Name</th>
                                   
                                       <th><?php echo $row['name'];?></th>
                                
                                  
                                </tr>
                            
                               
                             
                                       
                                
                                       <tr>
                                           <td colspan="5" style="background-color:#F5F5F6 "></td>
                                       </tr>
                            </tbody>
                                <?php endforeach;?>
                      </table>
                      
                  </div>
                  
                  
               </div>
        
      </div>
          
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 









