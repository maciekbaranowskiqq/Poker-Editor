<?php require_once('db.php');

	if(isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$query = "SELECT * FROM gracze WHERE idgracza='$id'";
		$response = @mysqli_query($dbc, $query) or die("Could not update".mysql_error());
		$row=mysqli_fetch_array($response);
	}
	
	if( isset($_POST['newImie']) && ($_POST['newNazwisko']) && ($_POST['newRokurodzenia']) && ($_POST['newZwyciestwa']) )
	{
		$newImie = $_POST['newImie'];
		$newNazwisko = $_POST['newNazwisko'];
		$newRokurodzenia = $_POST['newRokurodzenia'];
		$newZwyciestwa = $_POST['newZwyciestwa'];
		$id		 = $_POST['idgracza'];
		$query1	 = "UPDATE gracze SET imie='$newImie', nazwisko='$newNazwisko', rokurodzenia='$newRokurodzenia', zwyciestwa='$newZwyciestwa'  WHERE idgracza='$id'";
		$response1 = @mysqli_query($dbc, $query1);
		echo "<meta http-equiv='refresh' content='0;url=playerlist.php'>";
		
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


		<form action="playerupdate.php" method="POST">
		Imie: <input type="text" name="newImie"                         value="<?php echo $row[1]; ?>"><br />
		Nazwisko: <input type="text" name="newNazwisko"                 value="<?php echo $row[2]; ?>"><br />
		Rok Urodzenia: <input type="text" name="newRokurodzenia"        value="<?php echo $row[3]; ?>"><br />
		Zwyciestwa: <input type="text" name="newZwyciestwa"         	value="<?php echo $row[4]; ?>"><br />
		<input type="hidden" name="idgracza" value="<?php echo $row[0]; ?>">
		<input type="submit" value=" Update ">
		</form>

			
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>