<?php

class admin_model extends CI_Model {

    public function getStudent() {
        $this->db->select('*');
        $this->db->from('usertable');
        $this->db->where('permission', 'Active');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function getTeacher() {
        $this->db->select('*');
        $this->db->from('teachertable');
        $this->db->where('permission', 'Active');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function addSubject($data) {
        $this->db->insert('subject', $data);
    }

    function getAllSubject() {
        $this->db->select('*');
        $this->db->from('subject');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function getDeactiveTeacher() {
        $this->db->select('*');
        $this->db->from('teachertable');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function getDeactiveStudent() {
        $this->db->select('*');
        $this->db->from('usertable');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    function changePermission($teacherID, $permission) {
        $Active = 'Active';
        $Deactive = 'Deactive';
        if ($permission == 'Active') {
            $this->db->set('permission', $Deactive); //value that used to update column  
            $this->db->where('teacherID', $teacherID); //which row want to upgrade  
            $this->db->update('teachertable');  //table name
        } else {
            $this->db->set('permission', $Active); //value that used to update column  
            $this->db->where('teacherID', $teacherID); //which row want to upgrade  
            $this->db->update('teachertable');  //table name
        }
    }
    function changePermissionStudent($userID,$permission){
        $Active = 'Active';
        $Deactive = 'Deactive';
        if ($permission == 'Active') {
            $this->db->set('permission', $Deactive); //value that used to update column  
            $this->db->where('userID', $userID); //which row want to upgrade  
            $this->db->update('usertable');  //table name
        } else {
            $this->db->set('permission', $Active); //value that used to update column  
            $this->db->where('userID', $userID); //which row want to upgrade  
            $this->db->update('usertable');  //table name
        }
    }
    function updateRoutine($data) {  
        $this->db->where('routineID', '1');
        $this->db->update('routine', $data);
    }

    public function getRoutineFile() {
        $this->db->select('*');
        $this->db->from('routine');
        $this->db->where('routineID','1');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
