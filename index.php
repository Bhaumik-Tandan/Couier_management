<?php
include "./utils/db.php";
if(isset($_POST['login'])) {
    $loginID= $_POST['loginID'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE lid = '$loginID' AND pass = '$password'";
    $conn=db();
    $result = $conn->query($sql);
    if($result !== false && $result->num_rows > 0) {
        header("Location: ./dashboard");
    } else {
        header("Location: ./loginUnsuccessful.php");
    }


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