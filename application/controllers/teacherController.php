<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacherController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('teacher_Model', 'TModel', true);
    }
    public function index(){
        $data=array();
        $data['routine']=$this->TModel->getRoutine();
        $data['subject'] = $this->TModel->getSubject();
        $data['semister'] = $this->TModel->getSemister();
        $this->load->view('Teacher/homePage',$data);
    }
    public function teacherProfile(){
        $this->load->view('Teacher/teacherProfile');
    }
    public function updateProfile(){
        $this->load->view('Teacher/updateProfile');
    }
    public function studentResult($subCode){
        $semCode = $subCode;
//        echo '<pre>';
//        print_r($semCode);
//        exit();
        $memberID = $this->session->userdata('memberID');
        $data=array();
        $data['showSubject']= $this->TModel->getSelectedSubject($semCode,$memberID);
        $data['subject'] = $this->TModel->getSubject();
        $data['semister'] = $this->TModel->getSemister();
        $this->load->view('Teacher/assignStudentMarks',$data);
    }
    public function assignSubject(){

        $data=array();
        $data['subject'] = $this->TModel->getSubject();
        $data['semister'] = $this->TModel->getSemister();
        $this->load->view('Teacher/assignSubject',$data);
    }
    function assignSubTeacher() {
        $subCode = $this->input->post('subCode', true);
        $takenSubject=array();
        foreach ($subCode as $key => $value){
            $takenSubject['subCode'] = $value;
            $takenSubject['semCode'] = $this->input->post('semCode', true);
            $takenSubject['memberID'] = $this->input->post('memberID', true);
            $this->TModel->addAssignTeacher($takenSubject);
        }
        
        redirect('teacherController/assignSubject');
    }
    function subjectSelect(){
        $memberID = $this->session->userdata('memberID');
        $data = array();
        $data['subject'] = $this->TModel->getallSubject($memberID);
        $this->load->view('Teacher/studentResult',$data);
    }
    
    
    
}
?>
