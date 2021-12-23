<?php

function connectToDb()
{
$db = mysqli_connect('localhost','root','root','dessert');
return $db;
}

        function getAllMsg() {
$db = connectToDb();
$result = mysqli_query($db, 'SELECT * FROM otz');
$dataMsg = [];
while ($row = mysqli_fetch_assoc($result))
$dataMsg[] = $row;
return $dataMsg;
}
?>

<?php
	
  require("constants.php");
 
 $con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysqli_connect_error());
 mysqli_select_db($con, DB_NAME) or die("Cannot select DB");
?>

<?php foreach ($dataMsg as $item) : ?>
<tr>
<td>
<div class="container">
<p style="padding-bottom: 20 px; font-weight: bold; font-size: larger;">
<?= $item['fio']; ?></p>
<p style="padding-bottom: 20px; ">Почта:<?= $item['email']; ?>руб.</p>
<p style="padding-bottom: 20px; ">Отзыв:<?= $item['msg']; ?></p>
</div>
<?php
endforeach; ?>


