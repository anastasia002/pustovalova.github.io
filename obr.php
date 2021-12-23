<?php require_once("app2.php"); ?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8"> 
 <title> Обратная связь</title>
<link href="css/style2.css" media="screen" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
	</head>
	<body>
<div class="container mregister">
<div id="login">
 <h1>Обратная связь</h1>
<form action="obr.php" id="registerform" method="post"name="registerform">
<p><label for="user_pass">Имя пользователя <br>
<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
<p><label for="user_pass">E-mail <br>
<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
<p><label for="user_pass">Сообщение <br>
<input class="input" id="sms" name="sms"size="32"   type="text" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Отправить сообщение"></p>
	  <p><a href="index.html" class="submit">Вернуться на главное меню</a></p>
	</form>
</div>
</div>

 <?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['sms'])) {
  $username= htmlspecialchars($_POST['username']);
	$email=htmlspecialchars($_POST['email']);
 $sms=htmlspecialchars($_POST['sms']);
	$query =mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."' AND sms='".$sms."'");
	$query =mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."' AND sms='".$sms."'");
 $query=mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."'");
  $numrows=mysqli_num_rows ($query);
if($numrows==0)
   {
	$sql= "INSERT INTO usertbl
  (username, email, sms)
	VALUES('$username','$email', '$sms')";
  $result=mysqli_query($con, $sql);
 if($result){
	$message = "Сообщение отправлено";
} else {
 $message = "Ошибка доступа к базе данных";
  }
	} 
	} else {
	$message = "Все поля обязательны для заполнения";
	}
	}
	?>
	<?php
	if (!empty($message)) 
	{echo '<p class="error">' . 'MESSAGE: '. '$message'. '</p>';} 
	?>
