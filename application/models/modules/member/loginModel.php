<?php  
  
class LoginModel extends CI_Model {  
  
    public function log_in_correctly() {  
        // $this->db->where('username', $this->input->post('username'));  
        // $this->db->where('password', $this->input->post('password'));  
        // $query = $this->db->get('signup'); 

        //DB연결
        $conn = new mysqli(
            "lxrb0tech2.csaf2qenttko.us-east-2.rds.amazonaws.com",
            "lxrb0tech2", 
            "luxrobo1!",
            "kiwi");

        $id = $this->input->post('username');
        $pw = $this->input->post('password');
        var_dump($id);
        var_dump($pw);
        $query = "SELECT * FROM member WHERE memid = '$id' AND mempw = '$pw'";
        $result = $conn->query($query);
        var_dump($result);

        if ($result->num_rows == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
    }  
}  
?>  