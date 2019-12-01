<html>
<head>
	<style>
		body{
			background-image: url(entry2.jpg);
			background-size: 100% 150%;
			background-repeat: no-repeat;
			//background-color: black;
		}
		table{
			//color: white;
			text-align: center;
			margin-top: 165;
			margin-left: 370;
			//display: inline-block;
		}
	</style>
</head>
<body>
<table border = '1'>
<?php
	session_start();
  if(!isset($_SESSION['username'])){	
		//echo "<caption>". $_SESSION['username'] . "'s entries</caption>";
    header('location:cover.html');
  }
	echo "<caption><strong>". $_SESSION['username'] . "'s entries</strong></caption>";

	$con = mysqli_connect('localhost', 'tushar', 'tushar');

	mysqli_select_db($con, 'journal');

	$name = $_SESSION['username'];
	//$entry = $_POST['entry'];

	$s = " select * from entries where username = '$name'";

	$result = mysqli_query($con, $s);
	//echo "<table border = '1'>
		echo		"<tr>
					<th>SNo.</th>
					<th>Date, Time</th>
					<th>Entry</th>
				</tr>";
	$i = 1;
	while($row = mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>" . $i . "</td>";
		echo "<td>" . $row['datetime'] . "</td>";
		echo "<td>" . $row['entry'] . "</td>";
		echo "</tr>";
		$i = $i + 1;
	}
	//echo "</table>";
?>
</table>
</body>
</html>
