<?php


class Teacher  extends Controller{
    public function Teacher(){
        parent::Controller();
    }
    
    public function teacher_form(){
          $section=$this->db->query("select id,group_name from c_group ");
        $this->load->view("teacher/create_teacher",array("section"=>$section));
   
        }
    
     public function join(){
       $tname=$this->input->post('txtTname');
            $gender=$this->input->post('cmbGender');
            $mail=$this->input->post('txtMail');	
            $mobile=$this->input->post('txtMobile');
        $dob=$this->input->post('txtDob');
    $section=$this->input->post('cmbSection');
    $join=$this->input->post('txtjoin');
    $address=$this->input->post('textAddress');
   
    $this->db->query("insert into teacher(name,gender,email,mobile,dob,c_group_id,join_date,address)values('$tname','$gender','$mail','$mobile','$dob','$section','$join','$address');");
    redirect("teacher/teacher_form");
    } 
    
    public function display_teacher(){
        $teacher=$this->db->query("select t.id, t.name,t.gender,t.email,t.mobile,t.dob,g.group_name,t.join_date,t.address from teacher as t,c_group as g where g.id=t.c_group_id");
           $this->load->view("teacher/teacher_view_form",array("teacher"=>$teacher));
    }
    public function teacher_edit($id){
          $teacher=$this->db->query("select t.id, t.name,t.gender,t.email,t.mobile,t.dob,g.group_name,t.join_date,t.address from teacher as t,c_group as g where g.id=t.c_group_id and t.id='$id'");
       $section=$this->db->query("select id,group_name from c_group ");
            $this->load->view("teacher/teacher_edit_form",array("teacher"=>$teacher,"section"=>$section));	
    }
    
    public function teacher_update_data(){
            $teacher_id=$this->input->post('txtTeacherId');
        $tname=$this->input->post('txtTname');
            $gender=$this->input->post('cmbGender');
            $mail=$this->input->post('txtMail');	
            $mobile=$this->input->post('txtMobile');
        $dob=$this->input->post('txtDob');
    $section=$this->input->post('cmbSection');
    $join=$this->input->post('txtjoin');
    $address=$this->input->post('textAddress');
    $this->db->query("update teacher set name='$tname',gender='$gender',email='$mail',mobile='$mobile',dob='$dob',c_group_id='$section',join_date='$join',address='$address' where id='$teacher_id' ");
      redirect("teacher/display_teacher");
    }
    
    public function teacher_delete($id){
        $this->db->query("delete from teacher where id='$id'");
        redirect("teacher/display_teacher");
    }
    
    public function teacher_profile($id){
         $section=$this->db->query("select id,group_name from c_group ");
        $teacher=$this->db->query("select t.id, t.name,t.gender,t.email,t.mobile,t.dob,g.group_name,t.join_date,t.address from teacher as t,c_group as g where g.id=t.c_group_id and t.id='$id'");    
        $this->load->view("teacher/teacher_profile_form",array("section"=>$section,"teacher"=>$teacher));
        }
}
