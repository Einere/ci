<?php
    class Board extends CI_Controller {
        function _construct() {
            parent::_construct();
            $this->load->database();
            $this->load->model('board_m');
            $this->load->helper(array('url', 'date'));
        }
        public function index() {
            $this->lists();
        }
        public function _remap($method) {
            $this->load->view('header_v');
            if(method_exists($this, $method)) {
                $this->{"{$method}"}();
            }
            $this->load->view('footer_v');
        }
        // 목록 불러오기
        public function lists() {
            $this->load->model('board_m');
            $data['list'] = $this -> board_m -> get_list();
            $this->load->view('list_v', $data);
        }
    }
?>