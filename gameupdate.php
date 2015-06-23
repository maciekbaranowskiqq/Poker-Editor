<?php require_once('db.php');

	if(isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$query = "SELECT * FROM rozgrywka WHERE idgame='$id'";
		$response = @mysqli_query($dbc, $query) or die("Could not update".mysql_error());
		$row=mysqli_fetch_array($response);
	}
	
	if( isset($_POST['newTablename']) && ($_POST['newPlayerone']) && ($_POST['newPlayertwo']) && ($_POST['newGamewinnerid']) && ($_POST['newTime']) )
	{
		$newTablename = $_POST['newTablename'];
		$newPlayerone = $_POST['newPlayerone'];
		$newPlayertwo = $_POST['newPlayertwo'];
		$newGamewinnerid = $_POST['newGamewinnerid'];
		$newTime = $_POST['newTime'];
		$id		 = $_POST['idgame'];
		$query1	 = "UPDATE rozgrywka SET tablename='$newTablename', playerone='$newPlayerone', playertwo='$newPlayertwo', gamewinnerid='$newGamewinnerid', time='$newTime'  WHERE idgame='$id'";
		$response1 = @mysqli_query($dbc, $query1);
		echo "<meta http-equiv='refresh' content='0;url=gamelist.php'>";
		
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

		
		<form action="gameupdate.php" method="POST">
		Table Name: <input type="text" name="newTablename"    value="<?php echo $row[1]; ?>"><br />
		Player One ID: <input type="text" name="newPlayerone" value="<?php echo $row[2]; ?>"><br />
		Player Two ID: <input type="text" name="newPlayertwo" value="<?php echo $row[3]; ?>"><br />
		Winner ID: <input type="text" name="newGamewinnerid"  value="<?php echo $row[4]; ?>"><br />
		Time: <input type="text" name="newTime"               value="<?php echo $row[5]; ?>"><br />
		<input type="hidden" name="idgame" value="<?php echo $row[0]; ?>">
		<input type="submit" value=" Enter ">
			
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>