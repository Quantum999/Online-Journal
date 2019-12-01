<html>
<body>
<?php

session_start();

$con = mysqli_connect('localhost', 'tushar', 'tushar');

mysqli_select_db($con, 'journal');

$name = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from users where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
  header('location:main.php');
}else{
  header('location:login.html');
} 

?>
</body>
</html>

