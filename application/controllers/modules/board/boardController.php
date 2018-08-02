<?php
    class BoardController extends CI_Controller {
        private $conn;
        private $id;
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
            $this->load->library('query/modules/board/boardselect');
            $data['list'] = $this->boardselect->get_list($this->conn);
            //$this->load->view('modules/board/listView', $data);
            $data['nickname'] = array();
            foreach($data['list'] as $lt) {
                $this->load->library('query/modules/member/memberselect');
                $row = $this->memberselect->select_memseq($this->conn, $lt['member_memseq']);
                array_push($data['nickname'], $row['memnickname']);
            }
            $this->load->view('modules/board/listView', $data);    

        }

        public function upload() {
            $this->load->library('query/modules/member/memberselect');
            $data['memseq'] = $this->memberselect->select_memid($this->conn, $this->input->get('id'));
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
                    $this->load->library('query/modules/member/memberselect');
                    $row = $this->memberselect->select_memid($this->conn, $id);
                    $memseq = $row['memseq'];

                    $this->load->library('query/modules/board/boardinsert');
                    $this->boardinsert->post_insert($this->conn, $memseq, $title, $content, $file);



                    redirect('modules/board/boardController');
                } 

            //등록 실패
            else {  
                // $this->load->library('query/modules/board/boardselect');
                // $data['list'] = $this->boardselect->get_list($this->conn);
                // $this->load->view('modules/board/listView', $data);
                $this->lists();
                }  
        }

        
        //자세히 보기
        public function detail($postseq) {
            //echo $this->input->get('poseseq');
            
            $this->load->library('query/modules/board/boardselect');
            $data['post'] = $this->boardselect->get_detail($this->conn, $postseq)->fetch_assoc();
            $this->load->library('query/modules/member/memberselect');
            $result = $this->memberselect->select_memseq($this->conn, $data['post']['member_memseq']);
            $data['writer'] = $result['memnickname'];
            // var_dump($data['post']);
            // echo "<br>";
            // var_dump($data['writer']);
            $this->load->view('modules/board/detailView', $data);
        }
    }
?>