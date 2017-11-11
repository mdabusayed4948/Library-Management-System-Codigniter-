

 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> Teacher's  Profile</span> </h2>
              <div class="block">    
                  <div class="form-group">
                <?php
                  
                     foreach ($section->result_array() as $row) 
                     :?>
                      
             <?php endforeach;?>      
                
                  
                      
                      <table class="table table-bordered  table-hover " >
                          <thead style="background-color: #F5F5F6">
                                <tr>
                                    <th  colspan="2"><div>&nbsp;</div></th>
                               
                                </tr>
                            </thead>
                            <tbody >
                                       <?php
                                        foreach ($teacher->result_array()  as $row) :?>
                             
                                  <tr>
                                    <th>Teacher's Name</th>
                                     <th><?php echo $row['name'];?></th>
                                </tr>
                                   <tr>
                                    <th>Gender</th>
                                     <th><?php echo $row['gender'];?></th>
                                </tr>
                               <tr>
                                    <th>E-mail Address</th>
                                     <th><?php echo $row['email'];?></th>
                                </tr>
                                 <tr>
                                    <th>Mobile</th>
                                     <th><?php echo $row['mobile'];?></th>
                                </tr>
                                <tr>
                                    <th>Dath of Birth</th>
                                     <th><?php echo $row['dob'];?></th>
                                </tr>
                                 <tr>
                                    <th>Section</th>
                                     <th><?php echo $row['group_name'];?></th>
                                     
                                </tr>   
                               <tr>
                                    <th>Join Date</th>
                                     <th><?php echo $row['join_date'];?></th>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                       <th><?php echo $row['address'];?></th>
                              
                                   
                                </tr>
                             
                                       
                                    <?php endforeach;?>
                                       <tr>
                                           <td colspan="5" style="background-color:#F5F5F6 "></td>
                                       </tr>
                            </tbody>
                      </table>
                      
                  </div>
                  
                  
               </div>
        
      </div>
          
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 








