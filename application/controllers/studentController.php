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

}
?>
