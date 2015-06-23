<?php require_once('db.php');
	

	if( isset($_POST['idturniej']) && ($_POST['idgame']) && ($_POST['stackone']) && ($_POST['stacktwo']) && ($_POST['holecardsone']) && ($_POST['holecardstwo'])      && ($_POST['dealer']) && ($_POST['blindlimit']) && ($_POST['idpreflop']) && ($_POST['flop']) && ($_POST['idflop']) && ($_POST['turn']) 
		&& ($_POST['idturn']) && ($_POST['river'])  && ($_POST['idriver'])  )
	{
		$idturniej = $_POST['idturniej'];
		$idgame = $_POST['idgame'];
		$stackone = $_POST['stackone'];
		$stacktwo = $_POST['stacktwo'];
		$holecardsone = $_POST['holecardsone'];
		$holecardstwo = $_POST['holecardstwo'];
		$dealer = $_POST['dealer'];
		$blindlimit = $_POST['blindlimit'];
		$idpreflop = $_POST['idpreflop'];
		$flop = $_POST['flop'];
		$idflop = $_POST['idflop'];
		$turn = $_POST['turn'];
		$idturn = $_POST['idturn'];
		$river = $_POST['river'];
		$idriver = $_POST['idriver'];
		
		$query = "INSERT INTO hands VALUES('', '$idturniej', '$idgame','$stackone', '$stacktwo', '$holecardsone', '$holecardstwo', '$dealer','$blindlimit', '$idpreflop', '$flop', '$idflop', '$turn','$idturn', '$river', '$idriver')";
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
	if( isset($_POST['idturniej']) && ($_POST['idgame']) && ($_POST['stackone']) && ($_POST['stacktwo']) && ($_POST['holecardsone']) && ($_POST['holecardstwo'])      && ($_POST['dealer']) && ($_POST['blindlimit']) && ($_POST['idpreflop']) && ($_POST['flop']) && ($_POST['idflop']) && ($_POST['turn']) 
		&& ($_POST['idturn']) && ($_POST['river'])  && ($_POST['idriver'])  )
	{
		if($response)
			echo "Succesfull Insertion!<br />";
		else
			echo "Please try again!";
	}
	?>
		
		<form action="handadd.php" method="POST">
		Tourney ID: <input type="text" name="idturniej"><br />
		Game ID: <input type="text" name="idgame"><br />
		Stack One: <input type="text" name="stackone"><br />
		Stack Two: <input type="text" name="stacktwo"><br />
		Holecards of the First Player: <input type="text" name="holecardsone"><br />
		Holecards of the Second Player: <input type="text" name="holecardstwo"><br />
		Who's the dealer?: <input type="text" name="dealer"><br />
		Blinds: <input type="text" name="blindlimit"><br />
		IDPreflop: <input type="text" name="idpreflop"><br />
		FLOP: <input type="text" name="flop"><br />
		IDFlop: <input type="text" name="idflop"><br />
		TURN: <input type="text" name="turn"><br />
		IDTurn: <input type="text" name="idturn"><br />
		RIVER: <input type="text" name="river"><br />	
		IDRiver: <input type="text" name="idriver"><br />			
		<input type="submit" value=" Enter ">
		

	
		</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>