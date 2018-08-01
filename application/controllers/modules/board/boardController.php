<?php
    class BoardController extends CI_Controller {
        private $conn;
        function __construct() {
            parent::__construct();
            $this->load->library('query/modules/connect');
            $this -> conn = $this->connect->get_conn();
        }
        public function index() {
            $this->lists();
        }
        // 목록 불러오기
        public function lists() {
            $this->load->library('query/modules/board/selectquery');
            $data['list'] = $this->selectquery->get_list($this->conn);
            $this->load->view('modules/board/listView', $data);
        }

        public function upload() {
            $this->load->library('query/modules/member/selectquery');
            $data['memseq'] = $this->selectquery->select_memseq($this->conn, $this->input->get('id'));
            $this->load->view('modules/board/uploadView',$data);
        }

        public function upload_validation() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('posttitle', 'Post Title', 'required');
            $this->form_validation->set_rules('postcontent', 'Post Content', 'required');
             
            //등록 성공
            if ($this->form_validation->run())  
                {   

                    //넘어온 데이터 저장
                    $title = $this->input->post('posttitle'); 
                    $content = $this->input->post('postcontent');
                    
                    $file = NULL;   //아직없음

                    $id = $this->session->userdata('username');

                    $this->load->library('query/modules/member/selectquery');
                    $row = $this->selectquery->select_memseq($this->conn, $id);
                    $memseq = $row['memseq'];

                    $this->load->library('query/modules/board/insertquery');
                    $this->insertquery->post_insert($this->conn, $memseq, $title, $content, $file);



                    redirect('modules/board/boardController');
                } 

            //등록 실패
            else {  
                $this->load->library('query/modules/board/selectquery');
                $data['list'] = $this->selectquery->get_list($this->conn);
                $this->load->view('modules/board/listView', $data);
                }  
        }

    }
?>