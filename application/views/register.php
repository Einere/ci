<?php
class member{
    var $id;
    var $passwd;
    var $gisu;
    var $realname;
    var $student_id;
    var $birty_date;

    function __construct($input){
        $this->id = $input['id'];
        $this->passwd = $input['passwd'];
        $this->gisu = $input['gisu'];
        $this->realname = $input['realname'];
        $this->student_id = $input['student_id'];
        $this->birty_date = $input['birty_date'];
    }

    function print(){
        echo "id : ".$this->id."<br>";
        echo "passwd : ".$this->passwd."<br>";
        echo "gisu : ".$this->gisu."<br>";
        echo "realname : ".$this->realname."<br>";
        echo "stuent_id : ".$this->student_id."<br>";
        echo "birth : ".$this->birty_date."<br>";
    }

    function register(){
        $conn = mysqli_connect('localhost', 'root', '1234', 'test');
        if(mysqli_connect_errno()){
            printf("connect failed : %s\n", mysqli_connect_error());
        }

        $query = sprintf("INSERT INTO web_tbl (id, passwd, gisu, realname, student_id, birty_date) VALUES('$this->id', '$this->passwd', $this->gisu, '$this->realname', $this->student_id, '$this->birty_date') " );
        echo $query."<br>";
        $result = mysqli_query($conn, $query);

        if(mysqli_warning_count($conn)){
            if($result = mysqli_query($conn, "show warnings")){
                $row = mysqli_fetch_row($result);
                printf("%s (%d): %s\n", $row[0], $row[1], $row[2]);
            }
        }
        echo "query success";
    }
}

$first = new member($_POST);
$first->print();
$first->register();

?>

<html>
<head>
    <title>register</title>
</head>
<body>
    <a href="login.html">back to login</a>
</body>
</html>