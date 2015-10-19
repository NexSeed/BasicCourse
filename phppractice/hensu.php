<?php

//変数
$hello = 'Hello,World!';

echo $hello;

$hello = 'Hello,Cebu!';

echo $hello;

echo '<br />';
//制御文

//if文
//数字はシングルクォーテーションで囲まない
//$number は int型（整数型）
$number = 15;

$return = hantei($number);
var_dump($return);

//関数：呼び出して使うことができる
function hantei($no){
	//var_dump:PHPが用意してくれている関数
	var_dump($no);
	if ($no > 10){
		echo '10より大きい数字です';
		//戻り値
		return 1;
		//returnの下（こことか）に書いたものは処理されません
	}else{
		echo '10以下の数字です';
		//戻り値
		return 2;
		//returnの下（こことか）に書いたものは処理されません

	}
}

//関数を使って、入力された文字の頭に常にHello!がつく文字を表示しましょう

?>