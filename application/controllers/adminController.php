<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_Model', 'AModel', true);
    }
    public function index(){
        $data=array();
        $data['student'] = $this->AModel->getStudent();
        $data['teacher'] = $this->AModel->getTeacher();
//        echo '<pre>';
//        print_r($data);
        $this->load->view('Admin/homePage',$data);
    }
    public function subject(){
        $data=array();
        $data['subject']=$this->AModel->getAllSubject();
       $this->load->view('Admin/addSubject',$data);
    }
    public function addSubject(){
        $data=array();
        $data['subName']=$this->input->post('subName', true);
        $data['subCode']=$this->input->post('subCode', true);
        
        $this->AModel->addSubject($data);
        
        redirect('adminController/subject');
    }
    function permission(){
        $data=array();
        $data['Student']=$this->AModel->getDeactiveStudent();
        $data['Teacher']=$this->AModel->getDeactiveTeacher();
        $this->load->view('Admin/adminPermmision',$data);
    }
    function changePermissionTeacher($teacherID,$permission){
//        $this->AModel->getTeacher();
           
        $this->AModel->changePermission($teacherID,$permission);
        redirect('adminController/permission');
    }
    function changePermissionStudent($userID,$permission){
        $this->AModel->changePermissionStudent($userID,$permission);
        redirect('adminController/permission');
    }
    function routine(){
        $data=array();
        $data['routine']=$this->AModel->getRoutineFile();
        $this->load->view('Admin/Routine',$data);
    }
    function uploadRoutine(){
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'UploadPicture/Routine/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = '500000';
//        $config['max_width'] = '100240';
//        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('adminController/routine');
        }
        else {
            $fdata = $this->upload->data();
            $data = array();
            $data['routineFile'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            
            $this->AModel->updateRoutine($data);
            
            $sdata = array();
            $sdata['message'] = 'Routine Upload Seccessfully !';
            $this->session->set_userdata($sdata);
            redirect('adminController/routine');
        }
        
    }
    

}

