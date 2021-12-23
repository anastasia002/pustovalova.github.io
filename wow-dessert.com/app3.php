
<?php
	
  require("constants3.php");
 
 $con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysqli_connect_error());
 mysqli_select_db($con, DB_NAME) or die("Cannot select DB");
?>

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
