<?php
session_start();
$id = $_POST['id'];
$passwd = $_POST['passwd'];

$conn = mysqli_connect('localhost', 'root', '1234', 'test');
if(mysqli_connect_errno()){
    printf("connect failed : %s\n", mysqli_connect_error());
}

$query = sprintf("SELECT id FROM web_tbl WHERE id = '$id' and passwd='$passwd'");
$result = mysqli_query($conn, $query);
//mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    $_SESSION['is_login'] = true;
    $_SESSION['id'] = $id;
    header('Location: ./welcome.php');
}
else{
    echo "failed to login<br/>";
}
?>

<html>
<head>
    <title>login_process</title>
</head>
<boyd>
    <a href="login.html">back to login</a>
</body>
</html>