<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Form extends CI_Controller {  
  
    public function index()  
    {  
        $this->load->view('header');  
        $this->load->view('nav');  
        $this->load->view('content');  
        $this->load->view('footer');  
    }  
}     
?>  