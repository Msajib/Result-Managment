<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Welcome_model', 'w_model', true);
        $this->load->library('session');
        
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        session_destroy();
        $this->load->view('loginPage'); 
    }

    public function registration() {
        $this->load->view('registrationPage');
    }

    function addNewUser() {
        $data = array();
        /* Uplod start */
        $config['upload_path'] = 'UploadPicture/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '50000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            redirect('Welcome/registration');
        } else {
            $fdata = $this->upload->data();
            $type = $this->input->post('type', true);
            $data = array();
            $data['firstName'] = $this->input->post('firstName', true);
            $data['lastName'] = $this->input->post('lastName', true);
            $data['password'] = $this->input->post('password', true);
            $data['gender'] = $this->input->post('gender', true);
            $data['email'] = $this->input->post('email', true);
            $data['phoneNumber'] = $this->input->post('phoneNumber', true);
            $data['memberID'] = $this->input->post('memberID', true);
            $data['picture'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            if ($type == Student) {
                $this->w_model->addNewStudent($data);
            } else {
                $this->w_model->addNewTeacher($data);
            }
            $sdata = array();
            $sdata['message'] = 'Registration Successfully !';
            $this->session->set_userdata($sdata);
            redirect('Welcome/index');
        }
    }

    public function check_Login() {
        $memberID = $this->input->post('memberID', true);
        $password = $this->input->post('password', true);
        $result = $this->w_model->checkValidUser($memberID, $password);
        $resultTeacher = $this->w_model->checkValidTeacher($memberID, $password);
        $resultAdmin = $this->w_model->checkValidAdmin($memberID, $password);
//         echo '<pre>';
//         print_r($resultTeacher);
        if ($result || $resultTeacher || $resultAdmin) {

            if ($result == TRUE) {
                $studentInfo = array();
                $studentInfo['firstName'] = $result->firstName;
                $studentInfo['lastName'] = $result->lastName;
                $studentInfo['nickName'] = $result->nickName;
                $studentInfo['dateOfBirth'] = $result->dateOfBirth;
                $studentInfo['placeOfBirth'] = $result->placeOfBirth;
                $studentInfo['gender'] = $result->gender;
                $studentInfo['maritalStatus'] = $result->maritalStatus;
                $studentInfo['email'] = $result->email;
                $studentInfo['phoneNumber'] = $result->phoneNumber;
                $studentInfo['memberID'] = $result->memberID;
                $studentInfo['bloodGroup'] = $result->bloodGroup;
                $studentInfo['religion'] = $result->religion;
                $studentInfo['nationality'] = $result->nationality;
                $studentInfo['nationalID'] = $result->nationalID;
                $studentInfo['passport'] = $result->passport;
                $studentInfo['IM'] = $result->IM;
                $studentInfo['socialNetwork'] = $result->socialNetwork;
                $studentInfo['aboutYou'] = $result->aboutYou;
                $studentInfo['permission'] = $result->permission;
                $studentInfo['picture'] = $result->picture;

                $this->session->set_userdata($studentInfo);

                redirect("studentController/index");
            } else if ($resultTeacher == TRUE) {
                $teacherInfo = array();
                $teacherInfo['firstName'] = $resultTeacher->firstName;
                $teacherInfo['lastName'] = $resultTeacher->lastName;
                $teacherInfo['nickName'] = $resultTeacher->nickName;
                $teacherInfo['dateOfBirth'] = $resultTeacher->dateOfBirth;
                $teacherInfo['placeOfBirth'] = $resultTeacher->placeOfBirth;
                $teacherInfo['gender'] = $resultTeacher->gender;
                $teacherInfo['maritalStatus'] = $resultTeacher->maritalStatus;
                $teacherInfo['email'] = $resultTeacher->email;
                $teacherInfo['phoneNumber'] = $resultTeacher->phoneNumber;
                $teacherInfo['memberID'] = $resultTeacher->memberID;
                $teacherInfo['bloodGroup'] = $resultTeacher->bloodGroup;
                $teacherInfo['religion'] = $resultTeacher->religion;
                $teacherInfo['nationality'] = $resultTeacher->nationality;
                $teacherInfo['nationalID'] = $resultTeacher->nationalID;
                $teacherInfo['passport'] = $resultTeacher->passport;
                $teacherInfo['IM'] = $resultTeacher->IM;
                $teacherInfo['socialNetwork'] = $resultTeacher->socialNetwork;
                $teacherInfo['aboutYou'] = $resultTeacher->aboutYou;
                $teacherInfo['permission'] = $resultTeacher->permission;
                $teacherInfo['picture'] = $resultTeacher->picture;

                $this->session->set_userdata($teacherInfo);

                redirect("teacherController/index");
            } else {
                $adminInfo = array();
                $adminInfo['fullName'] = $resultAdmin->adminName;
                $adminInfo['gender'] = $resultAdmin->gender;
                $adminInfo['email'] = $resultAdmin->email;
                $adminInfo['phoneNumber'] = $resultAdmin->phoneNumber;
                $adminInfo['memberID'] = $resultAdmin->memberID;
                $adminInfo['picture'] = $resultAdmin->picture;

                $this->session->set_userdata($adminInfo);

                redirect("adminController/index");
            }
        } else {
            $sdata = array();
            $sdata['exception'] = "Sorry!!! User name or password is invalid!";
            $this->session->set_userdata($sdata);
            redirect("welcome/index");
        }
    }

}
