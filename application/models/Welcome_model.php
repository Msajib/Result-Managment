<?php
class Welcome_model extends CI_Model {
    
    public function addNewStudent($data){
        $this->db->insert('usertable', $data);
    }
    public function addNewTeacher($data){
        $this->db->insert('teachertable', $data);
    }
        public function checkValidUser($memberID, $password) {
        $this->db->select('*');
        $this->db->from('usertable');
        $this->db->where('memberID', $memberID);
        $this->db->where('password', $password);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function checkValidTeacher($memberID, $password) {
        $Permission='Active';
        $this->db->select('*');
        $this->db->from('teachertable');
        $this->db->where('memberID', $memberID);
        $this->db->where('password', $password);
        $this->db->where('permission', $Permission);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function checkValidAdmin($memberID, $password) {
        $Permission='Active';
        $this->db->select('*');
        $this->db->from('admintable');
        $this->db->where('memberID', $memberID);
        $this->db->where('password', $password);
        $this->db->where('permission', $Permission);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
}
?>

