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
    public function studentResult($subCode,$semCode){
        
        $data=array();
        $data['showSubject']= $this->TModel->getSelectedSubject($semCode,$subCode);
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
        $this->load->view('Teacher/subjectSelect',$data);
    }
    function addMarksStudent(){
        $memberID = $this->input->post('memberID',TRUE);
        $resultMark = $this->input->post('resultMark',TRUE);
        $subCode = $this->input->post('subCode',TRUE);
        $semCode = $this->input->post('semCode',TRUE);
        foreach ($memberID as $key =>$value){
            $this->TModel->addMarks($value,$resultMark[$key],$subCode[$key],$semCode[$key]);
        }
//        $data = array();
//        for ($i = 0; $i < count($memberID); $i++) {
//            $data[] = array('memberID' => $memberID[$i], 'resultMark' => $resultMark[$i], 'subCode' => $subCode[$i], 'semCode' => $semCode[$i]);
//            $this->TModel->addMarks($data);
//        }

            redirect('teacherController/subjectSelect');
    }
    function updateProfileInfo(){
        $memberID=$this->session->userdata('memberID');
        $data = array();
        $data['firstName'] = $this->input->post('firstName',TRUE);
        $data['lastName'] = $this->input->post('lastName',TRUE);
        $data['nickName'] = $this->input->post('nickName',TRUE);
        $data['dateOfBirth'] = $this->input->post('dateOfBirth',TRUE);
        $data['placeOfBirth'] = $this->input->post('placeOfBirth',TRUE);
        $data['gender'] = $this->input->post('gender',TRUE);
        $data['maritalStatus'] = $this->input->post('maritalStatus',TRUE);
        $data['bloodGroup'] = $this->input->post('bloodGroup',TRUE);
        $data['religion'] = $this->input->post('religion',TRUE);
        $data['nationality'] = $this->input->post('nationality',TRUE);
        $data['NationalID'] = $this->input->post('nationalID',TRUE);
        $data['passport'] = $this->input->post('passport',TRUE);
        $data['IM'] = $this->input->post('IM',TRUE);
        $data['socialNetwork'] = $this->input->post('socialNetwork',TRUE);
        $data['aboutYou'] = $this->input->post('aboutYou',TRUE);
        
        $this->TModel->updateProfile($memberID,$data);
        
        redirect('teacherController/updateProfile');
        
        
    }

    function searchStudent() {
        $memberID = $this->input->post('memberID', TRUE);
        $data = array();
        $data['studentProfile'] = $this->TModel->searchStudent($memberID);
        $data['studentResult'] = $this->TModel->searchStudentResult($memberID);
        
        if ($data == TRUE) {
            $this->load->view('Teacher/studentProfile', $data);
        } else {
            $error = array();
            $error['message'] = "Student Not Found.Try another..";
            $this->session->set_flashdata($error);
            redirect('teacherController/index');
        }
    }
    function SearchStudentValue(){
        $this->load->view('Teacher/findStudent');
    }
    

}

?>
