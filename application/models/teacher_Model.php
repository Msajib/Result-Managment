<?php

class teacher_Model extends CI_Model {
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
    function addAssignTeacher($takenSubject){
         $this->db->insert('teacherassignsubject', $takenSubject);
    }
    function getRoutine(){
        $this->db->select('*');
        $this->db->from('routine');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function getSelectedSubject($semCode,$memberID){
        $this->db->select('*');
        $this->db->from('teacherassignsubject');
        $this->db->where('semCode', $semCode);
        $this->db->where('memberID', $memberID);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    function getallSubject($memberID){
        $this->db->select('*');
        $this->db->from('teacherassignsubject');
        $this->db->where('memberID', $memberID);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
}
    
