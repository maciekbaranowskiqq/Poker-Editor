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
		 <a href='gamelist.php' class="optionlinkS"><div class="optionL">Game List</div></a>
		 <a href='gameadd.php' class="optionlinkS"><div class="optionL">Add Game</div></a>
		 <a href='gamefind.php' class="optionlinkS"><div class="optionL">Find Game</div></a>

		</div>
		
		<div id="content">
			<h1 align="center"> Game List </h1><br />
			<?php	require_once('db.php');
				$query1 = "SELECT * FROM rozgrywka";
				$response1 = @mysqli_query($dbc, $query1);
				
			echo '<table align="center"
			cellspacing="5" cellpadding="8">
	
			<tr>
				<td align="center"><b>Game ID</b></td>
				<td align="center"><b>Table Name</b></td>
				<td align="center"><b>Player One</b></td>
				<td align="center"><b>Player Two</b></td>
				<td align="center"><b>Winner ID</b></td>
				<td align="center"><b>Time</b></td>';
		
			while($row = mysqli_fetch_array($response1)){
			
			echo '<tr><td align="center">' .
			$row['0'] . ' </td><td align="center">' .
			$row['1'] . ' </td><td align="center">' .
			$row['2'] . ' </td><td align="center">' .
			$row['3'] . ' </td><td align="center">' .
			$row['4'] . ' </td><td align="center">' .
			$row['5'] . ' </td><td align="center">' .
			"<a href='gameupdate.php?edit=$row[idgame]' class='buttons'>edit</a>" . ' </td><td align="center">' .
			"<a href='deletegame.php?del=$row[idgame]' class='buttons'>delete</a>";
			
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
