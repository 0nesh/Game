<?php
	include'connection.php'; 
	error_reporting(0);
?>
<div class="Navigation">
<h3 style="margin-left: 10px;">Navigation</h3>
		<ul>
			<li><a class="selected" href="index.php?muc=home">Home</a></li>
			<li><a class="selected" href="index.php?muc=hanhdong">Hành Động</a></li>
			<li><a class="selected" href="index.php?muc=phieuluu">Phiêu Lưu</a></li>
			<li><a class="selected" href="index.php?muc=tritue">Trí Tuệ</a></li>
			<li><a class="selected" href="index.php?muc=giaitri">Giải Trí</a></li>
		</ul>
</div>

<div class="gamePlays">
<h3 style="margin-left: 10px;">Game Chơi Nhiều</h3>
<?php 
	$query = mysqli_query($con, "SELECT * FROM games ORDER BY view DESC LIMIT 0,5");
	while ( $row = mysqli_fetch_array($query)) {
?>
	<div class="gameView">	
		<img src="<?= $row['image'] ?>" width="30px" height="30px">	
		<a href="index.php?idGame=<?=$row['idGame']?>"><?= $row['name'] ?></a>
		<h6>Lượt Chơi: <?= $row['view'] ?></h6>
	</div>

<?php } ?>
</div>
<?php
	$idGame = $_GET['idGame'];
	$sql = mysqli_query($con, "UPDATE games SET view=view+1 WHERE idGame = $idGame");
?>
