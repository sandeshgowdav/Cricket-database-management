<!DOCTYPE html>
<html>
<style >
	body {background-repeat: no repeat; text-transform: uppercase; font-family: Arial, Helvetica, sans-serif;
  background-size: 100%;
}
	table{
		border: 2px solid black; font-size: 30px; height:100px; width:900px;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
</style>
<head><p>
	<title>SCHEDULES</title>
</head>
<body background="img/bg1.jpg"> 
<div ><table align="center" width="30%"><tr><th><p><h1 style="color: black;">SCHEDULES</h1></p></th></tr></div>
	 <div style="margin-top:100px;" >
	<table align="center">
		<tr>
			<th>Date</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Match Number</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select *from schedules order by date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["date"]."</th><th>".
			$row["team1"]."</th><th>".
			$row["team2"]."</th><th>".
			$row["match_no"]."</th><th>";
			}
		}
		mysqli_close($con);
		?>
</table>

<tr>
		 <form action="ttu.php" method="post">
		 <tr align="center" width="300%" style="margin-top:200px;">
		 <div style="margin-top:50px; font-size:30px;">
            <p style="text-align: center;">Enter Match Number to retrieve players
            <input type="number" style=font-size:25px; name="match_no" style="width: 300;height: 25;"><br><br>
            <input type="submit" style="float:center; font-size:30px; background:black; color:white;" value="Submit">
            </p></tr>
    </form>




</body>
</html>