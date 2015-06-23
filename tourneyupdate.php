<?php require_once('db.php');

	if(isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$query = "SELECT * FROM turniej WHERE idturniej='$id'";
		$response = @mysqli_query($dbc, $query) or die("Could not update".mysql_error());
		$row=mysqli_fetch_array($response);
	}
	
	if( isset($_POST['newTourneyname']) && ($_POST['newNumberofplayers']) && ($_POST['newTime']) && ($_POST['newIdwinner']) && ($_POST['newReward']) )
	{
		$newTourneyname = $_POST['newTourneyname'];
		$newNumberofplayers = $_POST['newNumberofplayers'];
		$newTime = $_POST['newTime'];
		$newIdwinner = $_POST['newIdwinner'];
		$newReward = $_POST['newReward'];
		$id		 = $_POST['idturniej'];
		$query1	 = "UPDATE turniej SET tourneyname='$newTourneyname', numberofplayers='$newNumberofplayers', time='$newTime', idwinner='$newIdwinner', reward ='$newReward' WHERE idturniej='$id'";
		$response1 = @mysqli_query($dbc, $query1);
		echo "<meta http-equiv='refresh' content='0;url=tourneylist.php'>";
		
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


		<form action="tourneyupdate.php" method="POST">
		Tourney name: <input type="text" name="newTourneyname"                          value="<?php echo $row[1]; ?>"><br />
		Number of Players: <input type="text" name="newNumberofplayers"                 value="<?php echo $row[2]; ?>"><br />
		Time: <input type="text" name="newTime"        									value="<?php echo $row[3]; ?>"><br />
		Winner ID: <input type="text" name="newIdwinner"        			 			value="<?php echo $row[4]; ?>"><br />
		Reward in $: <input type="text" name="newReward"        			 			value="<?php echo $row[5]; ?>"><br />
		<input type="hidden" name="idturniej" value="<?php echo $row[0]; ?>">
		<input type="submit" value=" Update ">
		</form>

			
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>