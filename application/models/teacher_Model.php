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
    function getSelectedSubject($semCode,$subCode){
        $this->db->select('*');
        $this->db->from('studentassignsubject');
        $this->db->where('subCode', $subCode);
        $this->db->where('semCode', $semCode);
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
    function addMarks($value, $result,$subCode ,$semCode) {
        $this->db->set('resultMark', $result); //value that used to update column  
        $this->db->where('memberID', $value); //which row want to upgrade
        $this->db->where('subCode', $subCode);
        $this->db->where('semCode', $semCode);
        $this->db->update('studentassignsubject');  //table name
    }

}
    
