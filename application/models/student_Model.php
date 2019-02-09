<?php

class student_Model extends CI_Model {
    
    function getSubject(){
        $this->db->select('*');
        $this->db->from('subject');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    function getSemister(){
        $this->db->select('*');
        $this->db->from('semister');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    } 
    function addAssignStudent($takenSubject){
         $this->db->insert('studentassignsubject', $takenSubject);
    }
    function getRoutine(){
        $this->db->select('*');
        $this->db->from('routine');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function updateProfile($memberID,$data){
        $this->db->where('memberID', $memberID);
        $this->db->update('usertable', $data);
    }
    function getResultOfStudent($memberID,$semCode){
        $this->db->select('*');
        $this->db->from('studentassignsubject');
        $this->db->where('memberID', $memberID);
        $this->db->where('semCode', $semCode);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
}