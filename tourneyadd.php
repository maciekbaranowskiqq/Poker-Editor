<?php require_once('db.php');
	
	if(isset($_POST['tourneyname']) && ($_POST['numberofplayers']) && ($_POST['time']) && ($_POST['idwinner']) && ($_POST['reward']))
	{
		$tourneyname = $_POST['tourneyname'];
		$numberofplayers = $_POST['numberofplayers'];
		$time = $_POST['time'];
		$idwinner = $_POST['idwinner'];
		$reward = $_POST['reward'];
		
		$query = "INSERT INTO turniej VALUES('','$tourneyname','$numberofplayers', '$time', '$idwinner','$reward')";
		$response = @mysqli_query($dbc, $query);
	}
	
	if ( isset($_POST['idwinner']))
	{
		$idwinner = $_POST['idwinner'];
		$query1="UPDATE gracze SET zwyciestwa=zwyciestwa+1 WHERE idgracza=$idwinner";
		$response1 = @mysqli_query($dbc, $query1);
	}
?>

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
	<?php
		if(isset($_POST['tourneyname']) && ($_POST['numberofplayers']) && ($_POST['time']) && ($_POST['idwinner']) && ($_POST['reward']))
	{
		if($response)
			echo "Succesfull Insertion!<br />";
		else
			echo "Please try again!";
	}
	?>
		
		<form action="tourneyadd.php" method="POST">
		Tourney name: <input type="text" name="tourneyname"><br />
		Number of Players: <input type="text" name="numberofplayers"><br />
		Time: <input type="text" name="time"><br />
		Winner ID: <input type="text" name="idwinner"><br />
		Reward in $: <input type="text" name="reward"><br />
		<input type="submit" value=" Enter ">
				
	
		</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>