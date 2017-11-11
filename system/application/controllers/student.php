<?php
class Student extends Controller{
	
   public function Student(){
	parent::Controller();   
   }	
  
   public function index(){
	   
   }
   
   
   public function student_form(){
       $class=$this->db->query("select id,class_name from class ");
      $session=$this->db->query("select id,session_name from session ");
     $section=$this->db->query("select id,group_name from c_group ");
       
      $this->load->view("student/create_student",array('class'=>$class,'session'=>$session,'section'=>$section)); 
   }
   
  public function display_dashboard(){
//$student=$this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email, s.gender, c.class_name, s.class_roll, s.mobile, s.apply_date, se.session_name, g.group_name from student  s, class  c, session  se, c_group  g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id limit 5");
$c=  $this->db->query("select count(*) 'total' from student");  
        $row=$c->row_array();
        $count=$row["total"];
        
       $this->load->view("home_view",array("count"=>$count)); 
   }
     
   
   public function add(){
	
	$name=$this->input->post('txtSname');
	$fname=$this->input->post('txtFname');
	$mname=$this->input->post('txtMname');	
    $dob=$this->input->post('txtDate');
	$mail=$this->input->post('txtMail');
    $gender=$this->input->post('cmbGender');
    $class=$this->input->post('cmbClass');
    $roll=$this->input->post('txtRoll');
    $mobile=$this->input->post('txtMobile');
    $adate=$this->input->post('txtaDate');
    $session=$this->input->post('cmbSession');
    $section=$this->input->post('cmbSection');
	$this->db->query("insert into student(student_name,father_name,mother_name,birth_day,email,gender,class_id,class_roll,mobile,apply_date,session_id,group_id)values('$name','$fname','$mname','$dob','$mail','$gender','$class','$roll','$mobile','$adate','$session','$section')"); 
                       redirect("student/student_form");
	   
   }	
   
    public function display_student(){
  // $user=$this->db->query("select u.id,u.username,r.name from user u, role r where r.id=u.role_id");	   
      
        //$student=  $this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email.s.gender,c.class_name,s.roll,s.mobile,s.apply_date,se.session_name,g.group_name from student  s,class  c, session  se, c_group  g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id");
       $student=  $this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email, s.gender, c.class_name, s.class_roll, s.mobile, s.apply_date, se.session_name, g.group_name from student  s, class  c, session  se, c_group  g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id");
	   $this->load->view("student/student_view_form",array("student"=>$student));
	   
   }
      public function student_profile($id){
  // $user=$this->db->query("select u.id,u.username,r.name from user u, role r where r.id=u.role_id");	   
       // $class=$this->db->query("select id,class_name from class ");
        //$student=  $this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email.s.gender,c.class_name,s.roll,s.mobile,s.apply_date,se.session_name,g.group_name from student  s,class  c, session  se, c_group  g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id");
             $class=$this->db->query("select id,class_name from class ");
      $session=$this->db->query("select id,session_name from session ");
     $section=$this->db->query("select id,group_name from c_group ");
          $student=  $this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email, s.gender, c.class_name,s.class_roll, s.mobile, s.apply_date, se.session_name,g.group_name from student  as s, class  as c, session  as se, c_group  as g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id and s.id='$id'");
	   $this->load->view("student/student_profile_form",array("student"=>$student,'class'=>$class,'session'=>$session,'section'=>$section));
	   
   }
   
     public function student_edit($id){
   $class=$this->db->query("select id,class_name from class ");
      $session=$this->db->query("select id,session_name from session ");
     $section=$this->db->query("select id,group_name from c_group ");
     $student=  $this->db->query("select s.id,s.student_name,s.father_name,s.mother_name,s.birth_day,s.email, s.gender, c.class_name,s.class_id, s.class_roll, s.mobile, s.apply_date, se.session_name,s.session_id, g.group_name,s.group_id from student  s, class  c, session  se, c_group  g where c.id=s.class_id and se.id=s.session_id and g.id=s.group_id and s.id='$id'");
     $this->load->view("student/student_edit_form",array("student"=>$student, "class"=>$class, "session"=>$session, "section"=>$section));	   
   }
   
   public function update_student_data(){
         $student_id=$this->input->post('txtStudentId');
        $sname        =$this->input->post('txtSname');
        $fname        =$this->input->post('txtFname');
       $mname        =$this->input->post('txtMname');
       $dob      =$this->input->post('txtDate');
       $mail       =$this->input->post('txtMail');
       $gender     =$this->input->post('cmbGender'); 
       $class        =$this->input->post('cmbClass');
        $roll       =$this->input->post('txtRoll');
        $mobile        =$this->input->post('txtMobile');
        $adate       =$this->input->post('txtaDate');
        $session      =$this->input->post('cmbSession'); 
         $section        =$this->input->post('cmbSection'); 
         
         $this->db->query("update student set student_name='$sname',father_name='$fname',mother_name='$mname',birth_day='$dob',email='$mail',gender='$gender',class_id='$class',class_roll='$roll',mobile='$mobile',apply_date='$adate',session_id='$session', group_id='$section' where id='$student_id' ");
   
         redirect("student/display_student");
   }
   
    public function student_delete($id){
	    
		 $this->db->query("delete from student where id='$id'");
		
                 redirect("student/display_student");
    }                 
}


