<?php

	//配列（同じ種類のデータ）
	$fruits=array('mango','banana','orange','watermelon','ranbutan');

	echo $fruits[0];echo '<br />';
	echo $fruits[1];echo '<br />';
	echo $fruits[2];echo '<br />';
	echo $fruits[3];echo '<br />';
	
	//連想配列（異なる種類のデータ）
	$seedkun_R = array('name'=>'seedkun',
						'address'=>'cebu',
						'gender'=>'male',
						'age'=>3);

	echo $seedkun_R['name'];echo '<br />';
	echo $seedkun_R['address'];echo '<br />';
	echo $seedkun_R['gender'];echo '<br />';
	echo $seedkun_R['age'];echo '<br />';

	//制御文（繰り返し）
	//for文
	//for (初期値; 繰り返し条件; 増加率 1増える) 
	for ($i=0; $i < count($fruits); $i++) {
		//echo $i; 
		//echo 'Hello<br />';
		echo $fruits[$i].'<br />';
	}

	foreach ($seedkun_R as $key => $value) {
		echo $key.':';
		echo $value.'<br />';	

		switch ($key) {
			case 'name':
				echo 'こんにちは。<br />';
				break;
			case 'address':
				echo 'に住んでます。<br />';
				break;
			case 'gender':
				echo 'です。<br />';
				break;
			case 'age':
				echo '歳です。<br />';
				break;
			
			default:
				# code...
				break;
		}
	}
?>