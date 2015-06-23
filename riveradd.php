<?php require_once('db.php');
	

	if( isset($_POST['idriver']) && ($_POST['movenumber']) && ($_POST['bigblindmove']) && ($_POST['valueone']) && ($_POST['dealermove']) 
		&& ($_POST['valuetwo']) )
	{
		$idriver = $_POST['idriver'];
		$movenumber = $_POST['movenumber'];
		$bigblindmove = $_POST['bigblindmove'];
		$valueone = $_POST['valueone'];
		$dealermove = $_POST['dealermove'];
		$valuetwo = $_POST['valuetwo'];
		
		$query = "INSERT INTO river VALUES('', '$idriver', '$movenumber','$bigblindmove', '$valueone', '$dealermove', '$valuetwo')";
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
	<?php
	if( isset($_POST['idriver']) && ($_POST['movenumber']) && ($_POST['bigblindmove']) && ($_POST['valueone']) && ($_POST['dealermove']) && ($_POST['valuetwo']) )
	{
		if($response)
			echo "Succesfull Insertion!<br />";
		else
			echo "Please try again!";
	}
	
	?>
		
		<form action="riveradd.php" method="POST">
		River ID: <input type="text" name="idriver" value="0"><br />
		Numer ruchu: <input type="text" name="movenumber" value="1"><br />
		BB's Move: <input type="text" name="bigblindmove" value="x"><br />
		BB's Value: <input type="text" name="valueone" value="10"><br />
		SB's Move<input type="text" name="dealermove" value="x"><br />
		SB's Value<input type="text" name="valuetwo" value="10"><br />		
		<input type="submit" value=" Enter ">
		</form>

	
		</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>