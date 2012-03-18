<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대 순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/test/css/library.css">
	</head>
	<body>
		<div id='doc'>
			<div id='searchBar'>
				<form action="librarie" method="get">
					<input id="searchInputbox" name="keyword" type="text" value="책이름은??"></input>
					<input id="submitButton" type="submit" value="찾아봅시다!!"></input>
				</form>
				<script type="text/javascript" src="http://jejunubus.hosting.paran.com/js/board.js"></script>
				<script type="text/javascript">
					clearText('searchInputbox');	
				</script>
			</div>
			<?php if(isset($books)){?>
				<div id='bookList'>
					<?php for($i=0; $i<sizeof($books);$i++){ 
						if(isset($books[$i]->title)){ ?>
							<ul class='book'>
								<li><?php echo $books[$i]->title;?></li>
								<li><?php echo $books[$i]->author." / ".$books[$i]->publisher." / ".$books[$i]->publishDate;?></li>
								<li><?php echo $books[$i]->location;?></li>
							</ul>
					<?php }
					}?>
				</div>
			<?php } ?>
			<?php if(isset($keyword)){?>
			<div id='page'>
				<ul>
					<li class="goHome"><a href="/index.php?main">홈</a></li>
					<li class="prev"><a href=<?php echo "librarie?keyword=".$keyword."&page=".$prevPage; ?>>이전</a></li>
					<li class="next"><a href=<?php echo "librarie?keyword=".$keyword."&page=".$nextPage; ?>>다음</a></li>
				</ul>
			</div>
			<?php }?>
		</div>
	</body>
</html>