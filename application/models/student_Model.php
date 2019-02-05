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
    
}