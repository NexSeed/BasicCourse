<?php
	$hello = '';
	if (isset($_POST['moji'])){
		$hello = puthello($_POST['moji']);
	}

	function puthello($moji){
		return 'Hello!'.$moji;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>
	</head>
	<body>
		<form action="" method="post">
			input now!!<br />
			<input name="moji" type="text" /><br />
			<input name="submit" type="submit" value="送信"/>
		</form>
		<?php echo $hello; ?>
	</body>
</html>