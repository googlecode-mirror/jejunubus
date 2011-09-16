<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대 순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/contributor.css">
	</head>
	<body>
		<div id='doc'>
			<?php 
				
				for($i=0; $i<5;$i++){
					echo $title[$i];
					?><br>
					<?php
					echo $author[$i];
					?><br>
					<?php
					echo $publisher[$i];
					?><br name='ss'>
					<?php
					echo $book_location[$i];
					?><br>
					<?php
					echo $publish_date[$i];
					?><br><br><br>
					<?php
			}	
			?>
		</div>
</body>
</html>