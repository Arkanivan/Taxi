<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8">
	<title> Сервис по обработке заказов такси
	</title>
</head>
<body>
<a href="main.php"><img src="emblems.png" alt="Яндекс тааакси"></a> <br><br><br>




</body>
<a href="add.php">Ввести заказ вручную</a><br><br><br>
</html>
 
 <?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("my_db");
mysql_set_charset("utf8");

if (!$connection || !$db)
{
  exit (mysql_error());
}

$result = mysql_query(" SELECT * FROM Taxa ORDER BY identifier DESC ");

mysql_close(); ?>




 <table border="1">
 
   <tr>
    <th>№ заказа</th>
    <th>Имя клиента</th>
    <th>Телефон</th>
    <th>Откуда</th>
     <th>Куда</th>
     <th>Статус поездки</th>
   </tr>
<?php while ($row = mysql_fetch_array($result)) { ?>
   <tr><td><?php echo $row ['identifier'];?></td><td><?php echo $row ['Client'];?></td><td><?php echo $row ['Telephone'];?></td><td><?php echo $row ['Whence'];?></td><td><?php echo $row ['Were'];?></td><td><?php echo $row ['Status'];?></td></tr> 
<?php } ?>

<?php
echo $_POST['Client'];

?>