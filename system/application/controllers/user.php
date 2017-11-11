<?php
class User extends Controller{
	
   public function User(){
	parent::Controller();   
   }	
  
   public function index(){
	   
   }
   
   
   public function user_form(){
	   
	   $role=$this->db->query("select id,name from `ha_role`");
	   
	   $this->load->view("user/user_form",array("role"=>$role)); 
   }
   public function display_dashboard(){
$user=$this->db->query("select u.id,u.username,r.name from ha_user u, ha_role r where r.id=u.role_id limit 5");
$c=  $this->db->query("select count(*) 'total' from ha_user");  
        $row=$c->row_array();
        $count=$row["total"];
        
       $this->load->view("home_view",array("user"=>$user,"count"=>$count)); 
   }
   
   public function save_user(){
	
	$username=$this->input->post('txtUsername',true);
	$password=$this->input->post('pwdPassword',true);
	$repassword=  $this->input->post('pwdRePassword',true);
	$role_id=$this->input->post('cmbRoleId',true);
	
	 $role=$this->db->query("select id,name from `ha_role`");
	
	
	if($password==$repassword){
		
	$this->db->query("insert into ha_user(username,password,role_id)values('$username',md5('$password'),'$role_id')"); 
	
	  $this->load->view("user/user_form",array("role"=>$role,"success"=>"Succufully Saved")); 
	
	}else{
	  $this->load->view("user/user_form",array("role"=>$role,"error"=>"Password did not match")); 
		
    }
	   
	   
   }	
   
   
   
   public function display_user(){
	   
       $user=$this->db->query("select u.id,u.username,r.name from ha_user u, ha_role r where r.id=u.role_id");
	  
	   $this->load->view("user/user_view",array("user"=>$user));
           
	   
   }
  
 
   
   
 public function user_edit($id){
                            
                               
	   
	     $role=$this->db->query("select id,name from `ha_role`");
           
       	$result=$this->db->query("select u.id,u.username,r.name,u.role_id from ha_user u, ha_role r where r.id=u.role_id and u.id='$id'");   
	 
	 $this->load->view("user/user_edit",array("user"=>$result,"role"=>$role));
        
 }
 
  
	
	
	    public function update_data( ){
           $user_id=$this->input->post('txtUserId');
           $username=$this->input->post('txtUsername');
	  $password=md5($this->input->post('pwdpassword'));
                      
	 $role_id=$this->input->post('cmbRoleId');
                        
            
        $this->db->query("update ha_user set username='$username',password='$password',role_id='$role_id' where id='$user_id'");
     redirect("user/display_user");   
                            
                      
	
	
	
    }
    
      public function user_delete($id){
	    
		 $this->db->query("delete from ha_user where id='$id'");
		
                 redirect("user/display_user");
	   
	
		
   }
   
       public function user_profile($id){
      $role=$this->db->query("select id,name from `ha_role`");
       	$result=$this->db->query("select u.id,u.username,u.password,r.name from ha_user u, ha_role r where r.id=u.role_id and u.id='$id'");   
	 
	 $this->load->view("user/user_profile_form",array("user"=>$result,"role"=>$role));
	  
        
   }
   
    public function login(){
	   
	  $username=$this->input->post('txtUsername');
	  $password=$this->input->post('pwdPassword');
	  
	  $result=$this->db->query("select id,username from ha_user where username='$username' and password=md5('$password')");
	  
	  
	  $row=$result->row_array();
	  
	 
	  
	  if(isset($row['id'])){
		  
		   $this->load->view("home_view");
	    
		
	  }else{
		  
	  $this->load->view("login_view");
	  
	  }
	  
	  
	     
   }
   
 
}


