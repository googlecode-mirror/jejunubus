<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link rel="stylesheet" type="text/css" href="../css/DormitoryCafeteria.css"/>
</head>

<body>

<?php
include_once '../dormitory/dormitoryDatabase.php';

$database = new dormitoryDatabase();

$menu = $database->selectAll();

?>

<ul>
<?php 

while($row = mysql_fetch_array($menu)){

?>
  <li><?php echo $row['menuDate']; ?> </li>
  <li><?php echo "조식 : ".$row['earlyMorning']; ?> </li>
  <li><?php echo "아침 : ".$row['breakfast']; ?> </li>
  <li><?php echo "점심 : ".$row['lunch']; ?> </li>
  <li><?php echo "저녁 : ".$row['dinner']; ?> </li>
  <br />
<?php 
}
flush();
?>
</ul>
<ul>
<li><평 일></li>
<li> 조기 : 07:00 - 07:30(빵,우유)</li>
<li> 아침 : 07:30 - 09:00</li>
<li> 저녁 : 17:00 - 19:00</li>
<br />
<li><주 말></li>
<li> 아침 : 07:30 - 09:00</li>
<li> 점심 : 12:30 - 13:30(신청자에 한함)</li>
<li> 저녁 : 17:30 - 19:00 </li>
<br />
<li> <방학 중 특별개관></li>
<li> 조기 : 07:00 - 07:30(빵,우유)</li>
<li> 아침 : 07:30 - 09:00</li>
<li> 저녁 : 17:30 - 19:00</li>
</ul>
<iframe id='back' src = '../updateContent/updateContent.php'>
<p></p></iframe>
</body>
</html>

