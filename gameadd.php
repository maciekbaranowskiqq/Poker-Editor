<?php require_once('db.php');
	

	if( isset($_POST['tablename']) && ($_POST['playerone']) && ($_POST['playertwo']) && ($_POST['gamewinnerid']) && ($_POST['time']) )
	{
		$tablename = $_POST['tablename'];
		$playerone = $_POST['playerone'];
		$playertwo = $_POST['playertwo'];
		$gamewinnerid = $_POST['gamewinnerid'];
		$time = $_POST['time'];
		
		$query = "INSERT INTO rozgrywka VALUES('', '$tablename', '$playerone','$playertwo', '$gamewinnerid', '$time')";
		$response = @mysqli_query($dbc, $query);
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

		 <a href='gamelist.php' class="optionlinkS"><div class="optionL">Game List</div></a>
		 <a href='gameadd.php' class="optionlinkS"><div class="optionL">Add Game</div></a>
		 <a href='gamefind.php' class="optionlinkS"><div class="optionL">Find Game</div></a>

		</div>
		
	<div id="content">
	<?php
		if( isset($_POST['tablename']) && ($_POST['playerone']) && ($_POST['playertwo']) && ($_POST['gamewinnerid']) && ($_POST['time']) )
	{
		if($response)
			echo "Succesfull Insertion!<br />";
		else
			echo "Please try again!";
	}
	?>
		
		<form action="gameadd.php" method="POST">
		Table Name: <input type="text" name="tablename"><br />
		Player One ID: <input type="text" name="playerone"><br />
		Player Two ID: <input type="text" name="playertwo"><br />
		Winner ID: <input type="text" name="gamewinnerid"><br />
		Time: <input type="text" name="time"><br />
		<input type="submit" value=" Enter ">
				
	
		</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>