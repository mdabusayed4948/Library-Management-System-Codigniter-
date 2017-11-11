

 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> Member's  Profile</span> </h2>
              <div class="block">    
                  <div class="form-group">
              
                      
        
                
                  
                      
                      <table class="table table-bordered  table-hover " >
                          <thead style="background-color: #F5F5F6">
                                <tr>
                                    <th  colspan="2"><div>&nbsp;</div></th>
                               
                                </tr>
                            </thead>
                            <tbody >
                                       <?php
                                        foreach ($member->result_array()  as $row) :?>
                             
                                  <tr>
                                    <th>Member's Name</th>
                                     <th><?php echo $row['m_name'];?></th>
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
                                    <th>Gender</th>
                                     <th><?php echo $row['gender'];?></th>
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

 










