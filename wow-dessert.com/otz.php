<?php
require_once(__DIR__."/app3.php");
$title = 'Отзывы';
$dataMsg = getAllMsg();
?>
<body>

<section class="home">
   
    <div class="home__content">
        
        <style>
			ul {
             list-style: none;
             margin: 0;
             padding-left: 0;
             margin-top:10x;
             z-index: 3;
             position: absolute;
             top: 10px;
			 display: inline-block;
			 width:100%;
			 background: rgba(0, 0, 0, 0.4);
			 top: 0px;
-webkit-box-pack: center;
-webkit-justify-content: center;
-ms-flex-pack: center;
justify-content: center;
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;

            }
           a {
            text-decoration: none;
            color:#fff;
            padding:10px;
            font-family: arial;
            border-radius:2px;
           -moz-transition: all 0.3s 0.01s ease;
           -o-transition: all 0.3s 0.01s ease;
           -webkit-transition: all 0.3s 0.01s ease;
		    -webkit-text-stroke: #FDF5E6;
  text-shadow: .09em 0 black;
}
            }
          a:hover {
           background: rgba(102, 102, 102, 0.5);

            }
        li {
          float:right;
          margin-right:20px;
          z-index: 3;
         font-size: 25pt;
         
		 
		 
           }
                #zatemnenie {
                    background: rgba(102, 102, 102, 0.5);
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: none;
                }
                #zatemnenie2 {
                    background: rgba(102, 102, 102, 0.5);
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    display: none;
                }
                #okno {
                    width: 320px;
                    height: 230px;
                    text-align: center;
                    padding: 10px;
                    border: 1px solid #000000;
                    border-radius: 5px;
                    color: #000000;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    margin: auto;
                    background: rgba(128, 128, 128, 1.3);
                    z-index: 4;
                }
                #okno2 {
                    width: 300px;
                    height: 300px;
                    text-align: center;
                    padding: 10px;
                    border: 1px solid #000000;
                    border-radius: 5px;
                    color: #000000;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    margin: auto;
                    background: rgba(128, 128, 128, 1.3);
                    z-index: 4;
                }
                #zatemnenie2:target {display: block;}
                #zatemnenie:target {display: block;}
                .close {
                    display: inline-block;
                    border: 1px solid #000000;
                    color: #000000;
                    padding: 0 12px;
                    margin: 10px;
                    text-decoration: none;
                    background: rgba(128, 128, 128, 0.7);
                    font-size: 14pt;
                    cursor:pointer;
                }
                .close:hover {background: #e6e6ff;}
				
                .container {
     padding: 25px 16px 25px 10px;
     font-weight: 400;
     overflow: hidden;
     width: 350px;
     height: auto;
     background: #fff;
     -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
     -moz-box-shadow: 0 1px 3px rgba(0,0,0,.13);
     box-shadow: 0 1px 3px rgba(0,0,0,.13);
     }
     
     #welcome {
     width: 500px;
     padding: 30px;
     background: #fff;
     margin: 160px auto 0;
     -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.13);
     -moz-box-shadow: 0 1px 3px rgba(0,0,0,.13);
    box-shadow: 0 1px 3px rgba(0,0,0,.13);
     }
     
     .container h1 {
     color: #777;
     text-align: center;
     font-weight: 300;
    
    margin-top: 13px;
     }
 
     .container label {
     color: #777;
     font-size: 14px;
     }
 
     #login {
        width: 320px;
          margin: auto;
          padding-bottom: 15px;
          }
 
     .container form .input,.container input[type=text],.container input[type=password],.container input[type=e] {
     background: #fbfbfb;
     font-size: 24px;
     line-height: 1;
     width: 100%;
     padding: 3px;
  margin: 0 6px 5px 0;
    outline: none;
    border: 1px solid #d9d9d9;
     }
     
     .container form .input:focus {
     border: 1px solid #f58220;
  -webkit-box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
 -moz-box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
  box-shadow: 0 0 3px 0 rgba(245,130,32,0.75);
     }
     
     /*= КНОПКИ
     --------------------------------------------------------*/
     
     .button{
     border: solid 1px #da7c0c;
     background: #f78d1d;
     background: -webkit-gradient(linear, left top, leftbottom, from(#faa51a), to(#f47a20));
     background: -moz-linear-gradient(top,  #faa51a, #f47a20);
   filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
    color: #fff;
     padding: 7px 12px;
     -webkit-border-radius:4px;
 moz-border-radius:4px;
  border-radius:4px;
     float: right;
     cursor: pointer;
     }
     
     .button:hover{
     background: #f47c20;
   background: -webkit-gradient(linear, left top, leftbottom, from(#f88e11), to(#f06015));
     background: -moz-linear-gradient(top,  #f88e11, #f06015);
   filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
     }

     footer {
 color: #777;
 font-size: 12px;
 text-align: center;
 margin-top: 20px;
     }
    

            </style>

            <div id="zatemnenie">
                <div id="okno">
                    <form>
                        <h2 class="text-center">Вход</h2>
                       <form action="auth.php" method="post">
<input type="text" name="login" class="form-control" id="login" placeholder="Логин">

<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">


</form>
<input type="checkbox" class="forfm-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><big>Запомнить меня</big></label> <br>
                      
                    </form>
                    <a href="index.html" class="close">Войти</a>
                    <a href="#zatemnenie2" class="close">Регистрация</a>
                    <a href="#" class="close">Назад</a>
                </div>
            </div>
                            
                        
            <div id="zatemnenie2">
                <div id="okno2">
                    <form>
                        <h2 class="text-center">Регистрация</h2>
                        <form action="check.php" method="post">
<input type="text" name="login" class="form-control" id="login" placeholder="Логин">

<input type="text" name="name" class="form-control" id="name" placeholder="Имя">

<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль">

</form> </form>
						
                    <a href="#zatemnenie" class="close">Зарегистрироваться</a>
                    <a href="#zatemnenie" class="close">Назад</a>
                </div>
            </div>
			
<ul>	
            
		   
		   <li><a href="foto.php">Галерея</a></li>
           <li><a href="otz.php">Отзывы</a></li>
		   <li><a href="kont.php">Контакты</a></li>
           
           <li><a href="login.php">Авторизация</a></li>
	
        </ul>
		
<?php require_once("app3.php"); ?>
<div class="container mregister">
<div id="login">
 <h1>Оставить отзыв</h1>
<form action="otz.php" id="registerform" method="post"name="registerform">
 <p><label for="user_login">Полное имя <br>
 <input class="input" id="full_name" name="full_name"size="32"  type="text" value=""></label></p>
<p><label for="user_pass">E-mail <br>
<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
<p><label for="user_pass">Отзыв<br>
<input class="input" id="username" name="username"size="20" type="text" value=""></label></p>
<p class="submit"><input class="button" id="register" name= "register" type="submit" value="Отправить"></p>
	</form>
</div>
</div>

<?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
	$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
	$query =mysqli_query($con, "SELECT * FROM otz WHERE full_name='".$full_name."' AND email='".$email."'");
	$query =mysqli_query($con, "SELECT * FROM otz WHERE full_name='".$full_name."' AND email='".$email."'");
 $query=mysqli_query($con, "SELECT * FROM otz WHERE full_name='".$full_name."'");
 echo mysqli_error($con);
  $numrows=mysqli_num_rows ($query);
if($numrows==0)
   {
	$sql= "INSERT INTO otz
  (full_name, email, username)
	VALUES('$full_name','$email', '$username')";
  $result=mysqli_query($con, $sql);
$result=mysqli_query($con, $sql);

$result=mysqli_query($con, $sql);

if($result){
$message = "Аккаунт успешно создан!";
} else {
$message = "Ощибка доступа к базе данных";
}
} else {
$message = "Имя пользователя уже занято!";
}

} else {

$message = "Все поля обязательны для заполнения!";

}
}
?>
<?php foreach ($dataMsg as $item) : ?>
<tr>
<td>
<div class="container">
<p style="padding-bottom: 20 px; font-weight: bold; font-size: larger;">
<?= $item['full_name']; ?></p>
<p style="padding-bottom: 20px; ">E-mail:<?= $item['email']; ?>руб.</p>
<p style="padding-bottom: 20px; ">Отзыв:<?= $item['username']; ?></p>
</div>
<?php
endforeach; ?>
