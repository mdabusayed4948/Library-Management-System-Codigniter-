<?php


class addusers extends Model{
    public function updateuserbyid( $data,$id){
        
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->update('user',$data);
        return true;
    }
}
