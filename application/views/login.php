<!doctype html>
<html>
<head>
    <title>Login</title>
    <sciprt></sciprt>
</head>
<body>
    <form action="login_process.php" method="POST">
        <table>
            <tr>
                <th><label>id : </label></th>
                <th><input type="text" name="id"/><br></th>
            </tr>
            <tr>
                <th><label>password : </label></th>
                <th><input type="password" name="passwd"/><br/></th>
            </tr>
        </table>
        <input type="submit" value="login"/>
    </form>
    <a href="./signup.html">sign up</a>

</body>
</html>
