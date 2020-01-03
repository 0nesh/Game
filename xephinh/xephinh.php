<?php include'../connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
    	body {
    		width: 1100px;
    		margin-left: auto;
    		margin-right: auto;
    	}
    	canvas {
    	}
    	#box {
    		padding: 10px;
    		width: 300px;
    		float: left;
    	}
    	#box2 {
    		width: 202px;
    		height: 401px;
    		float: left;
    		border: 1px solid black;
    	}
    	#box3 {
    		width: 450px;
    		height: 401px;
    		border: 1px solid black;
    		margin-left: 30px;
    		float: left;

    	}
    </style>
    <title>Xếp Hình</title>
</head>
<body>
	<div id="box">
	<?php
	$query = mysqli_query($con, "SELECT * FROM games WHERE idGame = 2");
	$row = mysqli_fetch_array($query);
	$id = $row['idGame'];
	?>
	<h2>Game: <?=$row['name']?></h2>
	<h3>Cách Chơi</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A repudiandae explicabo quasi deserunt esse, voluptatem quos non, dicta, sint illum provident adipisci laudantium et amet doloribus officia porro fugit, aut!</p>
	<form method="POST" action="">
		<input type="button" name="btn" id="btn" value="Chơi" onclick=" new game();">
		<div>Điểm Cao: <p></p></div>
		<input type="text" name="player" id="text1" >
		<input type="submit" value="Nhập">
		<div>Name: <p>
			<?php
    		$name = $_POST['player'];
    		if (empty($name)) {
        		echo "Name is empty";
    		} else {
        		echo $name;
        		$sql = mysqli_query($con, "INSERT INTO player(idGame,namePlayer) VALUES($id,N'$name') ");
    		}
			

			?>			
		</p></div>
				
		<table border="1">
			<tr>
				<td>Người Chơi</td>
				<td>Điểm</td>				
			</tr>
			<?php
			$sql1 = mysqli_query($con, "SELECT * FROM player ORDER BY score DESC LIMIT 0,5 ");
			while($row1=mysqli_fetch_array($sql1)){
			?>
			<tr>
				<td><?=$row1['namePlayer']?></td>
				<td><?=$row1['score']?></td>
			</tr>
			<?php } ?>
		</table>
	</form>	
	</div>
	
	<div id="box2">
	<canvas id="canvas"></canvas>
	</div>
	<div id="box3"> 
	<h2>Comment</h2>
	<form method="POST" action="">
		<div class="form-group">
      		<textarea class="form-control" rows="4" cols="50" name="content-comment"></textarea>
    	</div>
    	<div>
    		<button class="btn btn-primary" name="comment">Gửi</button>
    	</div>
	</form>
	</div>
</body>

<script type="text/javascript" src="const.js"></script>
<script type="text/javascript" src="dot.js"></script>
<script type="text/javascript" src="board.js"></script>
<script type="text/javascript" src="brick.js"></script>
<script type="text/javascript" src="game.js"></script>



</html>
