<?php
	error_reporting(0);
	if(isset($_GET['muc'])){
		$muc = $_GET['muc'];
	}else{
		$muc = "home";
	}

	switch ($muc) {
		case 'home':
			include'home.php';
			break;
		case 'hanhdong':
			include'hanhdong.php';
			break;
		case 'phieuluu':
			include'phieuluu.php';
			break;
		case 'tritue':
			include'tritue.php';
			break;
		case 'giaitri':
			include'giaitri.php';
			break;
		
		default:
			aler("Some Thing was Wrong!");
			break;
	}

	
?>


