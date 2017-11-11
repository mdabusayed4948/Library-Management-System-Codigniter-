

 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> Student  Profile</span> </h2>
              <div class="block">    
                  <div class="form-group">
                <?php
                       foreach ($class->result_array() as $row) 
                      foreach ($session->result_array() as $row) 
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
                                        foreach ($student->result_array()  as $row) :?>
                             
                                  <tr>
                                    <th>Student's Name</th>
                                     <th><?php echo $row['student_name'];?></th>
                                </tr>
                                  <tr>
                                    <th>Father's Name</th>
                                     <th><?php echo $row['father_name'];?></th>
                                </tr>
                                <tr>
                                    <th>Mother's Name</th>
                                     <th><?php echo $row['mother_name'];?></th>
                                </tr>
                              
                                <tr>
                                    <th>Dath of Birth</th>
                                     <th><?php echo $row['birth_day'];?></th>
                                </tr>
                                <tr>
                                    <th>E-mail Address</th>
                                     <th><?php echo $row['email'];?></th>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                     <th><?php echo $row['gender'];?></th>
                                </tr>
                                <tr>
                                    <th>Class</th>
                                       <th><?php echo $row['class_name'];?></th>
                              
                                   
                                </tr>
                                <tr>
                                    <th>Class Roll</th>
                                     <th><?php echo $row['class_roll'];?></th>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                     <th><?php echo $row['mobile'];?></th>
                                </tr>
                                <tr>
                                    <th>Apply Date</th>
                                     <th><?php echo $row['apply_date'];?></th>
                                </tr>
                                      <tr>
                                    <th>Session</th>
                                  <th><?php echo $row['session_name'];?></th>
                                </tr>   
                                  <tr>
                                    <th>Section</th>
                                     <th><?php echo $row['group_name'];?></th>
                                     
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

 







