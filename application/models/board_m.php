<?php
    class board_m extends CI_Model {
        function _construct() {
            parent::_construct();
        }

        function get_list() {
            $conn = mysqli_connect(
                "lxrb0tech2.csaf2qenttko.us-east-2.rds.amazonaws.com",
                "lxrb0tech2", 
                "luxrobo1!",
                "kiwi");
            $sql = "SELECT * FROM post";
            $result = mysqli_query($conn, $sql);
            return $result;
        }
    }