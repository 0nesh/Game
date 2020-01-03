<?php include'connection.php'; ?>

<?php
	$id = $_GET['idGame'];
	$query = mysqli_query($con, "SELECT * FROM games WHERE idGame = $id");
	$row = mysqli_fetch_array($query);
	if($id) {
?>
		<a href="$row['play']">chơi</a>
<?php }
?>