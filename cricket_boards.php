<!DOCTYPE html>
<html>
<style >
	body {font-family: Arial, Helvetica, sans-serif; background-repeat: no repeat; color: black; text-transform: uppercase;
  background-size: 100%;
}
	table{
		border: 2px solid black; height:100px; width:900px; font-size: 30px;
	}
	tr{
		border: 2px solid black; height:100px; width:800px;
	}
	th{
		border: 2px solid black; height:100px; width:800px;
	}
	.fade-in-text {
  font-family: Arial;
  font-size: 60px;
  animation: fadeIn 5s;
  -webkit-animation: fadeIn 5s;
  -moz-animation: fadeIn 5s;
  -o-animation: fadeIn 5s;
  -ms-animation: fadeIn 5s;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-moz-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-webkit-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-o-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-ms-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
</style>
<head>
	<title>CRICKET BOARDS</title>
	
</head>
<body class="fade-in-text" background="img/bg1.jpg">
<div ><table align="center" width="100%"><tr><th><p><h1>Cricket Boards</h1></p></th></tr></div>
	<table align="center">
		<tr>
			<th>Board Name</th>
			<th>Chairman</th>
			<th>Team's Board</th>
			<th>DOA</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from cricket_boards";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["board_name"]."</th>"."<th>".
			$row["chairman"]."</th><th>".
			$row["team"]."</th><th>".
			$row["DOA"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>