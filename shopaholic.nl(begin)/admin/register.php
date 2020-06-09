<?php
include('connect.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $username = mysqli_real_escape_string($conn, $_POST['user']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);
 $password = md5($password); //Password Encrypted
 $sql = "INSERT INTO userpass(user,pass) values('$username', '$password')";
 $result = mysqli_query($conn, $sql);
 echo "Account succesvol aangemaakt!";
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h1>Registreer nieuwe gebruiker</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<label>Username</label>
<input type="text" name="user"><br/><br/>
<label>Password</label>
<input type="password" name="pass"><br/><br/>
<input type="submit" name="submit" value="Creeër"><br/>
<p><a href="login.php">Login</a></p>
</form>
</body>
</html>
