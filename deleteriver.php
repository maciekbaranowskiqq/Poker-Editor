<?php require_once('db.php');

		if( isset($_GET['del']) )
		{
			$id = $_GET['del'];
			$sql = "DELETE FROM river WHERE idrivertemp='$id'";
			$response = @mysqli_query($dbc, $sql) or die("Failed".mysql_error());
			echo "<meta http-equiv='refresh' content='0;url=rivershow.php'>";
		}

?>
