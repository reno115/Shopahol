<?php
include('connect.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 $username = mysqli_real_escape_string($conn, $_POST['user']);
 $password = mysqli_real_escape_string($conn, $_POST['pass']);
 $password = md5($password);
 $sql = "SELECT * FROM userpass WHERE user='$username' AND '$password'";
 $query = mysqli_query($conn, $sql);
 $res=mysqli_num_rows($query);

 if($res == 1)
 {
 header("Location: admin.php");
 }
 else
 {
 echo "Foute gebruikersnaam of wachtwoord!";
 }
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1>Login</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label>Username</label>
<input type="text" name="user"><br/><br/>
<label>Password</label>
<input type="password" name="pass"><br/><br/>
<input type="submit" name="submit" value="Login"><br/>
<p><a href="register.php">Nog geen account? Registreer hier.</a></p>
</form>
</body>
</html>
