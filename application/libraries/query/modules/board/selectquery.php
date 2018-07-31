<?php
    class selectquery {
        function get_list($conn) {       
            $sql = "SELECT * FROM post";
            $result = mysqli_query($conn, $sql);
            return $result;
        }
    }
?>