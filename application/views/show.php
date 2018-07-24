<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./login.php');
}

$conn = mysqli_connect('localhost', 'root', '1234', 'test');
if(mysqli_connect_errno()){
    printf("connect failed : %s\n", mysqli_connect_error());
}

$query = sprintf("SELECT * FROM web_tbl ORDER by id");
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    printf("%s, %s, %d, %s, %d, %s", $row['id'], $row['passwd'], $row['gisu'], $row['realname'], $row['student_id'], $row['birty_date']);
    echo "<br/>";
}
?>

<html>
<head></head>
<body>
    <br/>
    <a href="./welcome.php">홈으로 돌아가기</a>
</body>
</html>