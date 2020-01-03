<!DOCTYPE html>
<html>
<head>
	<title>Game hung trung</title>
	<meta charset="UTF-8">
</head>
<body>
<h3>Hứng Trứng</h3>
<script type="text/javascript" src="js/resource.js"></script>
<script type="text/javascript" src="js/bar.js"></script>
<script type="text/javascript" src="js/chicken.js"></script>
<script type="text/javascript" src="js/bowl.js"></script>
<script type="text/javascript" src="js/egg.js"></script>
<script type="text/javascript" src="js/game.js"></script>
<script type="text/javascript">
	var hungTrung = new game();
	hungTrung.init();
	hungTrung.start();
</script>
</body>


<div id="right">right</div>

<style type="text/css">
	body {
		background: white;
		width: 900px;
		margin-left: auto;
		margin-right: auto;
	}
	canvas {
		float: left;
	}
	#right {
		float: right;
		width: 400px;
	}
</style>
</html>