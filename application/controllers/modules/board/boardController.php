<?php
    class BoardController extends CI_Controller {
        function _construct() {
            parent::_construct();
            $this->load->database();
            $this->load->model('modules/board/boardModel');
            $this->load->helper(array('url', 'date'));
        }
        public function index() {
            $this->lists();
        }
        public function _remap($method) {
            $this->load->view('modules/board/headerView');
            if(method_exists($this, $method)) {
                $this->{"{$method}"}();
            }
            $this->load->view('modules/board/footerView');
        }
        // 목록 불러오기
        public function lists() {
            $this->load->library('query/modules/connect');
            $conn = $this->connect->get_conn();
            $this->load->library('query/modules/board/selectquery');
            $data['list'] = $this -> selectquery -> get_list($conn);
            $this->load->view('modules/board/listView', $data);
        }
    }
?>