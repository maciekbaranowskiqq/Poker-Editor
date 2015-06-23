<?php require_once('db.php');
	

	if(isset($_POST['imie']) && ($_POST['nazwisko']) && ($_POST['rokurodzenia']) && ($_POST['zwyciestwa']))
	{
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$rokurodzenia = $_POST['rokurodzenia'];
		$zwyciestwa = $_POST['zwyciestwa'];
		
		$query = "INSERT INTO gracze VALUES('','$imie','$nazwisko','$rokurodzenia','$zwyciestwa')";
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
		 <a href='playerlist.php' class="optionlinkS"><div class="optionL">Player List</div></a>
		 <a href='playeradd.php' class="optionlinkS"><div class="optionL">Add Players</div></a>
		 <a href='playeradd.php' class="optionlinkS"><div class="optionL">Find Players</div></a>

		</div>
		
	<div id="content">
	<?php
		if(isset($_POST['imie']) && ($_POST['nazwisko']) && ($_POST['rokurodzenia']) && ($_POST['zwyciestwa']))
	{
		if($response)
			echo "Succesfull Insertion!<br />";
		else
			echo "Please try again!";
	}
	?>
		
	
	

		<form action="playeradd.php" method="POST">
		Name: 	<input type="text" name="imie"><br /><br />
		Surname:	<input type="text" name="nazwisko"><br /><br />
		Year of Birth:	<input type="text" name="rokurodzenia"><br /><br />
		Wins:	<input type="text" name="zwyciestwa"><br /><br />
			<input type="submit" value=" Enter ">
		</form>
		
	
		</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>