
 <?php  include('./system/application/views/header.php');?>


  
    <div class="col-md-10">
  <div class="box round first grid">
       		
      <h2 > <span class="style boxshadow">Welcome to Dashboard</span></h2>
    <div class="block">               
     <div class='row'>
		


  <div class='col-sm-6'>
       
               <div class="tbl sttbl">
           <table class="table table-bordered table-hover">
        <thead>
               
            <tr>
      
        <th  colspan="2" style="background-color: #F5F5F6"> <a  href="http://dev.intels.co/sayed/lms/index.php/user/display_user" style="text-decoration: none"> <h3 style="text-align: center; padding: 0px; margin: 0px"><img src="<?php echo base_url();?>images/user.jpg " />&nbsp;<span class="boxshadow" >  Total User
        = <?php
        $c=  $this->db->query("select count(*) 'total' from ha_user");  
        $row=$c->row_array();
        $count=$row["total"];
        echo $count;
                  ?>
                    </span>
                            </h3>
                        </a>	

                </th>
               
        </tr> 
       

        <tr >
              <th style="text-align: center">Role Name</th>
               <th style="text-align: center">User Name</th>
               
        </tr> 
        </thead>
            <?php
        
              $user=$this->db->query("select u.id,u.username,r.name from ha_user u, ha_role r where r.id=u.role_id limit 4");  
            foreach ($user->result_array()  as $row) 
            
                :?>  
            
        <tbody>
            
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['username'];?></td>
            </tr>
              
          
           
        </tbody>
        
             <?php endforeach;?>  
          <tr>
              <td colspan="2" style="background-color: #F5F5F6"></td>
               
            </tr>
    </table>
		
</div>
</div>
 
 <div class='col-sm-6'>
       
               <div class="tbl sttbl">
                   <table class="table table-bordered table-hover" >
        <thead>
               
            <tr>
      
                <th  colspan="3" style="background-color: #F5F5F6">  <a  href="http://dev.intels.co/sayed/lms/index.php/library/display_member" style="text-decoration: none"> <h3 style="text-align: center; padding: 0px; margin: 0px"><img src="<?php echo base_url();?>images/user.jpg " />&nbsp;<span class="boxshadow" >   Library Member
                               = <?php
                  $c=  $this->db->query("select count(*) 'total' from l_member");  
        $row=$c->row_array();
        $count=$row["total"];
        echo $count;
                  ?>
                    </span>
                            </h3>
                        </a>	

                </th>
               
        </tr> 
       

        <tr >
               <th style="text-align: center">Member Name</th>
                  <th style="text-align: center">Mobile No</th>
				   <th style="text-align: center">E-mail</th>
        </tr> 
        </thead>
            <?php
            $member=  $this->db->query("select m.id, m.m_name,m.email,m.mobile,m.gender,m.join_date,m.address from l_member as m limit 4");
            foreach ($member->result_array()  as $row) :?>  
            
        <tbody>
            
            <tr>
               <td><?php echo $row['m_name'];?></td>
                <td><?php echo $row['mobile'];?></td>
				   <td><?php echo $row['email'];?></td>
            </tr>
              
          
           
        </tbody>
        
             <?php endforeach;?>  
          <tr>
              <td colspan="3" style="background-color: #F5F5F6"></td>
               
            </tr>
    </table>
		
</div>
</div>    
     
       
	
			
     </div>     

<div class="row">
 
 <div class='col-sm-6'>
       
               <div class="tbl sttbl">
                   <table class="table table-bordered table-hover" >
        <thead>
               
            <tr>
      
                <th  colspan="2" style="background-color: #F5F5F6"> <a  href="http://dev.intels.co/sayed/lms/index.php/library/display_book" style="text-decoration: none"> <h3 style="text-align: center; padding: 0px; margin: 0px"><img src="<?php echo base_url();?>images/book1.png " />&nbsp;<span class="boxshadow" >  Book List
                               = <?php
                  $c=  $this->db->query("select count(*) 'total' from s_book");  
        $row=$c->row_array();
        $count=$row["total"];
        echo $count;
                  ?>
                    </span>
                            </h3>
                        </a>	

                </th>
               
        </tr> 
       

        <tr >
              <th style="text-align: center">Book Name</th>
               <th style="text-align: center">Author Name</th>
               
        </tr> 
        </thead>
            <?php
          $book=$this->db->query("select id,book_name,author,publisher from s_book limit 4");
            foreach ($book->result_array()  as $row) :?>  
            
        <tbody>
            
            <tr>
              
                <td><?php echo $row['book_name'];?></td>
                  <td><?php echo $row['author'];?></td>
            </tr>
              
          
           
        </tbody>
        
             <?php endforeach;?>  
          <tr>
              <td colspan="3" style="background-color: #F5F5F6"></td>
               
            </tr>
    </table>
		
</div>
</div>  

    
   <div class='col-sm-6'>
       
               <div class="tbl sttbl">
                   <table class="table table-bordered table-hover" >
        <thead>
               
            <tr>
      
                <th  colspan="3" style="background-color: #F5F5F6">         <a  href="http://dev.intels.co/sayed/lms/index.php/library/display_issue_book" style="text-decoration: none"> <h3 style="text-align: center; padding: 0px; margin: 0px"><img src="<?php echo base_url();?>images/book1.png " />&nbsp;<span class="boxshadow" >  Issue Book
                               = <?php
                  $c=  $this->db->query("select count(*) 'total' from sayissue_book");  
        $row=$c->row_array();
        $count=$row["total"];
        echo $count;
                  ?>
                    </span>
                            </h3>
                        </a>	

                </th>
               
        </tr> 
       

        <tr >
              <th style="text-align: center">Member Name</th>
               <th style="text-align: center">Book  Name</th>
               <th style="text-align: center">Return Date</th>
        </tr> 
        </thead>
            <?php
                  $issue_list=$this->db->query("select i.id,l.m_name,b.book_name,i.issue_date,i.return_date,i.remark from sayissue_book as i,s_book as b,l_member as l where l.id=i.l_member_id and b.id=i.book_id order by i.return_date limit 4");
                 foreach ($issue_list->result_array()  as $row)     :?> 
            
                    
            
        <tbody>
            
            <tr>
                <td><?php echo $row['m_name'];?></td>
                <td><?php echo $row['book_name'];?></td>
                <td> <?php echo date("d M Y",strtotime($row['return_date']))?></td>
            </tr>
              
          
           
        </tbody>
        
             <?php endforeach;?>  
          <tr>
              <td colspan="3" style="background-color: #F5F5F6"></td>
               
            </tr>
    </table>
		
</div>
</div>    
    
 </div>
 
   
</div>
        
</div>
  </div>

      
  <?php  include('./system/application/views/footer.php');?>
 

 

