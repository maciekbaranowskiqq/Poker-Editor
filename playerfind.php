

<html>
<head>

	<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

	<div id="container">
	
		<div id="logo">
		 Poker Database
		</div>
		
		<div id="menu">
		<a href='index.php' class="optionlink"><div class="option">Main</div></a>
		<a href='playerlist.php' class="optionlink"><div class="option">Players</div></a>
		<a href='gamelist.php' class="optionlink"><div class="option">Games</div></a>
		<a href='tourneylist.php' class="optionlink"><div class="option">Tourneys</div></a>
		<a href='handlist.php' class="optionlink"><div class="option">Hands</div></a>
		<a href='rankinglist.php' class="optionlink"><div class="option">Ranking</div></a>
		 
		 <div style="clear:both;"></div>
		</div>
		
		<div id="topbar">
			<div id="topbarL">
				<img src="cards.jpeg" />
			</div>
			
			<div id="topbarR">
				O projekcie pokerowym.
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="sidebar">
		
		 <a href='playerlist.php' class="optionlinkS"><div class="optionL">Player List</div></a>
		 <a href='playeradd.php' class="optionlinkS"><div class="optionL">Add Players</div></a>
		 <a href='playeradd.php' class="optionlinkS"><div class="optionL">Find Players</div></a>


		</div>
		
	<div id="content">
	
	<?php	require_once('db.php');

		if ( isset ($_POST['szukane']))
		{
			$szukane = $_POST['szukane'];

			$query1 = "SELECT * FROM gracze WHERE nazwisko='$szukane'";
			$response1 = @mysqli_query($dbc, $query1);
				
			echo '<table align="center"
			cellspacing="2" cellpadding="2">
	
			<tr>
				<td align="center"><b>Player ID</b></td>
				<td align="center"><b>Name</b></td>
				<td align="center"><b>Surname</b></td>
				<td align="center"><b>Birth Year</b></td>
				<td align="center"><b>Wins</b></td>';
				
		while($row = mysqli_fetch_array($response1)){
			
			echo '<tr><td align="center">' .
			$row['0'] . ' </td><td align="center">' .
			$row['1'] . ' </td><td align="center">' .
			$row['2'] . ' </td><td align="center">' .
			$row['3'] . ' </td><td align="center">' .
			$row['4'] . ' </td><td align="center">' ;
			echo '</tr>';
		}
		
		echo '</table><br />';
		
		}
		?>
		<form action="playerfind.php" method="POST">
		Enter the Surname: 	<input type="text" name="szukane"><br /><br />
			<input type="submit" value=" Enter ">
		</form>
		
			
			
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>