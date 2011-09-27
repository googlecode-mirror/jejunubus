<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대 순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/library.css">
	</head>
	<body>
		<div id='doc'>
			<div id='searchBar'>
				<form action="test/sicheol" method="get">
					<input id="searchInputbox" type="text" value="책이름은??"></input>
					<input id="submitButton" type="submit" value="찾아봅시다!!"></input>
				</form>
			</div>
			<div id='bookList'>
				<?php if(isset($books)){?>
					<?php for($i=0; $i<sizeof($books);$i++){ ?>
					<ul class='book'>
						<li><?php echo $books[$i]->title;?></li>
						<li><?php echo $books[$i]->author." / ".$books[$i]->publisher." / ".$books[$i]->publishDate;?></li>
						<li><?php echo $books[$i]->location;?></li>
					</ul>
					<?php } ?>
				<?php }?>
			</div>
		</div>
	</body>
</html>