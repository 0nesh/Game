<?php include'connection.php' ?>
<h2>GAMES > Trí Tuệ</h2>

<?php
	$query = mysqli_query($con,"SELECT * FROM games WHERE category LIKE '%Trí Tuệ%'");
	while ($row = mysqli_fetch_array($query)) {
?>
	<div class="showGame">
	<img src="<?= $row['image'] ?>" width="200px">
	<p><?= $row['name'] ?></p>
	<a href="index.php?idGame=<?=$row['idGame']?> ">chơi</a>
	</div>
<?php } ?>


