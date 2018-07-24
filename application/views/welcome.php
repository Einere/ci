<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./login.php');
}
?>
<html>
<head></head>
<body>
    <?php echo $_SESSION['id']; ?>님, 환영합니다.<br>
    <a href="./show.php">회원목록 조회</a>
    <a href="./logout.php">로그아웃</a>
</body>
</html>