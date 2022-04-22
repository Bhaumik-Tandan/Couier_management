<?php
include "./utils/db.php";
if(isset($_POST['login'])) {
    $loginID= $_POST['loginID'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE loginID = '$loginID' AND password = '$password'";
    $conn=
    $result = $conn->query($sql);


}
?>

<form method="post">
LOGIN ID:
<input type="text" name="loginID" />
<br/>
Password:
<input type="password" name="password"/>
<button type="submit" name="login">Login</button>
</form>