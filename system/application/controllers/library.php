<?php
class Library extends Controller{
	
   public function Library(){
	parent::Controller();   
   }	
  
   public function index(){
	   
   }
   
   
   public function book_form(){
	   $this->load->view("book/create_book"); 
   }
   
   public function add(){
	
	$name=$this->input->post('txtName');
	$author=$this->input->post('txtAuthor');
	$publisher=$this->input->post('txtPublisher');	
	$this->db->query("insert into s_book(book_name,author,publisher)values('$name','$author','$publisher')"); 
	redirect("library/book_form");   
	   
   }	
   
   public function display_book(){
	   
       $result=$this->db->query("select id,book_name,author,publisher from s_book");
	   
	   $this->load->view("book/book_view",array("book"=>$result));
	   
   }
   
   public function book_edit($id){
       $book=  $this->db->query("select id,book_name,author,publisher from s_book where id='$id'");
       $this->load->view("book/book_edit_form",array("book"=>$book));
   }
   
   public function update_book(){
       $book_id         =  $this->input->post("txtBookId");
      $book_name  =  $this->input->post("txtBookname");
      $author            =  $this->input->post("txtAuthor");
      $publisher     =  $this->input->post("txtPublisher");
      
      $this->db->query("update s_book set book_name='$book_name',author='$author',publisher='$publisher' where id='$book_id'");
      redirect("library/display_book");
      }
      
      public function book_delete($id){
          $this->db->query("delete from s_book where id='$id'");
      
           redirect("library/display_book");
      }
      
      public function issue_book(){
		  
        $member=$this->db->query("select id,m_name,email,mobile from l_member ");
    $book=$this->db->query("select id,book_name,author,publisher from s_book");
    
          $this->load->view("book/issue_book",array('member'=>$member,'books'=>$book));
      }
      
       public function issue_add(){
	
	$member_id=$this->input->post('txtMemberId');
	$book_id=$this->input->post('txtBookId');
	
                       $rdata=$this->input->post('txtRdate');
                      $remark=$this->input->post('txtRemark');	
	$this->db->query("insert into sayissue_book(l_member_id,book_id,issue_date,return_date,remark)values('$member_id','$book_id',now()+ INTERVAL 6 HOUR,'$rdata','$remark')"); 
	redirect("library/issue_book");   
	   
   }
   
   public function display_issue_book(){
         //  $member=  $this->db->query("select m.id, m.m_name,m.email,m.mobile,m.gender,m.join_date,m.address from l_member as m");
             //  $issue_list=$this->db->query("select id,l_member_id,book_id,issue_date,return_date,remark from issue_book ");
 ///$issue_list=  $this->db->query("select id,l_member_id,book_id,issue_date,return_date,remark from issue_book");
       $issue_list=$this->db->query("select i.id,l.id as lid,l.m_name,l.mobile,l.email,b.book_name,i.issue_date,i.return_date,i.remark from sayissue_book as i,s_book as b,l_member as l where l.id=i.l_member_id and b.id=i.book_id order by i.return_date");
       $this->load->view("book/issue_book_list",array("issue_list"=>$issue_list));
   }
   
        public function issue_booklist_delete($id){
                   $this->db->query("delete from sayissue_book where id='$id'");
      
           redirect("library/display_issue_book");
        }
        
        public function issue_booklist_edit($id){
               $book=$this->db->query("select id,book_name,author,publisher from s_book");
               $member=$this->db->query("select id,m_name,email,mobile from l_member ");
            $issue_list=$this->db->query("select id,l_member_id,book_id,issue_date,return_date,remark from sayissue_book where id='$id'");
            // $issue_list=$this->db->query("select i.id,l.m_name,b.book_name,i.issue_date,i.return_date,i.remark from issue_book as i,book as b,l_member as l where l.id=i.l_member_id and b.id=i.book_id and i.id='$id'");
       $this->load->view("book/issue_booklist_edit_form",array("issue_list"=>$issue_list,"member"=>$member,"book"=>$book));
             
        }
         public function issue_booklist_update(){
           $issue_booklist_id=$this->input->post('txtIsssueId');
            $member_id=$this->input->post('txtMemberId');
            $book_id=$this->input->post('txtBookId');
            $idate=$this->input->post('txtIdate');
             $rdate=$this->input->post('txtRdate');
             $remark=$this->input->post('txtRemark');	
             $this->db->query("update sayissue_book set l_member_id='$member_id',book_id='$book_id',issue_date='$idate',return_date='$rdate',remark='$remark' where id='$issue_booklist_id'");
             redirect("library/display_issue_book");
             }

                public function member_form(){
         $this->load->view("book/create_member");
    } 
    
     public function member_join(){
          $name=$this->input->post('txtMname');
            $mail=$this->input->post('txtMail');
            $mobile=$this->input->post('txtMobile');	
            $gender=$this->input->post('cmbGender');
        $join=$this->input->post('txtJoin');
    $address=$this->input->post('textAddress');
   
   
    $this->db->query("insert into l_member(m_name,email,mobile,gender,join_date,address)values('$name','$mail','$mobile','$gender','$join','$address');");
    redirect("library/member_form");
    }
      public function display_member(){
        $member=  $this->db->query("select m.id, m.m_name,m.email,m.mobile,m.gender,m.join_date,m.address from l_member as m");
        $this->load->view("book/member_view_form",array("member"=>$member));
    }
    
    public function member_edit($id){
         $member=  $this->db->query("select m.id, m.m_name,m.email,m.mobile,m.gender,m.join_date,m.address from l_member as m where id='$id'");  
        $this->load->view("book/member_edit_form",array("member"=>$member));	
        } 
        
      public function member_update_data(){
                $m_id=$this->input->post('txtMid');
                 $name=$this->input->post('txtMname');
            $mail=$this->input->post('txtMail');
            $mobile=$this->input->post('txtMobile');	
            $gender=$this->input->post('cmbGender');
        $join=$this->input->post('txtJoin');
    $address=$this->input->post('textAddress');
    $this->db->query("update l_member set m_name='$name',email='$mail',mobile='$mobile',gender='$gender',join_date='$join',address='$address' where id='$m_id'");
    redirect("library/display_member");   
    }  
     public function member_delete($id){
         $this->db->query("delete from l_member where id='$id'");
        redirect("library/display_member");
    }
     public function member_profile($id){
         
         $member=  $this->db->query("select m.id, m.m_name,m.email,m.mobile,m.gender,m.join_date,m.address from l_member as m where id='$id'");  
        $this->load->view("book/member_profile_form",array("member"=>$member));
        }
        
   
 	
}


