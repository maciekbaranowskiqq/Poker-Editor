<?php require_once('db.php');

	if(isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$query = "SELECT * FROM hands WHERE idhand='$id'";
		$response = @mysqli_query($dbc, $query) or die("Could not update".mysql_error());
		$row=mysqli_fetch_array($response);
	}
	


	if( isset($_POST['newIdturniej']) 
		&& ($_POST['newIdgame']) 
		&& ($_POST['newStackone']) 
		&& ($_POST['newStacktwo']) 
		&& ($_POST['newHolecardsone']) 
		&& ($_POST['newHolecardstwo']) 
		&& ($_POST['newDealer']) 
		&& ($_POST['newBlindlimit']) 
		&& ($_POST['newIdpreflop']) 
		&& ($_POST['newFlop']) 
		&& ($_POST['newIdflop']) 
		&& ($_POST['newTurn']) 
		&& ($_POST['newIdturn']) 
		&& ($_POST['newRiver'])  
		&& ($_POST['newIdriver']) 
		&& ( $_POST['idhand']))
		{
			
		$newIdturniej	 = $_POST['newIdturniej'];
		$newIdgame		 = $_POST['newIdgame'];
		$newStackone 	 = $_POST['newStackone'];
		$newStacktwo	 = $_POST['newStacktwo'];
		$newHolecardsone = $_POST['newHolecardsone'];
		$newHolecardstwo = $_POST['newHolecardstwo'];
		$newDealer 		 = $_POST['newDealer'];
		$newBlindlimit	 = $_POST['newBlindlimit'];
		$newIdpreflop	 = $_POST['newIdpreflop'];
		$newFlop 		 = $_POST['newFlop'];
		$newIdflop 		 = $_POST['newIdflop'];
		$newTurn 		 = $_POST['newTurn'];
		$newIdturn 		 = $_POST['newIdturn'];
		$newRiver		 = $_POST['newRiver'];
		$newIdriver		 = $_POST['newIdriver'];
		$id				 = $_POST['idhand'];
		
		$query1 = "UPDATE hands SET 
		idturniej='$newIdturniej', 
		idgame='$newIdgame', 
		stackone='$newStackone', 
		stacktwo='$newStacktwo', 
		holecardsone='$newHolecardsone', 
		holecardstwo='$newHolecardstwo', 
		dealer='$newDealer', 
		blindlimit='$newBlindlimit', 
		idpreflop='$newIdpreflop', 
		flop='$newFlop', 
		idflop='$newIdflop', 
		turn='$newTurn', 
		idturn='$newIdturn', 
		river='$newRiver', 
		idriver='$newIdriver' 
		WHERE idhand='$id'" ;
				
		$response1 = @mysqli_query($dbc, $query1);
		echo "<meta http-equiv='refresh' content='0;url=handlist.php'>";
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


		<form action="handupdate.php" method="POST">
		Tourney ID: <input type="text" name="newIdturniej"                        value="<?php echo $row[1]; ?>"><br />
		Game ID: <input type="text" name="newIdgame"                              value="<?php echo $row[2]; ?>"><br />
		Stack One: <input type="text" name="newStackone"                          value="<?php echo $row[3]; ?>"><br />
		Stack Two: <input type="text" name="newStacktwo"                          value="<?php echo $row[4]; ?>"><br />
		Holecards of the First Player:  <input type="text" name="newHolecardsone" value="<?php echo $row[5]; ?>"><br />
		Holecards of the Second Player: <input type="text" name="newHolecardstwo" value="<?php echo $row[6]; ?>"><br />
		Who's the dealer?: <input type="text" name="newDealer"                    value="<?php echo $row[7]; ?>"><br />
		Blinds: <input type="text" name="newBlindlimit"                           value="<?php echo $row[8]; ?>"><br />
		IDPreflop: <input type="text" name="newIdpreflop"                         value="<?php echo $row[9]; ?>"><br />
		FLOP: <input type="text" name="newFlop"                                   value="<?php echo $row[10]; ?>"><br />
		IDFlop: <input type="text" name="newIdflop"                               value="<?php echo $row[11]; ?>"><br />
		TURN: <input type="text" name="newTurn"                                   value="<?php echo $row[12]; ?>"><br />
		IDTurn: <input type="text" name="newIdturn"                               value="<?php echo $row[13]; ?>"><br />
		RIVER: <input type="text" name="newRiver"                                 value="<?php echo $row[14]; ?>"><br />	
		IDRiver: <input type="text" name="newIdriver"                             value="<?php echo $row[15]; ?>"><br />
		<input type="hidden" name="idhand"                                        value="<?php echo $row[0]; ?>">		
		<input type="submit" value=" Update ">
		</form>

	
	</div>
			
		<div id="footer">
			Copyright Maciej Baranowski
		</div>
	
	</div>


</body>
</html>
	