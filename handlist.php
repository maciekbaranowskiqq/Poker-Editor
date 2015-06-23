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
		
		<a href='handlist.php' class="optionlinkS"><div class="optionL">Hand List</div></a>
		<a href='handadd.php' class="optionlinkS"><div class="optionL">Add Hand</div></a>
		<a href='flopadd.php' class="optionlinkS"><div class="optionL">Add Flop</div></a>
		<a href='flopshow.php' class="optionlinkS"><div class="optionL">Show Flop</div></a>
		<a href='turnadd.php' class="optionlinkS"><div class="optionL">Add Turn</div></a>
		<a href='turnshow.php' class="optionlinkS"><div class="optionL">Show Turn</div></a>
		<a href='riveradd.php' class="optionlinkS"><div class="optionL">Add River</div></a>
		<a href='rivershow.php' class="optionlinkS"><div class="optionL">Show River</div></a>
		<a href='handfind.php' class="optionlinkS"><div class="optionL">Find Hand</div></a>



		</div>
		
	<div id="content">
			<h1 align="center"> Hand List </h1><br />
			<?php	require_once('db.php');
				$query1 = "SELECT * FROM hands";
				$response1 = @mysqli_query($dbc, $query1);
				
			echo '<table align="center"
			cellspacing="2" cellpadding="2">
	
			<tr>
				<td align="center"><b>ID</b></td>
				<td align="center"><b>Tourney ID</b></td>
				<td align="center"><b>Game ID</b></td>
				<td align="center"><b>Stack 1</b></td>
				<td align="center"><b>Stack 2</b></td>
				<td align="center"><b>Cards 1</b></td>
				<td align="center"><b>Cards 2</b></td>
				<td align="center"><b>Dealer</b></td>
				<td align="center"><b>Flop</b></td>
				<td align="center"><b>Turn</b></td>
				<td align="center"><b>River</b></td>';
				
			while($row = mysqli_fetch_array($response1)){
			
			echo '<tr><td align="center">' .
			$row['0'] . ' </td><td align="center">' .
			$row['1'] . ' </td><td align="center">' .
			$row['2'] . ' </td><td align="center">' .
			$row['3'] . ' </td><td align="center">' .
			$row['4'] . ' </td><td align="center">' .
			$row['5'] . ' </td><td align="center">' .
			$row['6'] . ' </td><td align="center">' .
			$row['7'] . ' </td><td align="center">' .
			$row['10'] . ' </td><td align="center">' .
			$row['12'] . ' </td><td align="center">' .
			$row['14'] . ' </td><td align="center">' .
			"<a href='handupdate.php?edit=$row[idhand]' class='buttons'>edit</a>" . ' </td><td align="center">' .
			"<a href='deletehand.php?del=$row[idhand]' class='buttons'>delete</a>";
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
