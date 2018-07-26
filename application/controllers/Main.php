<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
  
    public function index()  
    {  
        $this->login();  
    }  
  
    public function login()  
    {  
        $this->load->view('login_view');  
    }  
  
    public function signin()  
    {  
        $this->load->view('signin');  
    }  
  
    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->view('data');  
        } else {  
            redirect('Main/invalid');  
        }  
    }  
  
    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  
    public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
        //call validation() method
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'username' => $this->input->post('username'),  
                'currently_logged_in' => 1  
                );    
                $this->session->set_userdata($data);  
                redirect('Main/data');  
        }   
        else {  
            $this->load->view('login_view');  
        }  
    }  
  
    public function signin_validation()  
    {  
        $this->load->library('form_validation');  

        //////////////////////////////검사///////////////////////////////////////////
        $this->form_validation->set_rules('memid', 'ID', 'required|trim|alpha_numeric'); 

        $this->form_validation->set_rules('mempw', 'Password', 'required|trim|alpha_numeric');  

        $this->form_validation->set_rules('memcpw', 'Confirm Password', 'required|trim|matches[mempw]'); 

        $this->form_validation->set_rules('memfirstname', 'First name', 'required|trim');  

        $this->form_validation->set_rules('memlastname', 'Last name', 'required|trim');  

        $this->form_validation->set_rules('membirth', 'Birth day', 'required|trim|numeric|min_length[8]');
        
        $this->form_validation->set_rules('memaddr', 'Address', 'required|trim');
        
        
        $this->form_validation->set_rules('eemail', 'Email', 'required|trim');
        
        
        $this->form_validation->set_rules('phphonenum', 'Phone number', 'required|trim|numeric|min_length[11]');  


        //회원가입 성공
        if ($this->form_validation->run())  
        {   
            echo "Welcome, you are logged in.";

            //DB연결
            $conn = mysqli_connect(
                "lxrb0tech2.csaf2qenttko.us-east-2.rds.amazonaws.com",
                "lxrb0tech2", 
                "luxrobo1!",
                "kiwi");

            //넘어온 데이터 저장
            $id = $this->input->post('memid'); 
            $pw = $this->input->post('mempw');
            $firstname = $this->input->post('memfirstname');
            $lastname = $this->input->post('memlastname');
            $birth = $this->input->post('membirth');
            $addr = $this->input->post('memaddr');
            $nickname = $this->input->post('memnickname');

            //DB에 저장
            mysqli_query($conn, "
                INSERT INTO member
                (memid, mempw, memfirstname, memlastname, membirth, memaddr, memnickname)
                VALUES(
                '$id', '$pw', '$firstname', '$lastname', '$birth', '$addr', '$nickname'
                )
            ");
         } 
        
        //회원가입 실패
        else {  
            $this->load->view('signin');  
        }  
    }  
  
    public function validation()  
    {  
        $this->load->model('login_model');  
  
        if ($this->login_model->log_in_correctly())  
        {  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
            return false;  
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
  
}  
?>  