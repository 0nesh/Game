<?php include'connection.php' ?>

<h2>Home Page</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, placeat. Adipisci ducimus, aliquam animi illum sunt repellendus nisi numquam, ut quam maiores natus provident iure consequatur optio, quas incidunt molestias!</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam explicabo laboriosam nam debitis, inventore, itaque nostrum dolore a eligendi dignissimos ex. Perspiciatis voluptates deserunt eos minus laudantium delectus natus dolore.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptates, aliquam cupiditate illum magni earum accusantium reprehenderit consectetur, illo explicabo incidunt consequatur amet? In nisi nihil officia sit laudantium dolor.</p>

<h2>Game</h2>
<?php
	$query = mysqli_query($con,"SELECT * FROM games");
	while ($row = mysqli_fetch_array($query)) {
?>
	<div class="showGame">
	<img src="<?= $row['image'] ?>" width="200px">
	<p><?= $row['name'] ?></p>
	<p><?= $row['category'] ?></p>
	<a href="index.php?idGame=<?=$row['idGame']?> ">chơi</a>
	</div>
<?php } ?>

<?php
$idGame = $_GET['idGame'];
switch ($idGame) {
	case 1:
		header('location:FlappyBird/flappyBird.php');
		break;
	case '2':
		header('location:xephinh/xephinh.php');
		break;
	case '3':
		header('location:egg_game/engGame.php');
		break;
	case '4':
		header('location:snake/snake.php');
		break;
		
	default:
		aler("Lỗi!");
		break;
	}

?>

