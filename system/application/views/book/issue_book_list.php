
 <?php  include('./system/application/views/header.php');?>

  
    <div class="col-md-10">
      
        <div class="box round first grid" >
       		
            <h2  ><span class="style boxshadow">Issue Book List </span> </h2>
              <div class="block">    
                  <div class="form-group">
                        
                      
                      <table class="table table-bordered  table-hover">
                          <thead style="background-color: #F5F5F6">
                                <tr>
                                    
                                    <th ><div><?php echo ("Member's Name");?></div></th>
									 <th ><div><?php echo ("Member's Phone");?></div></th>
									  <th ><div><?php echo ("Member's E-mail");?></div></th>
                                    <th><div><?php echo ('Book Name');?></div></th>
                                 <th><div><?php echo ('Issue Date');?></div></th>
                                <th><div><?php echo ('Return Date');?></div></th>
                                 <th><div><?php echo ('Remark ');?></div></th>
                                  <th width="150"><div><?php echo ('Options');?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                       <?php
                                           
  

                          
                                        foreach ($issue_list->result_array()  as $row) :?>
                                   

                            
             
                                       <tr>
                               
                                
                                 <td>Id=<?php echo $row['lid'];?> || <?php echo $row['m_name'];?></td>
                                 <td><?php echo $row['mobile'];?></td>
							   <td><?php echo $row['email'];?></td>
							 
                                     <td><?php echo $row['book_name'];?></td>
                                     <td> <?php echo date("d M Y",strtotime($row['issue_date']))?></td>
                                       <td> <?php echo date("d M Y",strtotime($row['return_date']))?></td>
                                  
                                     <td><?php echo $row['remark'];?></td>
                                     <td>
                                         <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <?php echo "<a href='issue_booklist_edit/$row[id]'> <span class='glyphicon glyphicon-pencil ' aria-hidden='true'></span> Edit</a>"?>  
                         
                                        </li>
                                        <li> 
                                                <?php echo "<a href='issue_booklist_delete/$row[id]' > <span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete</a>"?>  
                                       
                                        </li>
                                        
                                             </ul>
                                         </div>
                                     </td>
                                       </tr>
                                       
                                    <?php endforeach;?>
                                       <tr>
                                           <td colspan="8" style="background-color:#F5F5F6 "></td>
                                       </tr>
                            </tbody>
                      </table>
                      
                  </div>
                  
                  
               </div>
        
      </div>
          
  </div>

      
  <?php  include('./system/application/views/footer.php');?>

 






