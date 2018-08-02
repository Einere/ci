<?php
    class boardselect {
        function get_list($conn) {       
            $sql = "SELECT * FROM post ORDER BY postseq DESC";
            $result = mysqli_query($conn, $sql);
            return $result;
        }
    }
?>