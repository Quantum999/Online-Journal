<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.html');
	}
?>

<html>
  <head>
  	<style>
 	 		body{
				background-image: url(main6.jpg);
				background-size: 100% 100%;
				background-position: center;
				background-repeat: no-repeat;
				color: white;
  		}
			#area{
				position: relative;
				top: 150px;
				left: 240px;
				width: 900px;
				height: 410px;
				background-color: transparent;
				border: none;
			}
			#save{
				position: relative;
				left: -600px;
				top: -285px;
				cursor: pointer;
				font-size: 24px;
				border: none;
				background-color: transparent;
				border-radius: 15px;
			}
			#entry{
				position: relative;
				//text-decoration: none;
				left: -500px;
				top: -285px;
				cursor: pointer;
				font-size: 24px;
				border: none;
				border-radius: 15px;
				background-color: transparent;
			}
			#my{
				position: relative;
				text-decoration: none;
				color: black;
				top: -285px;
				left: -390px;
				cursor: pointer;
				font-size: 24px;
				border: none;
				background-color: transparent;
			}
			#logout{
				text-decoration: none;
				color: red;
				position: relative;
				font-size: 30px;
				left: 1220px;
				top: -480px;
			}
  	</style>
  </head>
  <body>
	<h1><center><?php session_start();	echo $_SESSION['username']; ?>'s Journal<center></h1>
	<form action="entry.php" method="post">
		<textarea name = "entry" id = "area" placeholder = "Start your journal here..."></textarea>
		<button type="submit" id = "save">SAVE</button>
		<button id = "entry">NEW ENTRY</button>
		<a id = "my" href = "myentry.php">MY ENTRIES</a>
		<a id = "logout" href="logout.php">Logout</a>
	</form>
	<script>
		document.getElementById("entry").addEventListener("click", entry, false);
		function entry(){
			//confirm("Do you want save the present entry?");
			document.getElementById("area").value = "";
			document.getElementById("time").value = "";
			document.getElementById("date").value = "";
		}
		
	</script>
  </body>
</html>
