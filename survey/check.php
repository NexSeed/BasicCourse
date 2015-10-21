<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>
	<?php 
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$goiken = $_POST['goiken'];

	if($nickname==''){
		echo '<span style="color:red;">';
		echo 'ニックネームが入力されていません';
		echo '</span>';
	}else{
		echo 'ようこそ';
		echo $nickname;
		echo '様';
		echo '<br />';
	}

	if($email==''){
		echo '<span style="color:red;">';
		echo 'メールアドレスが入力されていません';
		echo '</span>';
		echo '<br />';
	}else{
		echo 'メールアドレス：';
		echo $email;
		echo '<br />';
	}
	if($goiken==''){
		echo '<span style="color:red;">';
		echo 'ご意見が入力されていません';
		echo '</span>';
	}else{
		echo 'ご意見『';
		echo $goiken;
		echo '』<br />';
	}

	?>
	<form method="post" action="thanks.php">
		<input type="button" value="戻る" />
		<input type="submit" value="送信" />
	</form>
</body>
</html>


