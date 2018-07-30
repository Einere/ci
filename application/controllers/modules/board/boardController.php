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
            $this->load->model('modules/board/boardModel');
            $data['list'] = $this -> boardModel -> get_list();
            $this->load->view('modules/board/listView', $data);
        }
    }
?>