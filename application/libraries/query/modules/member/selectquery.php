<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');

class selectquery {    
    function select_memseq($conn, $id) {  
        $sql = "SELECT * FROM member WHERE memid = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        return $row;
    }  
}  
?>  