<!DOCTYPE html>
<html>
<head>
	<title>제주대 순환버스 for Smart phone</title>
	<meta http-equiv=Content-Type content=text/html; charset=utf-8 />
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no" />
	<link rel=shortcutIcon href=./img/shortcutIcon.png />
	<link rel=stylesheet type=text/css href=http://jejunubus.hosting.paran.com/jejunubus1.0/css/board.css />
</head>
<body>
	<div id=boardform>
		<div id=writeform>
			<form method=post action=http://117.17.102.131/index.php/board/page>
				<textarea class=content rows=5 cols=40 name=content>좋은 의견 많이 주세요~ *^^*</textarea>
				<input class=name type=text name=title value=작성자> 
				<input class=submit type=submit value=Submit>
			</form>
		</div>
	
		<?php echo $feed;?>
		<?php echo $page;?>
	</div>
	
</body>
</html>