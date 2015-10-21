
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>PHP基礎</title>

		<!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <link href="assets/css/main.css" rel="stylesheet">

	</head>
	<body>
		<div class="container">
		<div class="row">
			<div class="col-md-3" style="background-color:#ffffff"></div>
			<div class="col-md-6" style="background-color:#ffc0cb">

			<form action="" method="post">
				input now!!<br />
				<input name="moji" type="text"/><br />
				<button type="submit" class="btn btn-warning btn-xs">
					<span class="glyphicon glyphicon-send" aria-hidden="true"></span> 送信
				</button>
				<br />
				<!-- <input name="submit" type="submit" value="送信"/> -->
			</form>

				 <?php

					if(isset($_POST['moji']))
					{

						$moji = $_POST['moji'];

						$moji = htmlspecialchars($moji);

						display_kekka($moji);
					}

					function display_kekka($inputdata)
					{
						if($inputdata!='')
						{
							echo "Hello!!".$inputdata;
						}
					}

				?>
			</div>
			<div class="col-md-3" style="background-color:#ffffff"></div>
		</div>
		</div>
	</body>
</html>