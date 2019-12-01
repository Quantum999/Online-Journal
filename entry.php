<html>
<body>
<?php

session_start();
  if(!isset($_SESSION['username'])){
    header('location:cover.html');
  }

header('location:main.php');

$con = mysqli_connect('localhost', 'tushar', 'tushar');

mysqli_select_db($con, 'journal');

/*$entry = $_POST['entry'];
$user = $_SESSION['username'];
$date = date('Y-m-d H:i:s');*/


$entry = $_POST['entry'];
$user = $_SESSION['username'];
$date = date('Y-m-d H:i:s');

$s = " insert into entries(entry, username, datetime) values ('$entry', '$user', '$date');";
mysqli_query($con, $s);

?>
</body>
</html>

