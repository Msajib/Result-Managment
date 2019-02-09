<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('student_Model', 'SModel', true);
    }
    public function index(){
        $data=array();
        $data['routine']=$this->SModel->getRoutine();
        $this->load->view('Student/homePage',$data);
    }
    function studentProfile(){
        $this->load->view('Student/studentProfile');
    }
    function updateProfile(){
        $this->load->view('Student/updateProfile');
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
        
        $this->SModel->updateProfile($memberID,$data);
        
        redirect('studentController/updateProfile'); 
    }
    function selectSubject(){
        $data=array();
        $data['subject'] = $this->SModel->getSubject();
        $data['semister'] = $this->SModel->getSemister();
        $this->load->view('Student/subject',$data);
    }
   
    function assignSubStudent() {
        $subCode = $this->input->post('subCode', true);
        $takenSubject=array();
        foreach ($subCode as $key => $value){
            $takenSubject['subCode'] = $value;
            $takenSubject['semCode'] = $this->input->post('semCode', true);
            $takenSubject['memberID'] = $this->input->post('memberID', true);
            
            $this->SModel->addAssignStudent($takenSubject);
        }
        

        redirect('studentController/selectSubject');
    }
    function studentResult(){
        $data=array();
        $data['semister'] = $this->SModel->getSemister();
        $this->load->view('Student/studentResult',$data);
    }
    function findResult(){
        $memberID = $this->input->post('memberID',TRUE);
        $semCode = $this->input->post('semisterID',TRUE);
        $data = array();
        $data['result'] = $this->SModel->getResultOfStudent($memberID,$semCode);
//        echo '<pre>';
//        print_r($result);
//        exit();
        $this->load->view('Student/resultStatus',$data);
        
    }

}
?>
