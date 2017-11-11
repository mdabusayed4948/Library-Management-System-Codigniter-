
 <?php  include('./system/application/views/header.php');?>
 
   
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> View Student </span> </h2>
              <div class="block">    
                  <div class="form-group">
          
                
                  
                      
                      <table  class="table table-hover  table-bordered">
                          <thead style="background-color: #F5F5F6">
	<tr>
	<td colspan="5"><a href="http://localhost/code_project/index.php/student/student_form"><span class="tbl" style="float:right"><i class="glyphicon glyphicon-plus"></i>Add</span></a></td>
	</tr>
                                <tr>
                                    <th width="30" ><div><?php echo ('Id');?></div></th>
                                    <th  ><div><?php echo ('Name');?></div></th>
                                    <th > <div><?php echo ('E-mail');?></div></th>
                                    <th ><div><?php echo ('Phone');?></div></th>
                                  <th width="100"><div><?php echo ('Options');?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                       <?php
                                        foreach ($student->result_array()  as $row) :?>
                                        
                                       <tr>
                                 <td><?php echo $row['id'];?></td>
                                   <td><?php echo $row['student_name'];?></td>
                                     <td><?php echo $row['email'];?></td>
                                       <td><?php echo $row['mobile'];?></td>
                                     <td>
                                         <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <?php echo "<a href='student_edit/$row[id]'> <span class='glyphicon glyphicon-pencil ' aria-hidden='true'></span> Edit</a>"?>  
                         
                                        </li>
                                        <li> 
                                                <?php echo "<a href='student_delete/$row[id]' > <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete</a>"?>  
                                       
                                        </li>
                                          <li> 
                                                <?php echo "<a href='student_profile/$row[id]'> <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Profile</a>"?>  
                         
                                        </li>
                                             </ul>
                                         </div>
                                     </td>
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

 






