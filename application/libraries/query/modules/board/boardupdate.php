<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');

class boardupdate {    
    function count_update($conn, $postseq, $count) {
        mysqli_query($conn, "
        UPDATE post SET postviewcount= $count WHERE postseq=$postseq
         ");

    } 

    function count_update($conn, $posttitle, $postcontent, $file) {
        mysqli_query($conn, "
        UPDATE post SET posttitle = $posttitle AND postcontent=$postcontent AND file=$file WHERE postseq=$postseq
         ");

    } 
    
}  
?>  