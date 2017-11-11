
 <?php  include('./system/application/views/header.php');?>
 
   
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
      <h2 ><span class="style boxshadow"> Member List </span> </h2>
              <div class="block">    
                  <div class="form-group">
          
                
                  
                      
                      <table  class="table table-hover  table-bordered tbl">
                          <thead style="background-color: #F5F5F6">
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
                                        foreach ($member->result_array()  as $row) :?>
                                        
                                       <tr>
                                 <td><?php echo $row['id'];?></td>
                                   <td><?php echo $row['m_name'];?></td>
                                     <td><?php echo $row['email'];?></td>
                                       <td><?php echo $row['mobile'];?></td>
                                     <td>
                                         <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <?php echo "<a href='member_edit/$row[id]'> <span class='glyphicon glyphicon-pencil ' aria-hidden='true'></span> Edit</a>"?>  
                         
                                        </li>
                                        <li> 
                                                <?php echo "<a href='member_delete/$row[id]' onclick='return confirm(\"Are you sure?\")'> <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete</a>"?>  
                                       
                                        </li>
                                          <li> 
                                                <?php echo "<a href='member_profile/$row[id]'> <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Profile</a>"?>  
                         
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

 









