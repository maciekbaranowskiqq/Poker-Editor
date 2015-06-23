
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
		 <a href='tourneylist.php' class="optionlinkS"><div class="optionL">Tourney List</div></a>
		 <a href='tourneyadd.php' class="optionlinkS"><div class="optionL">Add Tourney</div></a>
		 <a href='tourneyfind.php' class="optionlinkS"><div class="optionL">Find Tourney</div></a>

		</div>
		
		<div id="content">
			<h1 align="center"> Tourney List</h1><br />
			<?php	require_once('db.php');
				$query1 = "SELECT * FROM turniej";
				$response1 = @mysqli_query($dbc, $query1);
				
			echo '<table align="center"
			cellspacing="5" cellpadding="8">
	
			<tr>
				<td align="center"><b>Tourney ID</b></td>	
				<td align="center"><b>Tourney Name</b></td>
				<td align="center"><b>Number of Players</b></td>
				<td align="center"><b>Time</b></td>
				<td align="center"><b>Winner ID</b></td>
				<td align="center"><b>Reward in $</b></td>';
		
			while($row = mysqli_fetch_array($response1)){
			
			echo '<tr><td align="center">' .
			$row['0'] . ' </td><td align="center">' .
			$row['1'] . ' </td><td align="center">' .
			$row['2'] . ' </td><td align="center">' .
			$row['3'] . ' </td><td align="center">' .
			$row['4'] . ' </td><td align="center">' .
			$row['5'] . ' </td><td align="center">' .
			"<a href='tourneyupdate.php?edit=$row[idturniej]' class='buttons'>edit</a>" . ' </td><td align="center">' .
			"<a href='deletetourney.php?del=$row[idturniej]' class='buttons'>delete</a>";
			
			echo '</tr>';
		}
		
		echo '</table>';
		?>
			
			
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>
