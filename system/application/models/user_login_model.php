<?php


class User_login_model extends Model{
    //put your code here
    public function check_user_login_info($username,$password){
        $username=  $this->input->post('username',true);
         $password=  md5($this->input->post('password',true));
         $this->db->select('*');
         $this->db->from('user');
         $this->db->where('username',$username);
          $this->db->where('password',$password);
          $query_result=  $this->db->get();
          $result=$query_result->row();
          return $result;
    }
}
