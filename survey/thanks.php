<?php
try{

//1.データベースに接続する
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = 'mangoshake';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

?>
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

		print $nickname;
		print '様';
		print '<br />';
		print 'ご意見ありがとうございました。';
		print '頂いたご意見『'.$goiken.'』';
		print '<br />';
		print $email.'にメールを送りましたのでご確認下さい。';

		//2.SQLで指令をだす
		$sql = 'INSERT INTO servey (nickname,email,goiken)VALUES("';
		$sql .=	$nickname.'","'.$email.'","'.$goiken.'")';

		//echo $sql;
		$stmt = $dbh->prepare($sql);

		$stmt->execute();

		//3.データベースから切断する
		$dbh=null;
}
catch(exception $e)
{

	echo 'ただいま障害が発生しております。ご不便をお掛けし申し訳ありません';
}	

	?>
	<br />
</body>
</html>


